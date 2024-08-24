<?php

namespace App\Exports;

use App\Models\FieldApplicationData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportStudents implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FieldApplicationData::with(['user','modules','subModule'])->get();
    }

    public function headings(): array
    {
        return [
            'First name',
            'Last name',
            'Phone number',
            'Role',
            'Module',
            'Sub module',
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
            $student->modules->module_name,
            $student->subModule->sub_module,
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
            'module_name',
            'sub_module',
            'confirm_status',
            'view_status',
            'approval_status',
            'created_at',
            'updated_at'
        ];
    }
}
