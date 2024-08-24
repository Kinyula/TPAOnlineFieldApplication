<?php

namespace App\Http\Controllers\Tpa\StudentRestoreFiles\PersonalRestoreFiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestorePersonalDetailsController extends Controller
{
    public function index()
    {
        return view('tpa.student_restore_files.student-restore-personal-details');
    }
}
