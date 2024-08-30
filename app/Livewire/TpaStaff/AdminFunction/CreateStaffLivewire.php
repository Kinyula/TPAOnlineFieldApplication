<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Department;
use App\Models\Port;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class CreateStaffLivewire extends Component
{
    public $first_name, $last_name, $email, $password, $phone_number;
    public $gender, $position, $department, $port, $departments, $role, $profile_image;
    public $ports, $check_number;

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-staff-livewire');
    }

    public function mount()
    {
        $this->password = Str::random(8);
        $this->departments = Department::all();
        $this->ports = Port::all();
    }


    public function createStaff()
    {


        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone_number' => 'required',
            'gender' => 'required',
            'position' => 'required',
            'department' => 'required',
            'role' => 'required',
            'port' => 'required',

        ]);

        $user = new User();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->phone_number = $this->phone_number;
        $user->gender = $this->gender;
        $user->position = $this->position;
        $user->role_id = $this->role;

        if (!is_null($this->profile_image)) {
            $profile_image = $this->profile_image->store('public/profile_images');
            $profile_image = explode('/', $profile_image);
            $profile_image = $profile_image[2];
            $user->profile_image = $profile_image;
        } else {
            $user->profile_image = 'Not yet set';
        }

        $user->save();

        $user->extraUserInfo()->create([
            'user_id' => $user->id,
            'department_id' => $this->department,
            'port_id' => $this->port,
            'check_number'
        ]);

        $this->dispatch('staffCreated');

        $this->reset([
            'first_name',
            'last_name',
            'email',
            'password',
            'phone_number',
            'gender',
            'position',
            'department',
            'role',
            'profile_image',
            'port'
        ]);

        session()->flash('staff', 'TPA staff created successfully!');
    }
}
