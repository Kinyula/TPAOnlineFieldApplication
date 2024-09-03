<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use App\Models\SkillExperience;
use Livewire\Component;

class EditSkillExperienceDetailsLivewire extends Component
{
    public $skill_category;
    public $skill_level;
    public $description;

    public function mount()
    {
        $skillExperienceDetail = SkillExperience::where('user_id', auth()->user()->id)->first();
        if ($skillExperienceDetail) {
            $this->skill_category = $skillExperienceDetail->skill_category;
            $this->skill_level = $skillExperienceDetail->skill_level;
            $this->description = $skillExperienceDetail->description;
        } else {
            $this->skill_category = '';
            $this->skill_level = '';
            $this->description = '';
        }
    }
    protected $rules = [
        'skill_category' => 'required|string|max:255',
        'skill_level' => 'required|string|in:beginner,intermediate,advanced,expert',
        'description' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-skill-experience-details-livewire');
    }

    public function updateSkillExperienceDetail()
    {
        // Validate input
        $this->validate();

        // Find the skill experience details for the authenticated user
        $skillExperience = SkillExperience::where('user_id', auth()->id())->firstOrFail();

        // Update the skill experience details
        $skillExperience->update([
            'skill_category' => $this->skill_category,
            'skill_level' => $this->skill_level,
            'description' => $this->description,
        ]);

        // Flash success message
        session()->flash('message', 'Skill experience details updated successfully!');
    }
}
