<?php

namespace App\Livewire\Student;

namespace App\Livewire\Student;

use App\Models\SetFieldDeadline;
use Carbon\Carbon;
use Livewire\Component;

class StudentDashboardLivewire extends Component
{
    public $deadline;
    public $isDisabled;

    public function mount()
    {
        // Fetch the deadline from the model
        $deadlineRecord = SetFieldDeadline::first(); // Adjust as needed to fetch the correct deadline

        if ($deadlineRecord) {
            $this->deadline = Carbon::parse($deadlineRecord->deadline_date);
            $this->isDisabled = now()->greaterThan($this->deadline);
        } else {
            $this->deadline = null;
            $this->isDisabled = false; // Adjust default behavior as needed
        }
    }

    public function render()
    {
        return view('livewire.student.student-dashboard-livewire', [
            'isDisabled' => $this->isDisabled
        ]);
    }
}


