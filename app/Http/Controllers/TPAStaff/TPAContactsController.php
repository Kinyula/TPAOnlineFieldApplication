<?php

namespace App\Http\Controllers\TPAStaff;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TPAContactsController extends Controller
{
    public function index()
    {
        return view('tpa-staff.TPA-Contacts');
    }

    public function store(Request $request) {

        // Validate the request data
        $data = $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone_number' =>'required|regex:/^\d{10}$/',
            'question' =>'required'
        ]);

        // Save the contact data to the database
        $question = new Question();
        $question->name = $request->input('name');
        $question->email = $request->input('email');
        $question->phone_number = $request->input('phone_number');
        $question->question = $request->input('question');

        Alert::success('success', 'Your question has been submitted successfully');
        return redirect()->back()->with('success', 'Your contact request has been submitted successfully.');
    }
}
