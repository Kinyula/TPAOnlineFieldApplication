<?php

namespace App\Livewire\TpaStaff;

use Livewire\Component;
use App\Models\User;

class HrLayoutLivewire extends Component
{
    public function render()
    {
        return view('livewire.tpa-staff.hr-layout-livewire', [
            'profileImage' => User::where('id', auth()->user()->id)->first(),

        ]);
    }
}
