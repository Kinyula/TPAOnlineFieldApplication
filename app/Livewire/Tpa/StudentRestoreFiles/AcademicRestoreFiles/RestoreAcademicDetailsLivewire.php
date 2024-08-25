<?php

namespace App\Livewire\Tpa\StudentRestoreFiles\AcademicRestoreFiles;

use App\Models\AcademicDetail;
use Livewire\Component;
use Livewire\WithPagination;

class RestoreAcademicDetailsLivewire extends Component
{
    use WithPagination;
    public $selected = [];
    public $selectAll = false;
    public $search = '';

    public function getAcademicDetailsProperty()
    {
        return AcademicDetail::with(['user'])->onlyTrashed()->whereHas('user', function ($query) {
            $query->where('first_name', 'like', '%' . $this->search . '%')
                ->orWhere('last_name', 'like', '%' . $this->search . '%');
        })->paginate(15);
    }
    public function render()
    {
        return view('livewire.tpa.student-restore-files.academic-restore-files.restore-academic-details-livewire', [
            'academicDetails' => $this->academicDetails
        ]);
    }
    public function updatedSelectAll()
    {
        if ($this->selectAll) {
            $this->selected = $this->academicDetails->pluck('id')->toArray();
        } else {
            $this->selected = [];
        }
    }
    public function deleteSelected()
    {
        AcademicDetail::whereIn('id', $this->selected)->forceDelete();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('delete-selected', 'Selected academic details deleted successfully.');
    }

    public function delete($id)
    {
        AcademicDetail::where('id', $id)->forceDelete();
        session()->flash('delete-single', 'Academic detail deleted successfully.');
    }
    public function restoreSelected()
    {
        AcademicDetail::withTrashed()->whereIn('id', $this->selected)->restore();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('restore-selected', 'Selected academic details restored successfully.');
    }
    public function restore($id)
    {
        AcademicDetail::withTrashed()->where('id', $id)->restore();
        session()->flash('restore-single', 'Academic detail restored successfully.');
    }
}
