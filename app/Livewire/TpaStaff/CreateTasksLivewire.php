<?php

namespace App\Livewire\TpaStaff;

use App\Models\GroupTask;
use App\Models\AssignmentGroup;
use Livewire\Component;

class CreateTasksLivewire extends Component
{
    public $selectedGroup;
    public $task;
    protected $rules = [

        'selectedGroup' => 'required|exists:assignment_groups,id',
        'task' => 'required|string|min:3',
    ];

    public function createTask()
    {
        $this->validate();

        $this->dispatch('task-created');
        GroupTask::create([

            'user_id' => auth()->id(),
            'assignment_group_id' => $this->selectedGroup,
            'task' => $this->task,
        ]);

        // Flash success message
        session()->flash('success', 'Task created successfully.');

        // Reset fields after submission
        $this->reset(['selectedGroup', 'task']);
    }

    public function render()
    {
        // Retrieve all distinct assignment groups for the select dropdown
        $groups = AssignmentGroup::selectRaw('MIN(id) as id, `group`')
        ->groupBy('group')
        ->get();



        return view('livewire.tpa-staff.create-tasks-livewire', [
            'groups' => $groups,
        ]);
    }


}
