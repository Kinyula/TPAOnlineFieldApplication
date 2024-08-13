<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\ProjectDetail;
use Livewire\Component;

class CreateProjectPortfolioFormLivewire extends Component
{
    public $project_name, $start_date, $end_date, $project_url, $description, $data;

    public function mount()
    {
        $this->data = ProjectDetail::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-project-portfolio-form-livewire');
    }

    public function submitProjectPortfolio()
    {
        $this->validate([
            'project_name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'project_url' => 'required|url|max:255|active_url',
            'description' => 'required|max:1000',
        ]);

        // Create and save the project details
        ProjectDetail::create([
            'user_id' => auth()->user()->id,
            'project_name' => $this->project_name,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'project_url' => $this->project_url,
            'description' => $this->description,
        ]);

        // Flash a success message to the session
        session()->flash('project', 'Project portfolio created successfully.');

        // Reset the form fields
        $this->reset(['project_name', 'project_url', 'description', 'start_date', 'end_date']);

        // Emit the 'stepCompleted' event to trigger the progress bar update
        $this->dispatch('stepCompleted');

    }
}
