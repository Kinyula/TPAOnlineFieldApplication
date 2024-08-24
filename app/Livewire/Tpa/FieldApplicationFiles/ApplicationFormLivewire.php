<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\Department;
use App\Models\FieldApplicationData;
use App\Models\Module;
use App\Models\Port;
use App\Models\SubModule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicationFormLivewire extends Component
{
    use WithFileUploads;
    public $softwareDevelopmentSubModules, $port, $application_letter, $ports, $modules = [], $module, $sub_module, $subModules = [];
    public $web_development;
    public $mobile_application;
    public $desktop_application;
    public $game_development;
    public $department;
    public $departments;


    public function mount()
    {
        $this->softwareDevelopmentSubModules = SubModule::with(['fieldApplications'])->where('module_id', '1')->get();
        $this->ports = Port::get();
        $this->departments = Department::get();
    }


    public function updatedDepartment()
    {
        $this->modules = Module::where('department_id', $this->department)->get();
    }
    public function updatedModule()
    {

        $this->subModules = SubModule::where('module_id', $this->module)->get();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.application-form-livewire');
    }

    public function submitPortApplication()
    {
        $this->validate([
            'port' => 'required',
            'application_letter' => 'required|mimes:pdf|mimetypes:application/pdf|max:10240',
            'module' => 'required',
            'sub_module' => 'required',
            'department' => 'required'

        ]);
        $application = new FieldApplicationData();
        $application->user_id = auth()->user()->id;
        $application->department_id = $this->department;
        $application->module_id = $this->module;
        $application->sub_module_id = $this->sub_module;
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
        $this->reset(['port', 'application_letter','module','sub_module', 'department']);
    }
}
