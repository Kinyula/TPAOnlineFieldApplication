<?php

namespace App\Livewire\TpaStaff;

use App\Models\AssignmentGroup;
use App\Models\GroupTask;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ViewTasksLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $editingTask = false;
    public $taskForm = [
        'id' => null,
        'task' => '',
    ];

    #[On('task-created')]
    public function render()
    {
        // Retrieve tasks and groups with pagination
        $tasks = GroupTask::with(['assignmentGroup', 'user'])
            ->where(function ($query) {
                $query->where('task', 'like', '%' . $this->search . '%')
                    ->orWhereHas('assignmentGroup', function ($q) {
                        $q->where('group', 'like', '%' . $this->search . '%');
                    });
            })
            ->paginate(10);

        return view('livewire.tpa-staff.view-tasks-livewire', [
            'tasks' => $tasks,
        ]);
    }

    public function editTask($taskId)
    {
        $task = GroupTask::findOrFail($taskId);

        $this->taskForm = [
            'id' => $task->id,
            'task' => $task->task,
        ];

        $this->editingTask = true;
    }

    public function updateTask()
    {
        $this->validate([
            'taskForm.task' => 'required|string|max:255',
        ]);

        $task = GroupTask::findOrFail($this->taskForm['id']);
        $task->update([
            'task' => $this->taskForm['task'],
        ]);

        session()->flash('updated', 'Task updated successfully.');
        $this->editingTask = false;
        $this->reset('taskForm');
    }

    public function deleteTask($taskId)
    {
        $task = GroupTask::findOrFail($taskId);
        $task->delete();

        session()->flash('message', 'Task deleted successfully.');
    }
}
