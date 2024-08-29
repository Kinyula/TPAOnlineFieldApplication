<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\PersonalDetail;
use Livewire\Component;

class CreatePersonalDetailsFormLivewire extends Component
{

        // Personal Details
        public $date_of_birth;
        public $disability_status;
        public $nida_number;
        public $marital_status;
        public $first_name;
        public $last_name;
        public $email;
        public $phone_number;
        public $gender;
        public $data;
    public function mount()
    {
        // Load existing data from the database

        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->phone_number = auth()->user()->phone_number;
        $this->gender = auth()->user()->gender;

        $this->data = PersonalDetail::where('user_id', auth()->user()->id)->exists();

    }

    public function render()
    {
        return view('livewire.tpa.field-application-files.create-personal-details-form-livewire');
    }

    public function submitPersonalDetails()
    {
        $validatedData = $this->validate([
            'date_of_birth' => 'required|date',
            'disability_status' => 'nullable|string|max:10',
            'nida_number' => 'nullable|string|max:20',
            'marital_status' => 'nullable|string|max:10',
        ]);

        $personalDetails = new PersonalDetail();
        $personalDetails->date_of_birth = $this->date_of_birth;
        $personalDetails->disability_status = $this->disability_status;
        $personalDetails->nida_number = $this->nida_number;
        $personalDetails->marital_status = $this->marital_status;
        $personalDetails->user_id = auth()->user()->id; // or use any method to fetch user id
        $personalDetails->save();
        session()->flash('personal', 'Personal details saved successfully!');

        $this->reset(['first_name', 'last_name', 'email', 'phone_number', 'gender', 'date_of_birth', 'disability_status', 'nida_number', 'marital_status']);


        $this->dispatch('stepCompleted');
    }
}
