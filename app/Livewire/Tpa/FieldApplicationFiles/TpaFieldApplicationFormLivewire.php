<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\Department;
use App\Models\Port;
use App\Models\TpaFieldApplicationData;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class TpaFieldApplicationFormLivewire extends Component
{
    use WithFileUploads;
    public $ports;
    public $departments;
    public $department;
    public $port;
    public $application_letter;


    public function mount()
    {
        $this->ports = Port::get();
        $this->departments = Department::get();
    }

    public function render()
    {
        return view('livewire.tpa.field-application-files.tpa-field-application-form-livewire');
    }

    public function submitPortApplication()
    {
        $this->validate([
            'port' => 'required',
            'application_letter' => 'required|mimes:pdf|mimetypes:application/pdf|max:10240',
            'department' => 'required'

        ]);
        $application = new TpaFieldApplicationData();
        $application->user_id = auth()->user()->id;
        $application->department_id = $this->department;
        $application->port_id = $this->port;
        if (!is_null($this->application_letter)) {

            $application_letter = $this->application_letter->store('public/application_letters');
            $application_letter = explode('/', $application_letter);
            $application_letter = $application_letter[2];
            $application->application_letter = $application_letter;
        }



        $application->save();

        session()->flash('success', 'Application submitted successfully.');

        $this->dispatch('application-submitted');
        $this->reset(['port', 'application_letter', 'department']);
    }
}
