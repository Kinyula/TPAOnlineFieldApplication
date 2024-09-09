<x-app-layout>

    @section('content')
        @if (auth()->user()->role_id == '0')
            @livewire('student.student-dashboard-livewire')
        @endif

        @if (auth()->user()->role_id == '1')
            @livewire('tpa-staff.admin-home-page-livewire')
        @endif

        @if (auth()->user()->role_id == '2')
            @livewire('tpa-staff.dict-home-page-livewire')
        @endif

        @if (auth()->user()->role_id == '4')
            @livewire('tpa.view-all-tpa-student-applications-livewire')
        @endif

        @if (auth()->user()->role_id == '5')
            @livewire('tpa.view-students-grouped-by-departments-livewire')
        @endif
    @endsection

</x-app-layout>
