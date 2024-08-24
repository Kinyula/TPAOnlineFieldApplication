<?php

namespace App\Livewire\TpaStaff;

use App\Models\Module;
use App\Models\ModuleVacantSpace;
use Livewire\Component;

class CreateVacantSpacesLivewire extends Component
{
    public $vacant_space;
    public $module;
    public $modules;

    public function mount()
    {

        $this->modules = Module::get();

    }

    public function render()
    {
        return view('livewire.tpa-staff.create-vacant-spaces-livewire');
    }

    public function createVacantSpaces()
    {
        $this->validate(['module' => 'required', 'vacant_space' => 'required']);
        $vacant_spaces = new ModuleVacantSpace();
        $vacant_spaces->user_id = auth()->user()->id;
        $vacant_spaces->module_id = $this->module;
        $vacant_spaces->vacant_space = $this->vacant_space;
        $vacant_spaces->save();

        session()->flash('spaces', 'Vacant spaces created successfully');
        $this->reset(['vacant_space','module']);
    }
}
