<?php

namespace App\Http\Controllers\Tpa\TpaStaffRestoreFiles\ApplicationRestoreFiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestoreApplicationDetailsController extends Controller
{
    public function index()
    {
        return view('tpa.tpa_staff_restore_files.restore-application-details');
    }

    
}
