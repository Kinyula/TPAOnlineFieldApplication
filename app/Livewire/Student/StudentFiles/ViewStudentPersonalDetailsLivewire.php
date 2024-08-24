<?php

namespace App\Livewire\Student\StudentFiles;

use App\Exports\StudentDetails\PersonalDetails\PersonalDetailsExport;
use App\Models\PersonalDetail;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ViewStudentPersonalDetailsLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $selected = [];
    public $selectAll = false;
    protected $paginationTheme = 'tailwind';

    public function mount()
    {
        $this->resetSelected();
    }

    public function updatedSelectAll($value)
    {

        if ($value) {

            $this->selected = $this->personalDetails->pluck('id')->toArray();
        } else {
            $this->resetSelected();
        }
    }

    public function updatedSelected()
    {

        $this->selectAll = count($this->selected) === $this->personalDetails->count();
    }

    public function deleteSelected()
    {
        PersonalDetail::whereIn('id', $this->selected)->delete();
        $this->resetSelected();
        session()->flash('delete-selected', 'Selected data deleted successfully!');
    }

    public function delete($id)
    {
        PersonalDetail::findOrFail($id)->delete();
        $this->resetSelected();
        session()->flash('delete-single', 'Data is deleted successfully!');
    }

    public function resetSelected()
    {
        $this->selected = [];
        $this->selectAll = false;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getPersonalDetailsProperty()
    {
        return PersonalDetail::with(['user'])
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->paginate(15);
    }

    public function exportExcel()
    {
        session()->flash('export', 'Student personal details are exported successfully!');
        return Excel::download(new PersonalDetailsExport, 'student-personal-details.xlsx');
    }
    public function render()
    {
        return view('livewire.student.student-files.view-student-personal-details-livewire', [
            'personalDetails' => $this->personalDetails,
        ]);
    }
}
