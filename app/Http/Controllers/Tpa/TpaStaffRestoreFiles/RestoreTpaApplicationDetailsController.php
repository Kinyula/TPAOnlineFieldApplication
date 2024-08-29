<?php

namespace App\Http\Controllers\Tpa\TpaStaffRestoreFiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestoreTpaApplicationDetailsController extends Controller
{
    public function index()
    {
        return view('tpa.tpa_staff_restore_files.restore-tpa-applications');
    }
}
