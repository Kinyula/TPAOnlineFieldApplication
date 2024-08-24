<?php

namespace App\Http\Controllers\TPAStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetDeadlineController extends Controller
{
    public function index()
    {
        return view('tpa-staff.set-deadline');
    }
}
