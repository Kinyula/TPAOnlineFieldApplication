<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use App\Models\RefereeDetail;
use Livewire\Component;

class EditRefereeDetailsLivewire extends Component
{
    public $first_name, $last_name, $email, $phone_number, $occupation, $institute_name, $gender;

    public function mount()
    {
        $refereeDetail = RefereeDetail::where('user_id', auth()->user()->id)->first();
        $this->first_name = $refereeDetail->first_name;
        $this->last_name = $refereeDetail->last_name;
        $this->email = $refereeDetail->email;
        $this->phone_number = $refereeDetail->phone_number;
        $this->occupation = $refereeDetail->occupation;
        $this->institute_name = $refereeDetail->institute;
        $this->gender = $refereeDetail->gender;
    }
    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-referee-details-livewire');
    }

    public function updateRefereeDetails()
    {
        $this->validate(['first_name' => 'required', 'last_name' => 'required', 'email' => 'required', 'phone_number' => 'required', 'occupation' => 'required', 'institute_name' => 'required']);

        $refereeDetail = RefereeDetail::where('user_id', '=', auth()->user()->id)->first();
        $refereeDetail->update(['first_name' => $this->first_name, 'last_name' => $this->last_name, 'email' => $this->email, 'phone_number' => $this->phone_number, 'occupation' => $this->occupation, 'institute_name' => $this->institute_name]);

        $this->dispatch('stepCompleted');

        session()->flash('message', 'Referee details updated successfully!');
    }
}
