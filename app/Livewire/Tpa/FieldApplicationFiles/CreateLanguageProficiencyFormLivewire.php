<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\LanguageProficiency;
use Livewire\Component;

class CreateLanguageProficiencyFormLivewire extends Component
{
    public $language_name, $language_level, $data;

    public function mount()
    {
        $this->data = LanguageProficiency::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-language-proficiency-form-livewire');
    }

    public function submitLanguageProficiency()
    {
        $this->validate([
            'language_name' => 'required',
            'language_level' => 'required'
        ]);

        $language = new LanguageProficiency();
        $language->user_id = auth()->user()->id;
        $language->language = $this->language_name;
        $language->language_level = $this->language_level;
        $language->save();
        session()->flash('language', 'Language proficiency details are saved successfully');
        $this->dispatch('stepCompleted');

    }
}
