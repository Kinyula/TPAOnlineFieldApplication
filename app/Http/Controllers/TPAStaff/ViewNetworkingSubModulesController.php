<?php

namespace App\Http\Controllers\TpaStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewNetworkingSubModulesController extends Controller
{
    public function index()
    {
        return view('tpa.view-networking-sub-modules');
    }
}
