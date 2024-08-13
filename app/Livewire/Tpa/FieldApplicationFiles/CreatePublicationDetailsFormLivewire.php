<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\Publication;
use Livewire\Component;

class CreatePublicationDetailsFormLivewire extends Component
{
    public $publication_title;
    public $publication_date;
    public $publication_standard;
    public $publication_url;
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-publication-details-form-livewire');
    }

    public function submitPublicationDetails(){
        $this->validate(['publication_date' =>'required', 'publication_standard' =>'required', 'publication_url' =>'required']);

        // Perform your database operations here
        $publication = new Publication();
        $publication->publication_title = $this->publication_title;
        $publication->publication_date = $this->publication_date;
        $publication->publication_standard = $this->publication_standard;
        $publication->publication_url = $this->publication_url;
        $publication->save();

        session()->flash('publication', 'Publication details saved successfully!');

        $this->reset(['publication_title', 'publication_date', 'publication_standard', 'publication_url']);

        $this->dispatch('stepCompleted');
    }
}
