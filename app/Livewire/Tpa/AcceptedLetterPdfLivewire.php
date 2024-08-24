<?php

namespace App\Livewire\Tpa;

use App\Models\FieldApplicationData;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\WithPagination;

class AcceptedLetterPdfLivewire extends Component
{
    use WithPagination;

    public $students;
    public $search = '';
    protected $paginationTheme = 'tailwind';

    public function generatePdf($studentId)
    {
        $student = FieldApplicationData::with('user')->findOrFail($studentId);

        $pdf = Pdf::loadView('pdfs.accepted-letter', [
            'student' => $student,
        ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "student-application-{$student->user->last_name}.pdf");
    }

    public function generateAllPdfs()
    {
        $students = FieldApplicationData::with('user')->get();

        foreach ($students as $student) {
            $this->generatePdf($student->id);
        }
    }

    public function render()
    {
        // Check if the authenticated user has the role_id '0'
        if (auth()->user()->role_id == '0') {
            // Fetch only the student's own application data
            $students = FieldApplicationData::with(['user'])
                ->where('user_id', auth()->user()->id)
                ->get();

            // Return the view with the students data
            return view('livewire.tpa.accepted-letter-pdf-livewire', [
                'students' => $students,
            ]);
        } else {
            // Fetch all applications with the search functionality applied

            $students = FieldApplicationData::query()
                ->whereHas('user', function ($query) {
                    // Apply the search filter based on first name or last name
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->paginate(15);
            // Return the view with the students data
            return view('livewire.tpa.accepted-letter-pdf-livewire', [
                'students' => $students,
            ]);
        }
    }
}
