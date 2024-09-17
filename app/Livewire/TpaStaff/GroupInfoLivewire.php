<?php

namespace App\Livewire\TpaStaff;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\GroupTask;


class GroupInfoLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $selected = [];
    public $selectAll = false;

    protected $listeners = ['deleteSelected' => 'deleteSelected'];

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selected = GroupTask::pluck('id')->toArray();
        } else {
            $this->selected = [];
        }
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $assignment = GroupTask::findOrFail($id);
        $assignment->delete();

        session()->flash('delete-single', 'Assignment deleted successfully.');
    }

    public function deleteSelected()
    {
        $assignments = GroupTask::whereIn('id', $this->selected)->get();

        foreach ($assignments as $assignment) {
            $assignment->delete();
        }

        $this->selected = [];
        session()->flash('delete-selected', 'Selected assignments deleted successfully.');
    }

    public function render()
    {

        $assignments = GroupTask::with(['assignmentGroup', 'comments'])
        ->when(auth()->user()->role_id == 0, function ($query) {
            $query->where('user_id', auth()->id());
        })
        ->when($this->search, function ($query) {
            $query->whereHas('user', function ($q) {
                $q->where('first_name', 'like', '%' . $this->search . '%')
                  ->orWhere('last_name', 'like', '%' . $this->search . '%');
            });
        })
        ->paginate(10);



        return view('livewire.tpa-staff.group-info-livewire', [
            'assignments' => $assignments,
        ]);
    }
}
