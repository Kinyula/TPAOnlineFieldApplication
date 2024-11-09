<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Department;
use Livewire\Component;

class ViewDepartmentLivewire extends Component
{
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-department-livewire', [

            'departments' => Department::paginate(15),

            'totalDepartments' => Department::count(),
        ]);
    }
}
