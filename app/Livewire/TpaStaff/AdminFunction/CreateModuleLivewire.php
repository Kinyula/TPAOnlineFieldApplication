<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Department;
use App\Models\Module;
use Livewire\Component;

class CreateModuleLivewire extends Component
{
    public $module;
    public $departments;
    public $department;

    public function mount()
    {
        $this->departments = Department::get();
    }
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-module-livewire');
    }

    public function createModule()
    {
        // Code to create module goes here
        $this->validate(['module' => 'required','department' => 'required']);
        $module = new Module();
        $module->department_id = $this->department;
        $module->module_name = $this->module;
        $module->save();
        session()->flash('module', 'Module created successfully!');
        $this->reset(['module', 'department']);

        $this->dispatch('module-created');
    }
}
