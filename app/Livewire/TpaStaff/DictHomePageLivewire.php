<?php

namespace App\Livewire\TpaStaff;

use App\Models\Department;
use App\Models\SubModule;
use Livewire\Component;

class DictHomePageLivewire extends Component
{
    public $modules;
    public $visibleCount = 8; // Number of sub-modules visible by default

    public function mount(){
        $this->modules = SubModule::with(['modules'])->get();


    }

    public function showMore()
    {
        $this->visibleCount += 4; // Load 4 more sub-modules each time
    }

    public function render()
    {
        return view('livewire.tpa-staff.dict-home-page-livewire', [
            'visibleModules' => $this->modules->take($this->visibleCount),
        ]);
    }
}
