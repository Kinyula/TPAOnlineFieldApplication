<?php

namespace App\Livewire\Student\StudentFiles\EditStudentDetailFiles;

use Livewire\Component;
use App\Models\LanguageProficiency;

class EditLanguageProficiencyLivewire extends Component
{
    public $languageProficiency;
    public $language;
    public $language_level;


    public function mount()
    {
        $this->languageProficiency = LanguageProficiency::where('user_id', auth()->user()->id)->first();
        $this->language = $this->languageProficiency->language;
        $this->language_level = $this->languageProficiency->language_level;

    }

    public function updateLanguageProficiencyDetail()
    {
        $this->validate([
            'language' => 'required|string|max:255',
            'language_level' => 'required|string',
        ]);

        $this->languageProficiency->update([
            'language' => $this->language,
            'language_level' => $this->language_level,
        ]);

        session()->flash('message', 'Language proficiency details updated successfully.');
    }

    public function render()
    {
        return view('livewire.student.student-files.edit-student-detail-files.edit-language-proficiency-livewire');
    }
}
