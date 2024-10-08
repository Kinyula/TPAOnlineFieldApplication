<?php

namespace App\Livewire\TpaStaff;

use App\Models\Department;
use App\Models\SetFieldDeadline;
use Livewire\Component;

class SetFieldDeadlineLivewire extends Component
{
    public $department;
    public $departments;
    public $deadline;

    public $data;
    public $isUpdating = false;

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function saveOrUpdateDeadline()
    {
        $this->validate([
            'deadline' => 'required|date',
            'department' => 'required',
        ]);

        $deadline = SetFieldDeadline::updateOrCreate(
            ['department_id' => $this->department],
            [
                'deadline_date' => $this->deadline,
                'user_id' => auth()->id(),
            ]
        );

        $message = $deadline->wasRecentlyCreated
            ? 'Deadline set successfully!'
            : 'Deadline updated successfully!';

        session()->flash('message', $message);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->department = null;
        $this->deadline = null;
        $this->isUpdating = false;
    }

    public function render()
    {
        return view('livewire.tpa-staff.set-field-deadline-livewire');
    }
}
