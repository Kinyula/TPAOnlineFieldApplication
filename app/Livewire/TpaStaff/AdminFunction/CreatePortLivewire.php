<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Port;
use Livewire\Component;

class CreatePortLivewire extends Component
{
    public $port;
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-port-livewire');
    }

    public function createPort(){
        $this->validate([
            'port' =>'required|string|max:255'
        ]);
        $port = new Port();
        $port->port_name = $this->port;
        $port->save();
        $this->reset('port');


    }
}
