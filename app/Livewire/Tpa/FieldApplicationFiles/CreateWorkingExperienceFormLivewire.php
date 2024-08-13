<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\WorkExperience;
use Livewire\Component;

class CreateWorkingExperienceFormLivewire extends Component
{
    public $institution_name, $institution_address, $job_title, $current_occupation, $start_date, $duties_performed;
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-working-experience-form-livewire');
    }

    public function submitWorkingExperience()
    {
        $this->validate([
            'institution_name' => 'required',
            'institution_address' => 'required',
            'institution_address' => 'required',
            'job_title' => 'required',
            'current_occupation' => 'required',
            'start_date' => 'required',
            'duties_performed' => 'required',

        ]);
        $workingExperience = new WorkExperience();
        $workingExperience->user_id = auth()->user()->id;
        $workingExperience->institution = $this->institution_name;
        $workingExperience->institution_address = $this->institution_address;
        $workingExperience->job_title = $this->job_title;
        $workingExperience->current_occupation = $this->current_occupation;
        $workingExperience->start_date = $this->start_date;
        $workingExperience->duties_performed = $this->duties_performed;

        $workingExperience->save();

        session()->flash('experience', 'Working experience has been saved successfully');
        $this->reset(['institution_name', 'institution_address', 'job_title', 'current_occupation', 'start_date', 'duties_performed']);

        $this->dispatch('stepCompleted');
    }
}
