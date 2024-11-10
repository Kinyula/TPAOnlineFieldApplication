<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the insurance
                    details!
                </h2>
                <p class="text-gray-500">Complete at least 50% of the application to unlock the final step.</p>
                <p class="text-gray-600">Keep going, you're doing great!</p>
                <div
                    class="inline-flex items-center px-4 py-2 bg-blue-800 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition ease-in-out duration-300">
                    <i class="fas fa-spinner animate-spin mr-2"></i> Keep Filling Out the Forms
                </div>
            </div>
        </div>
    @else
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-shield-alt"></i> Insurance Details
        </h3>
        <form wire:submit.prevent = "submitInsuranceDetails" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

            <!-- Insurance Company -->
            <div>
                <x-input-label for="insurance_company" :value="__('Insurance Company')" />
                <x-text-input id="insurance_company" class="block mt-1 w-full" type="text" name="insurance_company" wire:model="insurance_company" />
                <x-input-error :messages="$errors->get('insurance_company')" class="mt-2" />
            </div>

            <!-- Insurance Card Number -->
            <div class="mt-4">
                <x-input-label for="insurance_card_number" :value="__('Insurance Card Number')" />
                <x-text-input id="insurance_card_number" class="block mt-1 w-full" type="text" name="insurance_card_number" wire:model="insurance_card_number" />
                <x-input-error :messages="$errors->get('insurance_card_number')" class="mt-2" />
            </div>

            <!-- Expiration Date -->
            <div class="mt-4">
                <x-input-label for="expiration_date" :value="__('Expiration Date')" />
                <x-text-input id="expiration_date" class="block mt-1 w-full" type="date" name="expiration_date"
                wire:model="expiration_date" />
                <x-input-error :messages="$errors->get('expiration_date')" class="mt-2" />
            </div>

            <!-- Insurance Card Attachment -->
            <div class="mt-4">
                <x-input-label for="insurance_card_attachment" :value="__('Insurance Card Attachment')" />
                <x-file-input id="insurance_card_attachment" class="block mt-1 w-full" name="insurance_card_attachment" wire:model="insurance_card_attachment" />
                <x-input-error :messages="$errors->get('insurance_card_attachment')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                    <i class="fas fa-save px-1"></i> {{ __('Save Insurance Details') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    @endif


</div>
