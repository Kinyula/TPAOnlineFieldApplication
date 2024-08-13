<div>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-book"></i> Publication Details
        </h3>
        @if (session()->has('publication'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('publication') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
        @endif
        <form wire:submit.prevent="submitPublicationDetails">
            <!-- Publication Title -->
            <div class="mt-4">
                <x-input-label for="publication_title" :value="__('Publication Title')" />
                <x-text-input id="publication_title" class="block mt-1 w-full" type="text" name="publication_title" wire:model="publication_title" />
                <x-input-error :messages="$errors->get('publication_title')" class="mt-2" />
            </div>

            <!-- Publication Standard -->
            <div class="mt-4">
                <x-input-label for="publication_standard" :value="__('Publication Standard')" />
                <x-text-input id="publication_standard" class="block mt-1 w-full" type="text" name="publication_standard" wire:model="publication_standard" />
                <x-input-error :messages="$errors->get('publication_standard')" class="mt-2" />
            </div>

            <!-- Publication Date -->
            <div class="mt-4">
                <x-input-label for="publication_date" :value="__('Publication Date')" />
                <x-text-input id="publication_date" class="block mt-1 w-full" type="date" name="publication_date" wire:model="publication_date" />
                <x-input-error :messages="$errors->get('publication_date')" class="mt-2" />
            </div>

            <!-- Publication URL -->
            <div class="mt-4">
                <x-input-label for="publication_url" :value="__('Publication URL')" />
                <x-text-input id="publication_url" class="block mt-1 w-full" type="url" name="publication_url" wire:model="publication_url" />
                <x-input-error :messages="$errors->get('publication_url')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-save px-1"></i> {{ __('Save Publication Details') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
