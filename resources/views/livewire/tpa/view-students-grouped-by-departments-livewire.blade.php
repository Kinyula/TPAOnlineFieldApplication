<div>
    <div class="bg-white shadow-lg rounded-lg p-6">
        @if (session()->has('field_spaces'))
            <div role="alert"
                class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('field_spaces') }}</strong>
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <div role="alert"
                class="flex items-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <i class="fas fa-exclamation-circle w-6 h-6 mr-3 text-red-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('error') }}</strong>
                </div>
            </div>
        @endif

        <h2 class="text-2xl font-bold text-gray-800 flex items-center mb-4">
            <i class="fas fa-plus text-yellow-500 mr-2"></i>
            Create Groups
        </h2>

        <p class="text-red-500">NB: all parts with * are mandatory</p>

        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" wire:model.live="searchTerm" placeholder="Search students..."
                class="px-4 py-2 border rounded w-full">
        </div>

        <form wire:submit.prevent="createGroups">
            {{-- Student applicants --}}
            <div class="mb-4">
                <label for="department" class="block text-gray-700 font-bold mb-2">
                    <span class="flex items-center">
                        Student applicants <span class="text-red-500 ml-1">*</span>
                    </span>
                </label>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @if (auth()->user()->extraUserInfo->department_id == $students->first()?->department_id)
                        @forelse ($students as $student)
                            <div class="flex items-center space-x-2 p-4 border rounded-md">
                                <input type="checkbox" wire:model="selectedStudents" value="{{ $student->id }}"
                                    class="form-checkbox">
                                <span class="flex items-center">
                                    <!-- Display allocation status -->
                                    @if ($student->allocation_status == 'assigned')
                                        <span
                                            class="bg-green-100 text-green-600 text-xs font-medium py-1 px-2 rounded-full mr-2">{{ $student->allocation_status }}</span>
                                    @else
                                        <span
                                            class="bg-red-100 text-red-600 text-xs font-medium py-1 px-2 rounded-full mr-2">{{ $student->allocation_status }}</span>
                                    @endif
                                    {{ $student->user->first_name }} {{ $student->user->last_name }}
                                </span>
                            </div>
                        @empty
                            <p>No students available in this department.</p>
                        @endforelse
                    @else
                        <p>No results.</p>
                    @endif
                </div>

                @error('selectedStudents')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
                <span>{{ $students->links() }}</span>
            </div>

            <!-- Group Selection -->
            <div class="mt-4">
                <span class="flex relative top-4">
                    <x-input-label for="group" :value="__('Group')" />
                    <x-mandatory-star />
                </span>

                <x-select-input id="group" class="block mt-1 w-full" wire:model="group" name="group">
                    <option value="">{{ __('Select Group') }}</option>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="group {{ $i }}">{{ __('Group ') . $i }}</option>
                    @endfor
                </x-select-input>

                @error('group')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-6">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-bold rounded-lg shadow hover:bg-yellow-600 transition">
                    <i class="fas fa-check px-1"></i>
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>

    <br>
    @livewire('tpa.view-groups-livewire')
</div>
