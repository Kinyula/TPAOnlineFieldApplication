<?php

namespace App\Livewire\TpaStaff;

use Livewire\Component;
use App\Models\User;

class DictLayoutLivewire extends Component
{
    public function render()
    {
        return view('livewire.tpa-staff.dict-layout-livewire', [
            'profileImage' => User::where('id', auth()->user()->id)->first(),

        ]);
    }
}
