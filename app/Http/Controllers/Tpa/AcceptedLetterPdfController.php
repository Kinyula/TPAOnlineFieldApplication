<?php

namespace App\Http\Controllers\Tpa;

use App\Http\Controllers\Controller;
use App\Models\FieldApplicationData;
use App\Models\ResponseLetter;
use Illuminate\Http\Request;

class AcceptedLetterPdfController extends Controller
{
    public function index()
    {
        // $students = FieldApplicationData::with(['user'])->get();
        $students = ResponseLetter::with(['user'])->get();
        return view('tpa.accepted-letter-pdf', compact('students'));
    }
}
