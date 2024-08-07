@if (auth()->user()->role_id == '0')
    @livewire('student.student-layout-livewire')
@endif

@if (auth()->user()->role_id == '1')
    @livewire('tpa-staff.super-admin-layout-livewire')
@endif
