<?php

namespace App\Http\Controllers\TPAStaff\AdminFunction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TpaManagementController extends Controller
{
    public function index()
    {
        return view('admin-function.tpa-management');
    }
}
