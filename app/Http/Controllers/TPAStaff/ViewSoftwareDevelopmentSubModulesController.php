<?php

namespace App\Http\Controllers\TpaStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewSoftwareDevelopmentSubModulesController extends Controller
{
    public function index()
    {
        return view('admin-function.view-sub-modules');
    }
}
