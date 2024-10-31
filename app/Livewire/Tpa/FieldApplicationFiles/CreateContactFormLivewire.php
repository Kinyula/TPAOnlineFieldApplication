<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use Livewire\Component;
use App\Models\Country;
use App\Models\Region;
use App\Models\District;
use App\Models\Ward;
use App\Models\ContactDetail;

class CreateContactFormLivewire extends Component
{
    // Contact Details
    public $country;
    public $region;
    public $district;
    public $ward;
    public $data;

    // Collection Data
    public $regions = [];
    public $districts = [];
    public $wards = [];

    // User Details
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;

    public function mount()
    {
        // Load user data from the authenticated user
        $user = auth()->user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->phone_number = $user->phone_number;
        $this->data = ContactDetail::where('user_id', auth()->user()->id)->exists();
    }

    public function render()
    {
        return view('livewire.tpa.field-application-files.create-contact-form-livewire', [
            'countries' => Country::all(), // Fetch all countries and pass to the view
        ]);
    }

    public function updatedCountry($value)
    {
        // Load regions based on selected country
        $this->regions = Region::where('country_id', $value)->get();

        // Reset districts and wards when country changes
        $this->reset(['districts', 'wards']);
    }

    public function updatedRegion($value)
    {
        // Load districts based on selected region
        $this->districts = District::where('region_id', $value)->get();

        // Reset wards when region changes
        $this->reset('wards');
    }

    public function updatedDistrict($value)
    {
        // Load wards based on selected district
        $this->wards = Ward::where('district_id', $value)->get();
    }

    public function submitContactDetails()
    {
        // Validate the form fields
        $this->validate([
            'country' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
        ]);

        // Create and save contact details
        ContactDetail::create([
            'country_id' => $this->country,
            'region_id' => $this->region,
            'district_id' => $this->district,
            'ward_id' => $this->ward,
            'user_id' => auth()->id(),
        ]);

        // Flash a success message to the session
        session()->flash('contact', 'Contact details saved successfully!');

        // Reset the form fields and collections
        $this->reset(['country', 'region', 'district', 'ward', 'regions', 'districts', 'wards']);

        // Emit the 'stepCompleted' event to trigger the progress bar update
        $this->dispatch('stepCompleted');
    }
}
