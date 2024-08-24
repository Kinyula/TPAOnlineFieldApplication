<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\TrainingAndWorkshop;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTrainingAndWorkshopFormLivewire extends Component
{
    use WithFileUploads;
    public $training_name;
    public $training_institution;
    public $training_certificate;
    public $start_date;
    public $end_date;
    public $training_description;


    public function render()
    {
        return view('livewire.tpa.field-application-files.create-training-and-workshop-form-livewire');
    }

    public function submitTrainingAndWorkshop()
    {
        $this->validate([
            'training_name' => 'required|string',
            'training_institution' => 'required|string',
            'training_certificate' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'training_description' => 'required|string',
        ]);
        $trainingAndWorkshop = new TrainingAndWorkshop();
        $trainingAndWorkshop->user_id = auth()->id();
        $trainingAndWorkshop->training_name = $this->training_name;
        $trainingAndWorkshop->training_institution = $this->training_institution;
        $trainingAndWorkshop->training_certificate = $this->training_certificate;
        $trainingAndWorkshop->start_date = $this->start_date;
        $trainingAndWorkshop->end_date = $this->end_date;
        $trainingAndWorkshop->training_description = $this->training_description;
        $trainingAndWorkshop->save();

        $this->reset(['training_name', 'training_institution', 'training_certificate', 'start_date', 'end_date', 'training_description']);
        session()->flash('message', 'Training and Workshop details added successfully!');

        $this->dispatch('stepCompleted');
    }
}
