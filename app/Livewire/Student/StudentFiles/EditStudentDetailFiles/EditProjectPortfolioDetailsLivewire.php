<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use App\Models\ProjectDetail;
use Livewire\Component;

class EditProjectPortfolioDetailsLivewire extends Component
{
    public $project_name, $start_date, $end_date, $project_url, $description;

    public function mount()
    {
        $refereeDetail = ProjectDetail::where('user_id', auth()->user()->id)->first();
        $this->project_name = $refereeDetail->project_name;
        $this->start_date = $refereeDetail->start_date;
        $this->end_date = $refereeDetail->end_date;
        $this->project_url = $refereeDetail->project_url;
        $this->description = $refereeDetail->description;
    }
    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-project-portfolio-details-livewire');
    }

    public function updateProjectPortfolioDetails()
    {
        $this->validate(['project_name' => 'required', 'start_date' => 'required', 'end_date' => 'required', 'project_url' => 'required', 'description' => 'required']);

        $projectPortfolioDetail = ProjectDetail::where('user_id', '=', auth()->user()->id)->first();

        $projectPortfolioDetail->update(['project_name' => $this->project_name, 'start_date' => $this->start_date, 'end_date' => $this->end_date, 'project_url' => $this->project_url, 'description' => $this->description]);

        $this->dispatch('stepCompleted');

        session()->flash('message', 'Project portfolio details updated successfully!');
    }
}
