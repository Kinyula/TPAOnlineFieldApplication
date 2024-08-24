<x-app-layout>

    @section('content')

    @livewire('tpa.accepted-letter-pdf-livewire', ['students' => $students])

    @endsection

</x-app-layout>
