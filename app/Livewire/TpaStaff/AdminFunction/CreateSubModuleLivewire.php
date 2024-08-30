<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Module;
use App\Models\SubModule;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateSubModuleLivewire extends Component
{
    public $module;
    public $sub_module;

    #[On('module-created')]
    public function render()
    {
        $modules = Module::get();
        return view('livewire.tpa-staff.admin-function.create-sub-module-livewire',['modules' => $modules]);
    }
    public function createSubmodule(){

        $this->validate([
           'module' =>'required',
           'sub_module' =>'required|unique:sub_modules,sub_module',
        ]);

        $sub_module = new SubModule();
        $sub_module->module_id = $this->module;
        $sub_module->sub_module = $this->sub_module;
        $sub_module->save();
        session()->flash('sub-module', 'Sub-module created successfully');
        $this->reset(['module','sub_module']);
        // $this->dispatch('module-created');
        session()->flash('sub-module','Sub module is created successfully');
    }
}
