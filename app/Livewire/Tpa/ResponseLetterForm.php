<?php

namespace App\Livewire\Tpa;

use App\Models\ResponseLetter;
use App\Models\TpaFieldApplicationData;
use Livewire\Component;
use Livewire\WithFileUploads;

class ResponseLetterForm extends Component
{
    use WithFileUploads;
    public $recipient;
    public $response_letter;
    public $search = '';

    public function render()
    {
        $recipients = TpaFieldApplicationData::whereHas('user', function ($query) {
            $query->where(function ($q) {
                $q->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            });
        })
        ->where('approval_status','=','approved')
        ->get();

        return view('livewire.tpa.response-letter-form', [
            'recipients' => $recipients,
        ]);
    }

    public function submitResponseLetter()
    {
        $this->validate([
            'recipient' => 'required',
            'response_letter' => 'required|file|max:1024',
        ]);

        $response = new ResponseLetter();
        $response->user_id = auth()->user()->id;
        if (!is_null($this->response_letter)) {

            $response_letter = $this->response_letter->store('public/response_letters');
            $response_letter = explode('/', $response_letter);
            $response_letter = $response_letter[2];
            $response->response_letter = $response_letter;
        }
        $response->recipient = $this->recipient;

        $response->save();

        session()->flash('success', 'Response letter submitted successfully.');
        $this->reset(['recipient', 'response_letter']);
    }
}
