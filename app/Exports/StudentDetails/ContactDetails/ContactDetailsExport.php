<?php

namespace App\Exports\StudentDetails\ContactDetails;

use App\Models\ContactDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactDetailsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ContactDetail::with(['user', 'country', 'region', 'district', 'ward'])->get();
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Phone Number',
            'Email Address',
            'Country',
            'Region',
            'District',
            'Ward',
            'Created At',
            'Updated At',
        ];
    }

    public function map($contactDetail): array
    {
        return [
            $contactDetail->user->first_name,
            $contactDetail->user->last_name,
            $contactDetail->user->phone_number,
            $contactDetail->user->email,
            $contactDetail->country->country_name ?? '',
            $contactDetail->region->region ?? '',
            $contactDetail->district->district ?? '',
            $contactDetail->ward->ward ?? '',
            $contactDetail->created_at,
            $contactDetail->updated_at,
        ];
    }

    public function fields(): array
    {
        return [
            'first_name',
            'last_name',
            'phone_number',
            'email',
            'country_name',
            'region',
            'district',
            'ward',
            'created_at',
            'updated_at',

        ];
    }
}
