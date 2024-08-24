<?php

namespace App\Livewire\Student;

use Livewire\Component;

class ViewStudentDetailsLivewire extends Component
{
    public $currentStep = 1;
    public $totalSteps = 9;

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

    public function getStepPercentageProperty()
    {
        return ($this->currentStep / $this->totalSteps) * 100;
    }

    public function submit()
    {
        // Submit logic
    }

    public function render()
    {
        return view('livewire.student.view-student-details-livewire', [
            'stepPercentage' => $this->stepPercentage
        ]);
    }
}
