<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use Livewire\Component;
use App\Models\SubModule;
use Livewire\Attributes\On;

class ViewNetworkingSubModulesLivewire extends Component
{
    public $networkingSubModules;

    public function mount()
    {
        $this->networkingSubModules = SubModule::with(['fieldApplications'])->where('module_id', '2')->get();
    }

    #[On('application-submitted')]
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-networking-sub-modules-livewire');
    }
}
