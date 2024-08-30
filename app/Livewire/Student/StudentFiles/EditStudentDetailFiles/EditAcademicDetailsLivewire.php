<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use Livewire\Component;
use App\Models\AcademicDetail;

class EditAcademicDetailsLivewire extends Component
{
    public $academicDetailId;
    public $institute_name;
    public $education_level;
    public $status;
    public $program;
    public $registration_number;
    public $year;

    public function mount()
    {

        $academicDetail = AcademicDetail::where('user_id',auth()->user()->id)->first();

        $this->institute_name = $academicDetail->institute_name;
        $this->education_level = $academicDetail->education_level;
        $this->status = $academicDetail->status;
        $this->program = $academicDetail->program;
        $this->registration_number = $academicDetail->registration_number;
        $this->year = $academicDetail->current_year;
    }

    public function updateAcademicDetail()
    {
        // Dynamic validation rules
        $this->validate([
            'institute_name' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
            'status' => 'required|string|in:first year,second year,third year,fourth year,fifth year',
            'program' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
        ]);

        $academicDetail = AcademicDetail::where('user_id', '=', auth()->user()->id)->first();

        $academicDetail->update([
            'institute_name' => $this->institute_name,
            'education_level' => $this->education_level,
            'status' => $this->status,
            'program' => $this->program,
            'registration_number' => $this->registration_number,
            'current_year' => $this->year,
        ]);

        session()->flash('message', 'Academic details updated successfully!');
    }

    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-academic-details-livewire');
    }
}
