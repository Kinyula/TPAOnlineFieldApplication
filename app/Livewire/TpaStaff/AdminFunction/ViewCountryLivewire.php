<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class ViewCountryLivewire extends Component
{
    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-country-livewire', [
            'countries' => Country::paginate(15),

            'totalCountries' => Country::count(),
        ]);
    }
}
