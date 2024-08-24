<div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Networking sub modules -->
        @foreach ($networkingSubModules as $networkingSubModule)
            <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
                <div class="flex flex-col items-center">
                    <i class="fas fa-network-wired text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                    <h4 class="font-weight-bold uppercase text-center">
                        {{ $networkingSubModule->sub_module }}
                    </h4>
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ asset('TPA/view-software-development-sub-modules') }}">
                        <span class="font-weight-bold text-yellow-500">Vacant spaces : </span>
                        <span
                            class="font-weight-bold text-blue-500">{{ $networkingSubModule->fieldApplications->count() }}/10
                        </span>

                    </a>
                    <div class="mt-2">
                        @if ($networkingSubModule->fieldApplications->where('sub_module_id', $networkingSubModule->sub_module_id)->count() > 0)
                            <span class="font-weight-bold text-yellow-500">Status : </span>
                            <span class="font-weight-bold text-red-500">Full</span>
                        @else
                            <span class="font-weight-bold text-yellow-500">Status : </span>
                            <span class="font-weight-bold text-blue-800">Vacant</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @livewire('tpa.field-application-files.application-form-livewire')

</div>
