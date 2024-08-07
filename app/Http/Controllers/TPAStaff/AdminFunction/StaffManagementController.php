<?php

namespace App\Http\Controllers\TPAStaff\AdminFunction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffManagementController extends Controller
{
    public function index()
    {
        return view('admin-function.staff-management');
    }
}
