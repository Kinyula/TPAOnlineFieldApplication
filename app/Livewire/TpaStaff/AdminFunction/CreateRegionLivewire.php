<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Country;
use App\Models\Region;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class CreateRegionLivewire extends Component
{
    public $countries;
    public $country;
    public $region;

    public function mount()
    {
        $this->countries = Country::get();
    }

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-region-livewire');
    }

    public function createRegion(){
        $this->validate([
            'country' =>'required',
           'region' =>'required|unique:regions,region',
        ]);

        $region = new Region();
        $region->country_id = $this->country;
        $region->region = $this->region;
        $region->save();
        session()->flash('region','Region saved successfully!');
        $this->reset(['region', 'country']);
    }
}
