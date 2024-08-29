<?php

namespace App\Livewire\Tpa;

use App\Models\ResponseLetter;
use Livewire\Component;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class ResponseLetterLivewire extends Component
{
    use WithPagination;

    public $students;
    public $search = '';
    protected $paginationTheme = 'tailwind';

    public function generatePdf($studentId)
    {
        // Find the student and get the path from the database
        $student = ResponseLetter::with('user')->findOrFail($studentId);
        $filePath = $student->response_letter; // Assuming 'response_letter' is the column storing the file name in the database

        // Full path to the file in the public storage directory
        $storagePath = storage_path("app/public/response_letters/{$filePath}");

        // Check if the file exists
        if (file_exists($storagePath)) {
            return response()->download($storagePath, "student-application-{$student->user->last_name}.pdf");
        } else {
            abort(404, 'File not found.');
        }
    }



    public function render()
    {
        // Check if the authenticated user has the role_id '0'
        if (auth()->user()->role_id == '0') {
            // Fetch only the student's own application data
            $students = ResponseLetter::with(['user'])
                ->where('user_id', auth()->user()->id)
                ->get();

            // Return the view with the students data
            return view('livewire.tpa.response-letter-livewire', [
                'students' => $students,
            ]);
        } else {
            // Fetch all applications with the search functionality applied

            $students = ResponseLetter::query()
                ->whereHas('user', function ($query) {
                    // Apply the search filter based on first name or last name
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->paginate(15);
            // Return the view with the students data
            return view('livewire.tpa.response-letter-livewire', [
                'students' => $students
            ]);
        }
    }
}
