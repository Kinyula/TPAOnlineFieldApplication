<?php

namespace App\Livewire\Tpa;

use App\Exports\StudentApplications\StudentApplicationExport;
use App\Models\TpaFieldApplicationData;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class ViewAllTpaStudentApplicationsLivewire extends Component
{
    public $search = '';
    public $selectAll = false;
    public $selectedApplications = [];
    public $software_development_vacant_spaces;
    public $networking_vacant_spaces;
    public $total_applicants;
    public function render()
    {
        if (auth()->user()->role_id == '4') {
            $applications = TpaFieldApplicationData::query()
                ->whereHas('user', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })

                ->paginate(15);

            return view('livewire.tpa.view-all-tpa-student-applications-livewire', [
                'applications' => $applications
            ]);
        } else {
            $applications = TpaFieldApplicationData::query()
                ->whereHas('user', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->where('confirm_status', '=', 'confirmed')
                ->paginate(15);
            return view('livewire.tpa.view-all-tpa-student-applications-livewire', [
                'applications' => $applications
            ]);
        }
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedApplications = TpaFieldApplicationData::pluck('id')->toArray();
        } else {
            $this->selectedApplications = [];
        }
    }

    public function updatedSelectedApplications()
    {
        $this->selectAll = count($this->selectedApplications) === TpaFieldApplicationData::count();
    }

    public function updateStatuses()
    {
        TpaFieldApplicationData::whereIn('id', $this->selectedApplications)
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

        $application = TpaFieldApplicationData::findOrFail($id);
        $application->approval_status = 'approved';
        $application->view_status = 'viewed';
        $application->update();

        $this->dispatch('application-status-updated');
    }

    public function disapproveApplication($id)
    {
        $application = TpaFieldApplicationData::findOrFail($id);
        $application->approval_status = 'not approved';
        $application->view_status = 'not viewed';
        $application->update();

        $this->dispatch('application-status-updated');
    }
    public function deleteSelected()
    {
        $applications = TpaFieldApplicationData::query()->whereIn('id', $this->selectedApplications)->get();

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
        $delete = TpaFieldApplicationData::find($id);

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



    public function exportStudentsExcel()
    {

        session()->flash('download', 'Download complete!');
        return Excel::download(new StudentApplicationExport, 'Tpa-student-applicants.xlsx');
    }
}
