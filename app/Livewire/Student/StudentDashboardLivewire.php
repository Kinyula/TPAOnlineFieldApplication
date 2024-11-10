<?php

namespace App\Livewire\Student;

namespace App\Livewire\Student;

use App\Models\Deadline;
use App\Models\SetFieldDeadline;
use Carbon\Carbon;
use Livewire\Component;

class StudentDashboardLivewire extends Component
{
    public $deadline;
    public $internshipDeadline;
    public $isDisabled;
    public $isInternshipDisabled;

    public function mount()
    {
      
        $deadlineRecord = SetFieldDeadline::first();
        $internshipDeadlineRecord = Deadline::first();

        if ($deadlineRecord) {
            $this->deadline = Carbon::parse($deadlineRecord->deadline_date);
            $this->isDisabled = now()->greaterThan($this->deadline);
        } else {
            $this->deadline = null;
            $this->isDisabled = false;
        }

        if ($internshipDeadlineRecord) {
            $this->internshipDeadline = Carbon::parse($internshipDeadlineRecord->deadline_date);
            $this->isInternshipDisabled = now()->greaterThan($this->internshipDeadline);
        } else {
            $this->internshipDeadline = null;
            $this->isInternshipDisabled = false;
        }
    }

    public function render()
    {
        return view('livewire.student.student-dashboard-livewire', [
            'isDisabled' => $this->isDisabled,
            'isInternshipDisabled' => $this->isInternshipDisabled
        ]);
    }
}


