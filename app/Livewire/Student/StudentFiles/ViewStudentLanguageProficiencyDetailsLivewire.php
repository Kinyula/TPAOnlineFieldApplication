<?php

namespace App\Livewire\Student\StudentFiles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LanguageProficiency;

class ViewStudentLanguageProficiencyDetailsLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $selected = [];
    public $selectAll = false;

    protected $queryString = ['search'];

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selected = LanguageProficiency::where('language', 'like', '%' . $this->search . '%')->pluck('id')->toArray();
        } else {
            $this->selected = [];
        }
    }

    public function delete($id)
    {
        LanguageProficiency::findOrFail($id)->delete();
        session()->flash('delete-single', 'Language proficiency record deleted successfully.');
    }

    public function deleteSelected()
    {
        LanguageProficiency::whereIn('id', $this->selected)->delete();
        session()->flash('delete-selected', 'Selected language proficiency records deleted successfully.');
        $this->reset(['selected', 'selectAll']);
    }

    public function exportExcel()
    {
        // Export functionality logic goes here
        session()->flash('export', 'Language proficiency records exported successfully.');
    }

    public function render()
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // If the user's role_id is 0, restrict them to viewing only their own records
        if ($user->role_id == 0) {
            $languageProficiencies = LanguageProficiency::with('user')
                ->where('user_id', $user->id)
                ->where(function ($query) {
                    $query->whereHas('user', function ($query) {
                        $query->where('first_name', 'like', '%' . $this->search . '%')
                            ->orWhere('last_name', 'like', '%' . $this->search . '%');
                    })
                        ->orWhere('language', 'like', '%' . $this->search . '%')
                        ->orWhere('language_level', 'like', '%' . $this->search . '%');
                })
                ->paginate(10);
        } else {
            // Otherwise, retrieve all records that match the search criteria
            $languageProficiencies = LanguageProficiency::with('user')
                ->whereHas('user', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->orWhere('language', 'like', '%' . $this->search . '%')
                ->orWhere('language_level', 'like', '%' . $this->search . '%')
                ->paginate(10);
        }

        return view('livewire.student.student-files.view-student-language-proficiency-details-livewire', [
            'languageProficiencies' => $languageProficiencies,
        ]);
    }
}
