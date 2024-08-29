<x-app-layout>

    @section('content')

    @livewire('tpa.response-letter-livewire', ['students' => $students])

    @endsection

</x-app-layout>
