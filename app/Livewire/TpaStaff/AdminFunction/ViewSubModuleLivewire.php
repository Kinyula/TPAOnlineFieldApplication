<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\FieldApplicationData;
use App\Models\SubModule;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewSubModuleLivewire extends Component
{
    public $softwareDevelopmentSubModules;
    public $data;

    public function mount()
    {
        $this->softwareDevelopmentSubModules = SubModule::with(['fieldApplications'])->where('module_id', '1')->get();
        $this->data = FieldApplicationData::where('user_id', '=', auth()->user()->id)->exists();
    }

    #[On('application-submitted')]
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-sub-module-livewire');
    }
}
