<?php

namespace App\Livewire\Tpa;

use Alert;
use App\Exports\ExportStudents;
use App\Models\FieldApplicationData;
use App\Models\Module;
use App\Models\ModuleVacantSpace;
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

    public function mount()
    {
        $this->software_development_vacant_spaces = ModuleVacantSpace::where('module_id', '=', '1')->first();
        $this->networking_vacant_spaces = ModuleVacantSpace::where('module_id', '=', '2')->first();
    }
    public function render()
    {
        if (auth()->user()->role_id == '2') {
            $applications = FieldApplicationData::query()
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->where('confirm_status','=','confirmed')
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

        FieldApplicationData::query()->whereIn('id', $this->selectedApplications)->delete();
        $this->selectedApplications = [];
        $this->selectAll = false;

        $this->dispatch('application-status-updated');
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
