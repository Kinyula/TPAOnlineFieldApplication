<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class CreateStaffLivewire extends Component
{
    public $first_name, $last_name, $email, $password, $phone_number;
    public $gender, $position, $department,$port;
    public $departments, $role,$profile_image;
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-staff-livewire');
    }


    public function mount()
    {
        // Generate a random number as the default password
        $this->password = Str::random(8); // Or use any other method to generate a random number
        $this->departments = Department::get();
    }

    public function updatedLastName($value)
    {
        // Update password to the last name in uppercase whenever the last name is changed
        $this->password = strtoupper($value);
    }

    public function createStaff()
    {
        $this->validate(['first_name' => 'required', 'last_name' => 'required', 'email' => 'required', 'password' => 'required', 'phone_number' => 'required', 'gender' => 'required', 'position' => 'required', 'department' => 'required','role' => 'required']);

        $user = new User();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password); // Encrypt the password
        $user->phone_number = $this->phone_number;
        $user->gender = $this->gender;
        $user->position = $this->position;
        $user->department_id = $this->department;
        $user->role_id = $this->role;
        if (!is_null($this->profile_image)) {

            $profile_image = $this->profile_image->store('public/profile_images');

            $profile_image = explode('/', $profile_image);

            $profile_image = $profile_image[2];

            $user->profile_image = $profile_image;
        } else {
            $user->profile_image = 'user3.png';
        }
        $user->save();

        $this->dispatch('staffCreated');
        // Reset form fields
        $this->reset(['first_name', 'last_name', 'email', 'password', 'phone_number', 'gender', 'position', 'department','role','profile_image']);
    }

    #[On('staffCreated')]
    public function staffCreated(){

        Alert::success('Success!','Staff is created successfully');
    }
}
