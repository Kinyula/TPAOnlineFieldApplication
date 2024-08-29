<?php

namespace App\Livewire\TpaStaff;

use App\Models\Department;
use App\Models\SetFieldDeadline;
use App\Models\SetFieldVacantSpace;
use Livewire\Component;

class AddFieldVacantSpacesLivewire extends Component
{
    public $departments;
    public $department;
    public $vacant_space;
    public function mount(){
        $this->departments = Department::where('id','=','1')->get();
    }
    public function render()
    {
        return view('livewire.tpa-staff.add-field-vacant-spaces-livewire');
    }

    public function createVacantSpaces()
    {
        $this->validate(['department' => 'required', 'vacant_space' => 'required']);
        $vacant_spaces = new SetFieldVacantSpace();
        $vacant_spaces->user_id = auth()->user()->id;
        $vacant_spaces->department_id = $this->department;
        $vacant_spaces->vacant_space = $this->vacant_space;
        $vacant_spaces->save();

        session()->flash('field_spaces', 'Vacant spaces created successfully');
        $this->reset(['vacant_space','department']);
    }
}
