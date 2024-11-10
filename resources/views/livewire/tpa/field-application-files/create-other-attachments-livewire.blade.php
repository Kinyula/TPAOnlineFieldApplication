<div>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-paperclip"></i> Attachments
        </h3>

        @if (session()->has('attachments'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('attachments') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif

        <form wire:submit.prevent = "submitOtherAttachments" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Attachment Name -->
            <div>
                <x-input-label for="attachment_name" :value="__('Attachment Name')" />
                <x-select-input id="attachment_name" class="block mt-1 w-full" name="attachment_name" wire:model="attachment_name">
                    <option value="">{{ __('Select Attachment') }}</option>
                    <option value="curriculum_vitae">{{ __('Curriculum Vitae') }}</option>
                    <option value="birth_certificate">{{ __('Birth Certificate') }}</option>
                </x-select-input>
                <x-input-error :messages="$errors->get('attachment_name')" class="mt-2" />
            </div>

            <!-- Attachment File -->
            <div class="mt-4">
                <x-input-label for="attachment_file" :value="__('Attachment File')" />
                <x-file-input id="attachment_file" class="block mt-1 w-full" name="attachment_file" wire:model="attachment_file" />
                <x-input-error :messages="$errors->get('attachment_file')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                    <i class="fas fa-upload px-1"></i> {{ __('Upload Attachment') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
