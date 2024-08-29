<?php

namespace App\Livewire\Tpa\TpaStaffRestoreFiles\ApplicationRestoreFiles;

use App\Models\FieldApplicationData;
use File;
use Livewire\Component;
use Livewire\WithPagination;

class RestoreApplicationDetailsLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $selectedApplications = [];
    public $selectAll = false;

    public function render()
    {
        return view('livewire.tpa.tpa-staff-restore-files.application-restore-files.restore-application-details-livewire', ['trashedApplications' => $this->trashedApplications]);
    }

    public function getTrashedApplicationsProperty()
    {
        return FieldApplicationData::with(['user'])->onlyTrashed()->whereHas('user', fn($query) => $query->where('first_name', 'like', '%' . $this->search . '%'))->paginate(15);
    }

    public function updatedSelectAll()
    {

        if ($this->selectAll) {
            $this->selectedApplications = $this->trashedApplications->pluck('id')->toArray();
        } else {
            $this->selectedApplications = [];
        }
    }
    public function restoreSelected()
    {
        FieldApplicationData::withTrashed()->whereIn('id', $this->selectedApplications)->restore();

        $this->selectedApplications = [];
        $this->selectAll = false;
        session()->flash('restore-selected', 'Applications restored successfully!');
    }

    public function restoreApplication(){
        
    }

    public function deleteSelectedPermanently()
    {
        // Fetch the selected applications
        $applications = FieldApplicationData::query()->whereIn('id', $this->selectedApplications)->get();

        foreach ($applications as $application) {
            // Assuming the file path is stored in a column named 'application_letter'
            $filePath = $application->application_letter;
            $completePath = 'storage/application_letters/trash' . $filePath;

            // Check if the file exists and delete it
            if (File::exists($completePath)) {

                File::delete($completePath);
            }

            // Delete the application record from the database
            dd($completePath);
            $application->forceDelete();
        }

        // Clear the selection
        $this->selectedApplications = [];
        $this->selectAll = false;

        // Dispatch event and flash message
        $this->dispatch('application-status-updated');
        session()->flash('delete-selected', 'Student applications deleted successfully!');
    }
}
