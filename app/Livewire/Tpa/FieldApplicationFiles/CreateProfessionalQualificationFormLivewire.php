<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\ProfessionalQualification;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProfessionalQualificationFormLivewire extends Component
{
    use WithFileUploads;
    public $data;
    public $country;
    public $course;
    public $mode_of_learning;
    public $institution;
    public $issuer;
    public $certificate;
    public $start_date;
    public $end_date;

    public function mount()
    {
        $this->data = ProfessionalQualification::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-professional-qualification-form-livewire');
    }

    public function submitProfessionalQualifications(){
        $this->validate([
            'country' => ['required'],
            'course' => ['required'],
           'mode_of_learning' => ['required'],
            'institution' => ['required'],
            'issuer' => ['required'],
            'certificate' => ['required', 'file','mimes:pdf,jpg,jpeg,png'],
           'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after:start_date'],
        ]);


        $professionalQualifications = new ProfessionalQualification();
        $professionalQualifications->user_id = auth()->user()->id;
        $professionalQualifications->country_id = $this->country;
        $professionalQualifications->course = $this->course;
        $professionalQualifications->mode_of_learning = $this->mode_of_learning;
        $professionalQualifications->institution = $this->institution;
        $professionalQualifications->issuer = $this->issuer;
        if (!is_null($this->certificate)) {

            $certificate = $this->certificate->store('public/certificates');
            $certificate = explode('/', $certificate);
            $certificate = $certificate[2];
            $professionalQualifications->certificate = $certificate;
        }
        $professionalQualifications->start_date = $this->start_date;
        $professionalQualifications->end_date = $this->end_date;
        $professionalQualifications->save();

        session()->flash('message', 'Professional Qualification added successfully!');

        $this->reset(['country', 'course','mode_of_learning', 'institution', 'issuer', 'certificate','start_date', 'end_date']);

        $this->dispatch('stepCompleted');
    }
}
