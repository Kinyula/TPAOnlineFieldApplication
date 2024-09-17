<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use App\Models\PersonalDetail;
use Livewire\Component;

class EditPersonalDetailsLivewire extends Component
{
    public $date_of_birth;
    public $disability_status;
    public $marital_status;

    public function mount()
    {

        $personalDetail = PersonalDetail::where('user_id',auth()->user()->id)->first();

        $this->date_of_birth = $personalDetail->date_of_birth;
        $this->disability_status = $personalDetail->disability_status;
        $this->marital_status = $personalDetail->marital_status;

    }

    protected $rules = [
        'date_of_birth' => 'required|date|before:today',
        'disability_status' => 'required|string|in:none,disabled|max:255',
        'marital_status' => 'required|string|in:single,married,divorced,widowed|max:255',
    ];

    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-personal-details-livewire');
    }

    public function updatePersonalDetail()
    {
        // Validate input
        $this->validate();

        // Find the personal details for the authenticated user
        $personalDetail = PersonalDetail::where('user_id', '=', auth()->user()->id)->first();

        // Update the personal details
        $personalDetail->update([
            'date_of_birth' => $this->date_of_birth,
            'disability_status' => $this->disability_status,
            'marital_status' => $this->marital_status,
        ]);

        $this->dispatch('stepCompleted');
        // Flash success message
        session()->flash('message', 'Personal details updated successfully!');
    }
}
