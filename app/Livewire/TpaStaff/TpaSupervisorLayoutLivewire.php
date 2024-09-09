<?php

namespace App\Livewire\TpaStaff;

use App\Models\User;
use Livewire\Component;

class TpaSupervisorLayoutLivewire extends Component
{
    public function render()
    {
        return view('livewire.tpa-staff.tpa-supervisor-layout-livewire', [
            'profileImage' => User::where('id', auth()->user()->id)->first(),

        ]);
    }
}
