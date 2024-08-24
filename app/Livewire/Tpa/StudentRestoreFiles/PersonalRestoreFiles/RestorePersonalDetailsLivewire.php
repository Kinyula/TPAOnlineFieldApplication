<?php

namespace App\Livewire\Tpa\StudentRestoreFiles\PersonalRestoreFiles;

use App\Models\PersonalDetail;
use Livewire\Component;
use Livewire\WithPagination;

class RestorePersonalDetailsLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $selectAll = false;
    public $selected = [];
    public function render()
    {
        return view(
            'livewire.tpa.student-restore-files.personal-restore-files.restore-personal-details-livewire',
            [
                'personalDetails' => $this->personalDetails
            ]
        );
    }

    public function updatedSelectAll()
    {
        $this->selected = $this->personalDetails->pluck('id')->toArray();
    }

    public function getPersonalDetailsProperty()
    {
        return PersonalDetail::with(['user'])->onlyTrashed()->whereHas('user', fn($query) => $query->where('first_name', 'like', '%' . $this->search . '%')->orWhere('last_name', 'like', '%' . $this->search . '%'))->paginate(15);
    }

    public function restoreSelected()
    {
        PersonalDetail::onlyTrashed()->whereIn('id', $this->selected)->restore();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('restore-selected', 'Selected Personal Details have been restored.');
    }

    public function restore($id)
    {
        PersonalDetail::onlyTrashed()->where('id', $id)->restore();
        session()->flash('restore-single', 'Personal Detail has been restored.');
    }

    public function deleteSelected()
    {
        PersonalDetail::onlyTrashed()->whereIn('id', $this->selected)->forceDelete();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('delete-selected', 'Selected Personal Details have been deleted permanently.');
    }
    public function delete($id)
    {
        PersonalDetail::onlyTrashed()->where('id', $id)->forceDelete();
        session()->flash('delete-single', 'Personal Detail has been deleted permanently.');
    }
}
