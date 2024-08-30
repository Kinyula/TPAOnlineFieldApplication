<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Department;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class CreateDepartmentLivewire extends Component
{
    public $department;
    public $floor;
    public $office;
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-department-livewire');
    }

    public function createDepartment(){
        $this->validate(['department' => 'required','floor' => 'required','office' => 'required']);
        $department = new Department();
        $department->department = $this->department;
        $department->floor_number = $this->floor;
        $department->office_name = $this->office;
        $department->save();

        session()->flash('department','Department saved successfully');
        $this->reset(['department','floor','office']);
    }
}
