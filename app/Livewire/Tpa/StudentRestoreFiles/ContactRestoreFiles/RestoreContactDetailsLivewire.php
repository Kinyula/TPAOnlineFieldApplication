<?php

namespace App\Livewire\Tpa\StudentRestoreFiles\ContactRestoreFiles;

use App\Models\ContactDetail;
use Livewire\Component;
use Livewire\WithPagination;

class RestoreContactDetailsLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $selectAll = false;
    public $selected = [];
    public function render()
    {
        return view('livewire.tpa.student-restore-files.contact-restore-files.restore-contact-details-livewire', [
            'contactDetails' => $this->contactDetails
        ]);
    }

    public function getContactDetailsProperty()
    {

        return ContactDetail::with(['user'])->onlyTrashed()
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->paginate(15);
    }

    public function updatedSelectAll()
    {
        $this->selected = $this->contactDetails->pluck('id')->toArray();

    }

    public function restoreSelected(){
        ContactDetail::whereIn('id', $this->selected)->restore();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('restore-selected', 'Contact details restored successfully.');
    }

    public function deleteSelected(){

        ContactDetail::whereIn('id', $this->selected)->forceDelete();
        $this->selectAll = false;
        $this->selected = [];
        session()->flash('delete-selected', 'Contact details deleted permanently.');
    }

    public function restore($id){
        ContactDetail::withTrashed()->where('id', $id)->first()->restore();
        session()->flash('restore-single', 'Contact detail restored successfully.');
    }
    public function delete($id){
        ContactDetail::withTrashed()->where('id', $id)->first()->forceDelete();
        session()->flash('delete-single', 'Contact detail deleted permanently.');
    }
}
