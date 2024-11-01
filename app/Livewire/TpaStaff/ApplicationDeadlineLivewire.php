<?php

namespace App\Livewire\TpaStaff;

use App\Models\ApplicationDeadline;
use Livewire\Component;

class ApplicationDeadlineLivewire extends Component
{

    public $deadline;


    public $isUpdating = false;



    public function saveOrUpdateDeadline()
    {
        $this->validate([
            'deadline' => 'required|date',
        ]);

        $deadline = ApplicationDeadline::updateOrCreate(

            [
                'deadline_date' => $this->deadline,
                'user_id' => auth()->id(),
            ]
        );

        $message = $deadline->wasRecentlyCreated
            ? 'Deadline set successfully!'
            : 'Deadline updated successfully!';

        session()->flash('message', $message);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->deadline = null;
        $this->isUpdating = false;
    }
    public function render()
    {
        return view('livewire.tpa-staff.application-deadline-livewire');
    }
}
