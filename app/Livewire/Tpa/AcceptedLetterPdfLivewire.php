<?php

namespace App\Livewire\Tpa;

use App\Models\FieldApplicationData;
use App\Models\TpaFieldApplicationData;
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
        $student = TpaFieldApplicationData::with('user')->findOrFail($studentId);

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
            $students = TpaFieldApplicationData::with(['user'])
                ->where('user_id', auth()->user()->id)
                ->get();
        } else {
            // Fetch all applications with the search functionality applied
            $students = TpaFieldApplicationData::query()
                ->whereHas('user', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                })
                ->paginate(15);
        }

        // Ensure the `students` variable is passed to the view
        return view('livewire.tpa.accepted-letter-pdf-livewire', [
            'students' => $students,
        ]);
    }

}
