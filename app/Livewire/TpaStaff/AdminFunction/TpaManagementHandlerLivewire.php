<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use Livewire\Component;

class TpaManagementHandlerLivewire extends Component
{
    public $currentStep = 1;
    public $totalSteps = 6;

    public function nextStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.tpa-management-handler-livewire');
    }
}
