<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Deadline;
use App\Models\Module;
use Livewire\Component;

class ViewModuleLivewire extends Component
{
    public $modules;
    public $softwareDevelopmentDeadline;
    public $networkingDeadline;
    public $marketingDeadline;

    public function mount()
    {
        // Get all modules from the database
        $this->modules = Module::get();

        // Retrieve deadlines for specific modules
        $this->softwareDevelopmentDeadline = Deadline::where('module_id', '1')->first();
        $this->networkingDeadline = Deadline::where('module_id', '2')->first();
        $this->marketingDeadline = Deadline::where('module_id', '3')->first();
    }

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-module-livewire');
    }
}
