<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\ApplyField;
use App\Models\Port;
use Livewire\Component;

class ApplyFieldLivewire extends Component
{
    public $port, $application_letter, $ports;

    public function mount()
    {
        $this->ports = Port::get();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.apply-field-livewire');
    }

    public function submitPortApplication()
    {

        $this->validate(['port' => 'required', 'application_letter' => 'required']);

        $application = new ApplyField();
        $application->user_id = auth()->user()->id;
        $application->port_id = $this->port;
        $application->application_letter = $this->application_letter;
        $application->save();
        $this->reset(['port', 'application_letter']);
        session()->flash('message', 'Application submitted successfully');

        $this->dispatch('stepCompleted');
    }
}
