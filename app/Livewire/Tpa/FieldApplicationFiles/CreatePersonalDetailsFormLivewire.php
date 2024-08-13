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
        public $professionalism_title;
        public $designation;
        public $years_of_experience;
        public $first_name;
        public $last_name;
        public $email;
        public $phone_number;
        public $gender;
        public $data;
    public function mount()
    {
        // Load existing data from the database
        $user = auth()->user(); // or use any method to fetch user details
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->gender = $user->gender;

        $this->data = PersonalDetail::where('user_id', auth()->user()->id)->exists();

    }

    public function render()
    {
        return view('livewire.tpa.field-application-files.create-personal-details-form-livewire');
    }

    public function submitPersonalDetails()
    {
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:personal_details,email',
            'phone_number' => 'required|string|max:15',
            'gender' => 'required|string|max:10',
            'date_of_birth' => 'required|date',
            'disability_status' => 'nullable|string|max:10',
            'nida_number' => 'nullable|string|max:20',
            'marital_status' => 'nullable|string|max:10',
            'professionalism_title' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'years_of_experience' => 'nullable|integer|min:0',
        ]);

        $personalDetails = new PersonalDetail();
        $personalDetails->first_name = $this->first_name;
        $personalDetails->last_name = $this->last_name;
        $personalDetails->email = $this->email;
        $personalDetails->phone_number = $this->phone_number;
        $personalDetails->gender = $this->gender;
        $personalDetails->date_of_birth = $this->date_of_birth;
        $personalDetails->disability_status = $this->disability_status;
        $personalDetails->nida_number = $this->nida_number;
        $personalDetails->marital_status = $this->marital_status;
        $personalDetails->professionalism_title = $this->professionalism_title;
        $personalDetails->designation = $this->designation;
        $personalDetails->years_of_experience = $this->years_of_experience;
        $personalDetails->user_id = auth()->user()->id; // or use any method to fetch user id
        $personalDetails->save();
        session()->flash('personal', 'Personal details saved successfully!');

        $this->reset(['first_name', 'last_name', 'email', 'phone_number', 'gender', 'date_of_birth', 'disability_status', 'nida_number', 'marital_status', 'professionalism_title', 'designation', 'years_of_experience']);


        $this->dispatch('stepCompleted');
    }
}
