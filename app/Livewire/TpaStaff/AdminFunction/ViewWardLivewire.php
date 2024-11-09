<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Ward;
use Livewire\Component;

class ViewWardLivewire extends Component
{
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-ward-livewire', [

            'wards' => Ward::paginate(15),

            'totalWards' => Ward::count(),
        ]);
    }
}
