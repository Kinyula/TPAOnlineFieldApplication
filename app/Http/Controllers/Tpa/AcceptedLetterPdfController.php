<?php

namespace App\Http\Controllers\Tpa;

use App\Http\Controllers\Controller;
use App\Models\FieldApplicationData;
use Illuminate\Http\Request;

class AcceptedLetterPdfController extends Controller
{
    public function index()
    {
        $students = FieldApplicationData::with(['user'])->get();
        return view('tpa.accepted-letter-pdf', compact('students'));
    }
}
