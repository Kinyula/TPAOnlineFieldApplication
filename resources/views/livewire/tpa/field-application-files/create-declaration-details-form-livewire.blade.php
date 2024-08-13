<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the declaration
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
            <i class="fas fa-file-signature"></i> Applicant Declaration
        </h3>
        <form>
            <!-- Declaration Text -->
            <div>
                <x-input-label for="declaration_text" :value="__('Declaration Text')" />
                <textarea id="declaration_text"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    name="declaration_text" wire:model="declaration_text"></textarea>
                <x-input-error :messages="$errors->get('declaration_text')" class="mt-2" />
            </div>

            <!-- Signature -->
            <div class="mt-4">
                <x-input-label for="signature" :value="__('Signature')" />
                <x-text-input id="signature" class="block mt-1 w-full" type="text" name="signature" wire:model="signature" />
                <x-input-error :messages="$errors->get('signature')" class="mt-2" />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <x-input-label for="declaration_date" :value="__('Date')" />
                <x-text-input id="declaration_date" class="block mt-1 w-full" type="date" name="declaration_date"
                wire:model="declaration_date" />
                <x-input-error :messages="$errors->get('declaration_date')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i> {{ __('Submit Declaration') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    @endif


</div>
