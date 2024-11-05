<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Region;
use Livewire\Component;

class ViewRegionLivewire extends Component
{
    protected $paginationTheme = 'tailwind';
    
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-region-livewire', [

            'regions' => Region::paginate(15),

            'totalRegions' => Region::count(),
        ]);
    }
}
