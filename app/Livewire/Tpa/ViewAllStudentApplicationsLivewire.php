<?php

namespace App\Livewire\Tpa;

use Alert;
use App\Exports\ExportStudents;
use App\Models\FieldApplicationData;
use App\Models\Module;
use App\Models\ModuleVacantSpace;
use File;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ViewAllStudentApplicationsLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $selectAll = false;
    public $selectedApplications = [];
    public $software_development_vacant_spaces;
    public $networking_vacant_spaces;
    public $total_applicants;

    public function mount()
    {
        $this->software_development_vacant_spaces = ModuleVacantSpace::where('module_id', '=', '1')->first();
        $this->networking_vacant_spaces = ModuleVacantSpace::where('module_id', '=', '2')->first();
        $this->total_applicants = FieldApplicationData::count();
    }
    public function render()
    {
        if (auth()->user()->role_id == '2') {
            $applications = FieldApplicationData::query()
                ->whereHas('user', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->where('confirm_status', '=', 'confirmed')
                ->paginate(15);

            return view('livewire.tpa.view-all-student-applications-livewire', [
                'applications' => $applications
            ]);
        } else {
            $applications = FieldApplicationData::query()
                ->whereHas('user', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->paginate(15);

            return view('livewire.tpa.view-all-student-applications-livewire', [
                'applications' => $applications
            ]);
        }
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedApplications = FieldApplicationData::pluck('id')->toArray();
        } else {
            $this->selectedApplications = [];
        }
    }

    public function updatedSelectedApplications()
    {
        $this->selectAll = count($this->selectedApplications) === FieldApplicationData::count();
    }

    public function updateStatuses()
    {
        FieldApplicationData::whereIn('id', $this->selectedApplications)
            ->update([
                'approval_status' => 'approved',
                'view_status' => 'viewed'
            ]);

        $this->selectedApplications = [];
        $this->selectAll = false;

        $this->dispatch('application-status-updated');
    }

    public function approvalStatus($id)
    {

        $application = FieldApplicationData::findOrFail($id);
        $application->approval_status = 'approved';
        $application->view_status = 'viewed';
        $application->update();

        $this->dispatch('application-status-updated');
    }
    public function deleteSelected()
    {
        $applications = FieldApplicationData::query()->whereIn('id', $this->selectedApplications)->get();

        foreach ($applications as $application) {
            $filePath = $application->application_letter;
            $originalPath = 'storage/application_letters/' . $filePath;
            $trashPath = 'storage/application_letters/trash/' . $filePath;

            // Move the file to the trash directory if it exists
            if (File::exists($originalPath)) {
                File::move($originalPath, $trashPath);
            }

            // Soft delete the application record from the database
            $application->delete();
        }

        $this->selectedApplications = [];
        $this->selectAll = false;

        $this->dispatch('application-status-updated');
        session()->flash('delete-selected', 'Student applications deleted successfully!');
    }



    public function deleteApplication($id)
    {
        $delete = FieldApplicationData::find($id);

        if ($delete) {
            // Assuming the file path is stored in a column named 'file_path'
            $filePath = $delete->application_letter;
            $completePath = 'storage/application_letters/' . $filePath;



            // Check if the file exists and delete it
            if (File::exists($completePath)) {

                File::delete($completePath);
            }

            // After deleting the file, delete the record from the database
            $delete->delete();
            session()->flash('delete-selected', 'Student applications are deleted successfully!');
        } else {
            // Code to handle the case where the record is not found

            session()->flash('delete-selected-error', 'Not found | ERROR 404!');
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function exportStudentsExcel()
    {

        session()->flash('download', 'Download complete!');
        return Excel::download(new ExportStudents, 'Tpa-student-applicants.xlsx');
    }
}
