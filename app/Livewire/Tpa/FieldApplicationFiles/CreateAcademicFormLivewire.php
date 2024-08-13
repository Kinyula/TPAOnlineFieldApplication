<?php
namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\AcademicDetail;
use Livewire\Component;

class CreateAcademicFormLivewire extends Component
{
    // Academic Details
    public $institute_name;
    public $education_level;
    public $status;
    public $program;
    public $registration_number;
    public $current_year;
    public $data;

    public function mount(){
        $this->data = AcademicDetail::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-academic-form-livewire');
    }

    public function submitAcademicDetails()
    {
        // Validate the form fields
        $this->validate([
            'institute_name' => 'required',
            'education_level' => 'required',
            'status' => 'required',
            'program' => 'required',
            'registration_number' => 'required|unique:academic_details,registration_number',
            'current_year' => 'required',
        ]);

        // Create and save academic details
        AcademicDetail::create([
            'institute_name' => $this->institute_name,
            'education_level' => $this->education_level,
            'status' => $this->status,
            'program' => $this->program,
            'registration_number' => $this->registration_number,
            'current_year' => $this->current_year,
            'user_id' => auth()->user()->id, // Fetch the user ID
        ]);

        // Flash a success message to the session
        session()->flash('academic', 'Academic details saved successfully!');

        // Reset the form fields
        $this->reset([
            'institute_name',
            'education_level',
            'status',
            'program',
            'registration_number',
            'current_year',
        ]);

        // Emit the 'stepCompleted' event to trigger the progress bar update
        $this->dispatch('stepCompleted');

    }
}

