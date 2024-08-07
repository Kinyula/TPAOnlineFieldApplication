<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use Alert;
use App\Models\District;
use App\Models\Ward;
use Livewire\Component;

class CreateWardLivewire extends Component
{

    public $country_districts;
    public $district, $ward;
    public function mount()
    {
        $this->country_districts = District::get();
    }
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-ward-livewire');
    }

    public function createWard(){
        $this->validate([
            'district' =>'required',
           'ward' =>'required|unique:wards,ward',
        ]);

        $ward = new Ward();
        $ward->district_id = $this->district;
        $ward->ward = $this->ward;
        $ward->save();
        Alert::success('Success!','Region saved successfully!');
        $this->reset(['district', 'ward']);
    }
}
