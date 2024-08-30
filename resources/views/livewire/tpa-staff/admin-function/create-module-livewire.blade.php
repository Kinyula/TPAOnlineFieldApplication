<div>
    <div class="card-box mb-30 p-3">
        @if (session()->has('module'))
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <strong class="font-medium">{{ session('module') }}</strong>
            </div>
        @endif
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Module') }}
        </h2>
        <p class="text-red-500">NB: all parts with * are mandatory</p>
        <br>
        @if (session()->has('module'))
            <div role="alert"
                class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('module') }}</strong>
                </div>
                <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                    data-bs-dismiss="alert">
                    <i class="fas fa-times w-5 h-5"></i>
                </button>
            </div>
        @endif
        <form wire:submit.prevent="createModule">

            <!-- Department ID -->
            <div class="mt-4">
                <span class="flex relative top-3">
                    <x-input-label for="department" :value="__('Department')" />
                    <x-mandatory-star />
                </span>
                <x-select-input id="department" class="block mt-1 w-full" name="department" wire:model="department">
                    <option value="">-- Select Department --</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('department')" class="mt-2" />
            </div>

            <!-- Module -->
            <div class="mt-4">
                <span class="flex relative top-3">
                    <x-input-label for="module" :value="__('Module')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="module" class="block mt-1 w-full" type="text" name="module"
                    wire:model="module" />
                <x-input-error :messages="$errors->get('module')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i>
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
