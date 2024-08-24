<?php

namespace App\Livewire\TpaStaff;

use App\Models\Deadline;
use App\Models\Module;
use Livewire\Component;

class SetDeadlineLivewire extends Component
{
    public $module;
    public $deadline;
    public $modules;
    public $data;
    public $isUpdating = false;

    public function mount()
    {
        $this->modules = Module::all();
    }

    public function updatedModule($moduleId)
    {
        $existingDeadline = Deadline::where('module_id', $moduleId)->first();

        if ($existingDeadline) {
            $this->isUpdating = true;
            $this->deadline = $existingDeadline->deadline_date;
        } else {
            $this->isUpdating = false;
            $this->deadline = $this->deadline;
        }
    }

    public function saveOrUpdateDeadline()
    {

        $this->validate([
            'deadline' => 'required|date',
            'module' => 'required'
        ]);

        $deadline = Deadline::updateOrCreate(
            ['module_id' => $this->module],
            ['deadline_date' => $this->deadline]
        );

        if ($deadline->wasRecentlyCreated) {
            session()->flash('message', 'Deadline set successfully!');
        } else {
            session()->flash('update', 'Deadline updated successfully!');
        }

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->module = null;
        $this->deadline = null;
        $this->isUpdating = false;
    }

    public function render()
    {
        return view('livewire.tpa-staff.set-deadline-livewire');
    }
}
