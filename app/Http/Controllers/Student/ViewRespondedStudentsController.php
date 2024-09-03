<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewRespondedStudentsController extends Controller
{
    public function index()
    {
        return view('student.view-responded-students');
    }
}
