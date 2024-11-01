<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\ViewRespondedStudentsController;
use App\Http\Controllers\Tpa\AcceptedLetterPdfController;
use App\Http\Controllers\Tpa\FieldApplicationController;
use App\Http\Controllers\Tpa\HomeForTpaOnlineFieldApplicationController;
use App\Http\Controllers\Tpa\InternshipApplicationController;
use App\Http\Controllers\Tpa\StudentRestoreFiles\AcademicRestoreFiles\RestoreAcademicDetailsController;
use App\Http\Controllers\Tpa\StudentRestoreFiles\ContactRestoreFiles\RestoreContactDetailsController;
use App\Http\Controllers\Tpa\StudentRestoreFiles\PersonalRestoreFiles\RestorePersonalDetailsController;
use App\Http\Controllers\Tpa\TpaStaffRestoreFiles\ApplicationRestoreFiles\RestoreApplicationDetailsController;
use App\Http\Controllers\Tpa\TpaStaffRestoreFiles\RestoreTpaApplicationDetailsController;
use App\Http\Controllers\Tpa\ViewAllConfirmedStudentsController;
use App\Http\Controllers\Tpa\ViewApplicationsController;
use App\Http\Controllers\TPAStaff\AddVacantSpacesController;
use App\Http\Controllers\TPAStaff\AdminFunction\StaffManagementController;
use App\Http\Controllers\TPAStaff\AdminFunction\TpaManagementController;
use App\Http\Controllers\TPAStaff\CommentsController;
use App\Http\Controllers\TPAStaff\GroupTaskManagementController;
use App\Http\Controllers\TPAStaff\SetDeadlineController;
use App\Http\Controllers\TPAStaff\TpaApplyFieldController;
use App\Http\Controllers\TPAStaff\TPAContactsController;
use App\Http\Controllers\TpaStaff\ViewNetworkingSubModulesController;
use App\Http\Controllers\TpaStaff\ViewSoftwareDevelopmentSubModulesController;
use App\Http\Controllers\TPAStaff\ViewStudentsDetailsController;
use App\Models\ApplicationDeadline;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Retrieve the deadline date for a specific department (for example, department_id = 1 or 2)
    $deadline = ApplicationDeadline::value('deadline_date');

    return view('welcome', ['deadline' => $deadline]);
});

Route::get('TPA/Online-application', [HomeForTpaOnlineFieldApplicationController::class, 'index']);
// ------------------------------------------------------ Contact routes ------------------------------------------------------------------

Route::get('TPA/contact', [TPAContactsController::class, 'index']);
Route::post('TPA/contact', [TPAContactsController::class, 'store'])->name('store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('TPA/field-application', [FieldApplicationController::class, 'index']);
    Route::get('TPA/view-single-field-application', [TpaApplyFieldController::class, 'index']);
    Route::get('TPA/view-field-application', [ViewApplicationsController::class, 'index']);

    // -------------------------------------- Admin management routes -------------------------------------------
    Route::get('TPA/staff-management', [StaffManagementController::class, 'index']);
    Route::get('TPA/tpa-management', [TpaManagementController::class, 'index']);
    Route::get('TPA/view-software-development-sub-modules', [ViewSoftwareDevelopmentSubModulesController::class, 'index']);

    // -------------------------------------- End of Admin management routes ----------------------------------------------------------

    // ---------------------------------------- TPA Staff Routes ------------------------------------------------------------------------------------------
    Route::get('TPA/set-deadline', [SetDeadlineController::class, 'index']);
    Route::get('TPA/view-networking-sub-modules', [ViewNetworkingSubModulesController::class, 'index']);
    Route::get('TPA/send-accepted-letter', [AcceptedLetterPdfController::class, 'index']);
    Route::get('TPA/create-vacant-space', [AddVacantSpacesController::class, 'index']);
    Route::get('TPA/student-restore-application-infos', [RestoreApplicationDetailsController::class, 'index']);
    Route::get('TPA/student-restore-tpa-application-infos', [RestoreTpaApplicationDetailsController::class, 'index']);
    Route::get('TPA/task-management', [GroupTaskManagementController::class, 'index']);
    Route::get('TPA/comment-management',[CommentsController::class, 'index']);

    // ------------------------------------------------ TPA Routes ------------------------------------------------------------------------------------

    Route::get('TPA/view-all-confirmed-students', [ViewAllConfirmedStudentsController::class, 'index']);
    Route::get('TPA/view-student-details', [ViewStudentsDetailsController::class, 'index']);
    Route::get('TPA/internship-application',[InternshipApplicationController::class, 'index']);


    // ------------------------------------------------------------ End of TPA Routes ------------------------------------------------------------------------------------

    // ------------------------------------------------------------------ Student Routes -------------------------------------------------------------------------------
    Route::get('TPA/student-restore-contact-infos', [RestoreContactDetailsController::class, 'index']);
    Route::get('TPA/student-restore-personal-infos', [RestorePersonalDetailsController::class, 'index']);
    Route::get('TPA/student-restore-academic-infos', [RestoreAcademicDetailsController::class, 'index']);
    Route::get('TPA/view-responded-students', [ViewRespondedStudentsController::class, 'index']);
});

require __DIR__ . '/auth.php';
