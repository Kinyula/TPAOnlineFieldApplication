<?php

namespace App\Livewire\Student\StudentFiles;

use App\Exports\StudentDetails\ContactDetails\ContactDetailsExport;
use App\Models\ContactDetail;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ViewStudentContactDetailsLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $selectAll = false;
    public $selected = [];

    #[On('delete')]
    public function render()
    {
        return view('livewire.student.student-files.view-student-contact-details-livewire', [
            'contactDetails' => $this->contactDetails
        ]);
    }

    public function updatedSelectAll()
    {

        $this->selected = $this->contactDetails->pluck('id')->toArray();
    }

    public function getContactDetailsProperty()
    {

        if (auth()->user()->role_id == '0') {
            return ContactDetail::with(['user'])
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->where('user_id', '=', auth()->user()->id)
            ->paginate(15);
        } else {
            return ContactDetail::with(['user'])
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->paginate(15);
        }


    }

    public function deleteSelected()
    {
        $deleted = ContactDetail::whereIn('id', $this->selected);
        $deleted->delete();
        session()->flash('delete-selected', 'Selected contact details deleted.');
        $this->dispatch('delete');
    }

    public function delete($id)
    {
        ContactDetail::withTrashed()->where('id', $id)->first()->delete();
        session()->flash('delete-single', 'Contact detail deleted.');
        $this->dispatch('delete');
    }

    public function restore($id)
    {
        ContactDetail::withTrashed()->where('id', $id)->first()->restore();
        session()->flash('restore-single', 'Contact detail restored.');
        $this->dispatch('delete');
    }

    public function exportExcel()
    {
        session()->flash('export','Student contact details are exported successfully!');
        return Excel::download(new ContactDetailsExport,'student-contact-details.xlsx');
    }
}
