<?php

namespace App\Http\Controllers\Tpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewAllConfirmedStudentsController extends Controller
{
    public function index()
    {
        return view('tpa.view-all-confirmed-students');
    }
}
