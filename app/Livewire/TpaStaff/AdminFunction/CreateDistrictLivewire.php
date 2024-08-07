<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\District;
use App\Models\Region;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class CreateDistrictLivewire extends Component
{
    public $regions;
    public $region;
    public $district;
    public function mount(){
        $this->regions = Region::get();
    }
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-district-livewire');
    }

    public function createDistrict(){
        $this->validate(['region' => 'required','district' => 'required']);
        $district = new District();
        $district->region_id = $this->region;
        $district->district = $this->district;
        $district->save();
        Alert::success('success!','District saved successfully');
        $this->reset(['region','district']);
    }
}
