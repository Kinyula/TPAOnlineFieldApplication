<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\AcademicDetail;
use App\Models\ContactDetail;
use App\Models\LanguageProficiency;
use App\Models\PersonalDetail;

use Livewire\Component;

class FieldApplicationProgressbarLivewire extends Component
{
    public $totalSteps = 6; // Total number of steps/forms
    public $completedSteps = 0; // Dynamically fetched from the database
    public $progress = 0; // Progress percentage

    protected $listeners = [
        'stepCompleted' => 'calculateProgress', // Recalculate progress when this event is fired
    ];

    public function render()
    {
        $this->completedSteps = $this->fetchCompletedSteps(); // Update completed steps on render
        $this->progress = $this->calculateProgress(); // Calculate progress
        $this->dispatch('progressUpdated', $this->progress); // Dispatch the progress update to parent component
        return view('livewire.tpa.field-application-files.field-application-progressbar-livewire');
    }

    protected function fetchCompletedSteps()
    {
        $completedSteps = 0;

        // Example: Check if personal details have been completed
        if (PersonalDetail::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if contact details have been completed
        if (ContactDetail::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if academic details have been completed
        if (AcademicDetail::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if language proficiency details have been completed
        if (LanguageProficiency::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        return $completedSteps;
    }

    public function calculateProgress()
    {
        if ($this->totalSteps > 0) {
            return ($this->completedSteps / $this->totalSteps) * 100;
        }
        return 0;
    }
}
