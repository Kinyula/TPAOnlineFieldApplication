<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use App\Models\ContactDetail;
use App\Models\Country;
use Livewire\Component;

class EditContactDetailsLivewire extends Component
{
    public $country;
    public $region;
    public $district;
    public $ward;
    public $countries;

    protected $rules = [
        'country' => 'required|integer|exists:countries,id',
        'region' => 'required|integer|exists:regions,id',
        'district' => 'required|integer|exists:districts,id',
        'ward' => 'required|integer|exists:wards,id',
    ];

    public function mount()
    {
        $this->countries = Country::get();
    }

    public function updatedCountry()
    {
        $this->region = null;
        $this->district = null;
        $this->ward = null;

        $this->region = auth()->user()->contactDetail->region_id ?? null;
        $this->district = auth()->user()->contactDetail->district_id ?? null;
        $this->ward = auth()->user()->contactDetail->ward_id ?? null;
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
