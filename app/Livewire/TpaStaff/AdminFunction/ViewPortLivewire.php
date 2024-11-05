<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Port;
use Livewire\Component;

class ViewPortLivewire extends Component
{
    protected $paginationTheme = 'tailwind';
    
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-port-livewire', [

            'ports' => Port::paginate(15),

            'totalPorts' => Port::count(),
        ]);
    }
}
