<?php

namespace App\Livewire\Tpa\InternshipApplicationFiles;

use Livewire\Component;
use App\Models\AcademicDetail;
use App\Models\ApplicationDeclarationDetail;
use App\Models\ContactDetail;
use App\Models\LanguageProficiency;
use App\Models\OtherAttachmentDetail;
use App\Models\PersonalDetail;
use App\Models\ProfessionalQualification;
use App\Models\ProjectDetail;
use App\Models\RefereeDetail;
use App\Models\SkillExperience;
use App\Models\TrainingAndWorkshop;
use App\Models\WorkExperience;


class InternshipApplicationProgressBarLivewire extends Component
{

    public $totalSteps = 15; // Total number of steps/forms
    public $completedSteps = 0; // Dynamically fetched from the database
    public $progress = 0; // Progress percentage

    protected $listeners = [
        'stepCompleted' => 'calculateProgress', // Recalculate progress when this event is fired
    ];

    public function render()
    {
        return view('livewire.tpa.internship-application-files.internship-application-progress-bar-livewire');
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

        // Check if skill experience details have been completed
        if (SkillExperience::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if project portfolio details have been completed
        if (ProjectDetail::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if referee details have been completed
        if (RefereeDetail::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if training and workshop details have been completed
        if (TrainingAndWorkshop::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if professional qualification details have been completed
        if (ProfessionalQualification::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if working experience details have been completed
        if (WorkExperience::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if other attachment details have been completed
        if (OtherAttachmentDetail::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if language proficiency details have been completed
        if (LanguageProficiency::where('user_id', auth()->id())->exists()) {
            $completedSteps++;
        }

        // Check if application declaration details have been completed
        if (ApplicationDeclarationDetail::where('user_id', auth()->id())->exists()) {
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
