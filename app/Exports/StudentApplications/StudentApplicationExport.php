<?php

namespace App\Exports\StudentApplications;

use App\Models\TpaFieldApplicationData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentApplicationExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TpaFieldApplicationData::with(['user'])->get();
    }


    public function headings(): array
    {
        return [
            'First name',
            'Last name',
            'Phone number',
            'Role',
            'Confirmation status',
            'Viewing status',
            'Approval status',
            'Created at',
            'Updated at'
        ];
    }

    public function map($student): array
    {
        return [
            $student->user->first_name,
            $student->user->last_name,
            $student->user->phone_number,
            $student->user->position,
            $student->confirm_status,
            $student->view_status,
            $student->approval_status,
            $student->created_at,
            $student->updated_at

        ];
    }

    public function fields(): array
    {
        return [
            'first_name',
            'last_name',
            'phone_number',
            'position',
            'confirm_status',
            'view_status',
            'approval_status',
            'created_at',
            'updated_at'
        ];
    }
}
