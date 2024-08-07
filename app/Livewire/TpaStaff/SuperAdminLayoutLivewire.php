<?php

namespace App\Livewire\TpaStaff;

use Livewire\Component;
use App\Models\User;

class SuperAdminLayoutLivewire extends Component
{
    public function render()
    {
        return view('livewire.tpa-staff.super-admin-layout-livewire', [
            'profileImage' => User::where('id', auth()->user()->id)->first(),

        ]);
    }
}
