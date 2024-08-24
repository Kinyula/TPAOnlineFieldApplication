<?php

namespace App\Exports\StudentDetails\PersonalDetails;

use App\Models\PersonalDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PersonalDetailsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PersonalDetail::with(['user'])->get();
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Phone Number',
            'Gender',
            'Date of Birth',
            'Disability status',
            'NIDA Number',
            'Marital Status',
            'Professionalism Title',
            'Designation',
            'Years of Experience',
            'Created at',
            'Updated at'
        ];
    }

    public function map($personalDetail): array
    {
        return [
            $personalDetail->user->first_name,
            $personalDetail->user->last_name,
            $personalDetail->user->email,
            $personalDetail->phone_number,
            $personalDetail->gender,
            $personalDetail->date_of_birth,
            $personalDetail->disability_status,
            $personalDetail->nida_number,
            $personalDetail->marital_status,
            $personalDetail->professionalism_title,
            $personalDetail->designation,
            $personalDetail->years_of_experience,
            $personalDetail->created_at,
            $personalDetail->updated_at,
        ];
    }

    public function fields(): array
    {
        return [
            'first_name',
            'last_name',
            'email',
            'phone_number',
            'gender',
            'date_of_birth',
            'disability_status',
            'nida_number',
            'marital_status',
            'professionalism_title',
            'designation',
            'years_of_experience',
            'created_at',
            'updated_at'
        ];
    }
}
