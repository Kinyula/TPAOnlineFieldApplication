<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\SkillExperience;
use Livewire\Component;

class CreateSkillExperinceFormLivewire extends Component
{
    public $skill_category;
    public $skill_level;
    public $description;
    public $data;

    public function mount()
    {
        $this->data = SkillExperience::where('user_id', auth()->user()->id)->exists();
    }

    public function render()
    {
        return view('livewire.tpa.field-application-files.create-skill-experince-form-livewire');
    }

    public function submitSkillExperience()
    {
        $this->validate([
            'skill_category' => 'required',
            'skill_level' => 'required',
            'description' => 'required'
        ]);

        $skill = new SkillExperience();
        $skill->user_id = auth()->user()->id;
        $skill->skill_category = $this->skill_category;
        $skill->skill_level = $this->skill_level;
        $skill->description = $this->description;
        $skill->save();

        session()->flash('success', 'Skill experience is saved successfully!');

        // Reset the form fields
        $this->reset(['skill_category', 'skill_level', 'description']);

        // Dispatch the 'stepCompleted' event to trigger the progress bar update
        $this->dispatch('stepCompleted');
    }
}
