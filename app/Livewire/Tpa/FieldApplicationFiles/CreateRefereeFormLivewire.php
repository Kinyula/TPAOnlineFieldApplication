<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\RefereeDetail;
use Livewire\Component;

class CreateRefereeFormLivewire extends Component
{
    public $first_name, $last_name, $email, $phone_number, $occupation, $institute_name, $gender, $data;

    public function mount()
    {
        $this->data = RefereeDetail::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-referee-form-livewire');
    }

    public function submitRefereeDetails()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'occupation' => 'required',
            'institute_name' => 'required',
            'gender' => 'required',
        ]);

        RefereeDetail::create([
            'user_id' => auth()->user()->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'occupation' => $this->occupation,
            'institute' => $this->institute_name,
            'gender' => $this->gender,
        ]);

        $this->reset(['first_name', 'last_name', 'email', 'phone_number', 'occupation', 'institute_name']);
        session()->flash('referee', 'Referee details saved successfully!');
        $this->dispatch('stepCompleted');
    }
}
