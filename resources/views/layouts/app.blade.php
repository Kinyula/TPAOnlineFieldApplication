@if (auth()->user()->role_id == '0')
    @livewire('student.student-layout-livewire')
@endif

@if (auth()->user()->role_id == '1')
    @livewire('tpa-staff.super-admin-layout-livewire')
@endif

@if (auth()->user()->role_id == '2')
    @livewire('tpa-staff.dict-layout-livewire')
@endif

@if (auth()->user()->role_id == '3')
    @livewire('tpa-staff.dict-layout-livewire')
@endif

@if (auth()->user()->role_id == '4')
    @livewire('tpa-staff.hr-layout-livewire')
@endif
