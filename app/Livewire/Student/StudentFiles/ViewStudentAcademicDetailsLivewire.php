<?php

namespace App\Livewire\Student\StudentFiles;

use App\Exports\StudentDetails\AcademicDetails\AcademicDetailsExport;
use App\Models\AcademicDetail;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ViewStudentAcademicDetailsLivewire extends Component
{
    use WithPagination;
    public $selected = [];
    public $selectAll = false;
    public $search = '';

    public function getAcademicDetailsProperty()
    {
        if (auth()->user()->role_id == '0') {
            return AcademicDetail::with(['user'])->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })->where('user_id', '=', auth()->user()->id)->paginate(15);
        } else {
            return AcademicDetail::with(['user'])->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })->paginate(15);
        }
    }
    public function render()
    {
        return view('livewire.student.student-files.view-student-academic-details-livewire', [
            'academicDetails' => $this->academicDetails
        ]);
    }
    public function updatedSelectAll()
    {
        if ($this->selectAll) {
            $this->selected = $this->academicDetails->pluck('id')->toArray();
        } else {
            $this->selected = [];
        }
    }
    public function deleteSelected()
    {
        AcademicDetail::whereIn('id', $this->selected)->delete();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('delete-selected', 'Selected academic details deleted successfully.');
    }
    public function exportToExcel()
    {
        return Excel::download(new AcademicDetailsExport($this->selected), 'academic_details_' . date('Y-m-d') . '.xlsx');
    }
    public function delete($id)
    {
        AcademicDetail::where('id', $id)->delete();

        session()->flash('delete-single', 'Academic detail deleted successfully.');
    }
}
