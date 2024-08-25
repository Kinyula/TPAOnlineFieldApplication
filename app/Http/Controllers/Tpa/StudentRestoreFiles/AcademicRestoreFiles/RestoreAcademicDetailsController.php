<?php

namespace App\Http\Controllers\Tpa\StudentRestoreFiles\AcademicRestoreFiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestoreAcademicDetailsController extends Controller
{
    public function index()
    {
        return view('tpa.student_restore_files.student-restore-academic-details');
    }

    
}
