<?php

namespace App\Livewire\Tpa;

use Livewire\Component;

class FieldApplicationLivewire extends Component
{
    public $currentStep = 1;
    public $totalSteps = 8; // Total number of steps/forms
    public $progress = 0;

    

    protected $listeners = ['progressUpdated'];

    public function progressUpdated($progress)
    {
        $this->progress = $progress;
    }

    public function nextStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            // Prevent advancing to step 15 unless progress is >= 50%
            if ($this->currentStep == 14 && $this->progress < 50) {
                return;
            }
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
        return view('livewire.tpa.field-application-livewire');
    }
}
