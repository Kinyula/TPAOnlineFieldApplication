<?php

namespace App\Livewire\TpaStaff;

use App\Models\Department;
use App\Models\User;
use Livewire\Component;

class AdminHomePageLivewire extends Component
{
    public $departments;
    public $directorates;
    public $hr;

    public function mount(){
        $this->departments = Department::count();
        $this->directorates = User::where('role_id', '=', '2')->count();
        $this->hr = User::where('role_id', '=', '4')->count();
    }
    public function render()
    {
        return view('livewire.tpa-staff.admin-home-page-livewire');
    }
}
