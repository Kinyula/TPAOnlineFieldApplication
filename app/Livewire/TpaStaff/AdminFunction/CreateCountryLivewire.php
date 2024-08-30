<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Country;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
use Livewire\WithFileUploads;

class CreateCountryLivewire extends Component
{
    use WithFileUploads;
    public $country;
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.create-country-livewire');
    }

    public function createCountry()
    {
        $this->validate(['country' => 'required']);

        $country = new Country();
        $country->country_name = $this->country;
        $country->save();
        session()->flash('country', 'Country saved successfully!');
        $this->reset(['country']);
    }
}
