<?php

namespace App\Http\Controllers\TPAStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddVacantSpacesController extends Controller
{
    public function index()
    {
        return view('tpa-staff.add-vacant-spaces');
    }
}
