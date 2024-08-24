<div>

    <!-- Progress Bar -->
    @livewire('tpa.field-application-files.field-application-progressbar-livewire', [], key('progress-bar'))

    @if ($data)
        <!-- Placeholder Card Message -->
        <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
        class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
        <div class="text-center space-y-4">
            <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">Your application had already been submitted!</h2>
            <p class="text-gray-500">Your application is now under review. Please wait for the selection process.</p>
            <p class="text-gray-600">Thank you for your patience. We’ll notify you once a decision is made.</p>
            <div
                class="inline-flex items-center px-4 py-2 bg-blue-800 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition ease-in-out duration-300">
                <i class="fas fa-clock mr-2"></i> Waiting for Selection
            </div>
        </div>
    </div>

    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Software Development sub modules -->
            @foreach ($softwareDevelopmentSubModules as $softwareDevelopmentSubModule)
                <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-laptop-code text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                        <h4 class="font-weight-bold uppercase text-center">
                            {{ $softwareDevelopmentSubModule->sub_module }}
                        </h4>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ asset('TPA/view-software-development-sub-modules') }}">
                            <span class="font-weight-bold text-yellow-500">Current applications : </span>
                            <span
                                class="font-weight-bold text-blue-500">{{ $softwareDevelopmentSubModule->fieldApplications->count() }}
                            </span>

                        </a>
                        <div class="mt-2">
                            @if ($softwareDevelopmentSubModule->fieldApplications->where('sub_module_id', $softwareDevelopmentSubModule->sub_module_id)->count() > 0)
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

    @endif

    <br>

    @livewire('tpa.view-applications-livewire')

</div>
