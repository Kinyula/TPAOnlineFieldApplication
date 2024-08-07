<?php

namespace App\Livewire\Tpa;

use App\Models\AcademicDetail;
use App\Models\ContactDetail;
use App\Models\Country;
use App\Models\District;
use App\Models\PersonalDetail;
use App\Models\Region;
use Livewire\Component;
use App\Models\User;
use App\Models\Ward;
use Livewire\Attributes\On;
use RealRashid\SweetAlert\Facades\Alert;

class FieldApplicationLivewire extends Component
{

    // Personal Details
    public $date_of_birth;
    public $disability_status;
    public $nida_number;
    public $marital_status;
    public $professionalism_title;
    public $designation;
    public $years_of_experience;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $gender;
    public $showContactForm = false;
    public $showAcademicForm = false;
    public $showApplicationForm = false;

    // Contact Details
    public $address;
    public $country;
    public $region = [];
    public $district = [];
    public $ward = [];


    // Academic Details
    public $institute_name;
    public $education_level;
    public $status;
    public $program;
    public $current_year;

    protected $rules = [
        // Personal Details Rules
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:20',
        'gender' => 'required|string',
        'date_of_birth' => 'required|date',
        'disability_status' => 'nullable|string',
        'nida_number' => 'nullable|string|max:255',
        'marital_status' => 'nullable|string',
        'professionalism_title' => 'nullable|string|max:255',
        'designation' => 'nullable|string|max:255',
        'years_of_experience' => 'nullable|integer|min:0',

        // Contact Details Rules
        'address' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'region' => 'nullable|string|max:255',
        'district' => 'nullable|string|max:255',
        'ward' => 'nullable|string|max:255',

        // Academic Details Rules
        'institute_name' => 'required|string|max:255',
        'education_level' => 'required|string',
        'status' => 'required|string',
        'program' => 'required|string|max:255',
        'current_year' => 'required|integer|min:1',
    ];

    public function mount()
    {
        // Load existing data from the database
        $user = auth()->user(); // or use any method to fetch user details
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->gender = $user->gender;
    }
    public function submitPersonalDetails()
    {
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:personal_details,email',
            'phone_number' => 'required|string|max:15',
            'gender' => 'required|string|max:10',
            'date_of_birth' => 'required|date',
            'disability_status' => 'nullable|string|max:10',
            'nida_number' => 'nullable|string|max:20',
            'marital_status' => 'nullable|string|max:10',
            'professionalism_title' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'years_of_experience' => 'nullable|integer|min:0',
        ]);

        $personalDetails = new PersonalDetail();
        $personalDetails->first_name = $this->first_name;
        $personalDetails->last_name = $this->last_name;
        $personalDetails->email = $this->email;
        $personalDetails->phone_number = $this->phone_number;
        $personalDetails->gender = $this->gender;
        $personalDetails->date_of_birth = $this->date_of_birth;
        $personalDetails->disability_status = $this->disability_status;
        $personalDetails->nida_number = $this->nida_number;
        $personalDetails->marital_status = $this->marital_status;
        $personalDetails->professionalism_title = $this->professionalism_title;
        $personalDetails->designation = $this->designation;
        $personalDetails->years_of_experience = $this->years_of_experience;
        $personalDetails->user_id = auth()->user()->id; // or use any method to fetch user id
        $personalDetails->save();

        $this->reset(['first_name', 'last_name', 'email', 'phone_number', 'gender', 'date_of_birth', 'disability_status', 'nida_number', 'marital_status', 'professionalism_title', 'designation', 'years_of_experience']);

        Alert::success('Success', 'Personal details saved successfully');

        $this->dispatch('personalDetailsSaved');
    }

     #[On('personalDetailsSaved')]
     public function personalDetailsSaved()
     {
        $this->showContactForm = true;
     }

    public function submitContactDetails()
    {
        $this->validate([
            'country' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
        ]);

        $contactDetails = new ContactDetail();
        $contactDetails->country_id = $this->country;
        $contactDetails->region_id = $this->region;
        $contactDetails->district_id = $this->district;
        $contactDetails->ward_id = $this->ward;
        $contactDetails->user_id = auth()->user()->id; // or use any method to fetch user id
        $contactDetails->save();

        $this->reset(['country_id', 'region_id', 'district_id', 'ward_id']);

        // $this->dispatch('contactDetailsSaved');
    }

    #[On('contactDetailsSaved')]
    public function contactDetailsSaved()
    {
        $this->showAcademicForm = true;
    }

    public function submitAcademicDetails()
    {
        $this->validate([
            'institute_name',
            'education_level',
            'status',
            'program',
            'current_year',
        ]);

        $academicDetails = new AcademicDetail();
        $academicDetails->institute_name = $this->institute_name;
        $academicDetails->education_level = $this->education_level;
        $academicDetails->status = $this->status;
        $academicDetails->program = $this->program;
        $academicDetails->current_year = $this->current_year;
        $academicDetails->user_id = auth()->user()->id; // or use any method to fetch user id
        $academicDetails->save();

        $this->dispatch('academicDetailsSaved');
    }

    #[On('academicDetailsSaved')]
    public function academicDetailsSaved()
    {
        $this->showApplicationForm = true;
    }


    public function updatedCountry($id)
    {

        $this->region = Region::where('country_id', $id)->get();
        if ($this->region) {
            $this->district = District::where('region_id', $id)->get();
            if ($this->district) {
                $this->ward = Ward::where('district_id', $id)->get();
            } else {
                # code...
            }

        } else {
            # code...
        }
    }

    // public function updatedRegion($data)
    // {
    //     // Retrieve districts for the selected region
    //     $this->district = District::where('region_id', $data)->get();
    //     dd($this->district);

    //     // Example: Retrieve the first district from the collection
    //     $firstDistrict = $this->district->first();

    //     // Optionally set the first district as the default value
    //     if ($firstDistrict) {
    //         $this->district = $firstDistrict->id;
    //     } else {
    //         $this->district = null;
    //     }
    // }
    public function render()
    {
        return view('livewire.tpa.field-application-livewire', [
            'countries' => Country::get(),
            // 'country_regions' => Region::get(),
            // 'country_districts' => District::get(),
            'country_wards' => Ward::get(),
        ]);
    }
}
