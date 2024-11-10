<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\OtherAttachmentDetail;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateOtherAttachmentsLivewire extends Component
{
    use WithFileUploads;
    public $attachment_name;
    public $attachment_file;
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-other-attachments-livewire');
    }

    public function submitOtherAttachments(){
        $this->validate([
            'attachment_name' =>'required',
            'attachment_file' =>'required|mimes:pdf,jpg,jpeg,png',
        ]);
        $attachments = new OtherAttachmentDetail();
        $attachments->user_id = auth()->user()->id;
        $attachments->attachment_name = $this->attachment_name;
        $attachments->attachment_file = $this->attachment_file;
        $attachments->save();

        session()->flash('attachments', 'Other attachments submitted successfully.');
    }
}
