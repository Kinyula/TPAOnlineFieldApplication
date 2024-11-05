<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\District;
use Livewire\Component;

class ViewDistrictLivewire extends Component
{
    protected $paginationTheme = 'tailwind';
    
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-district-livewire', [

            'districts' => District::paginate(15),

            'totalDistricts' => District::count(),
        ]);
    }
}
