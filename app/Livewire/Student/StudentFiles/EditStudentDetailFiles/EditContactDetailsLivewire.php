<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use App\Models\ContactDetail;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;
use App\Models\Ward;
use Livewire\Component;

class EditContactDetailsLivewire extends Component
{
    public $country;
    public $region;
    public $regions = [];
    public $districts = [];
    public $wards = [];
    public $district;
    public $ward;
    public $countries;

    protected $rules = [
        'country' => 'required|string',
        'region' => 'required|string',
        'district' => 'required|string',
        'ward' => 'required|string',
    ];

    public function mount()
    {
        $this->countries = Country::get();
    }

    public function updatedCountry()
    {
        $this->regions = Region::where('country_id', $this->country)->get();
    }

    public function updatedRegion()
    {
        $this->districts = District::where('region_id', $this->region)->get();
    }
    public function updatedDistrict()
    {

        $this->wards = Ward::where('district_id', $this->district)->get();
    }
    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-contact-details-livewire');
    }

    public function updateContactDetail()
    {
        // Validate input
        $this->validate();

        // Find the contact details for the authenticated user
        $contactDetail = ContactDetail::where('user_id', auth()->id())->firstOrFail();

        // Update the contact details
        $contactDetail->update([
            'country_id' => $this->country,
            'region_id' => $this->region,
            'district_id' => $this->district,
            'ward_id' => $this->ward,
        ]);

        // Flash success message
        session()->flash('message', 'Contact details updated successfully!');
    }
}
