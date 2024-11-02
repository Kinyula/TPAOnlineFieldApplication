<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use Livewire\Component;

class ViewTpaManagementHandlerLivewire extends Component
{
    public $currentStep = 1;
    public $totalSteps = 8;

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
        return view('livewire.tpa-staff.admin-function.view-tpa-management-handler-livewire');
    }
}
