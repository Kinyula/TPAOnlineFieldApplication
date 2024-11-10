<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the professional
                    details!</h2>
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
                <i class="fas fa-user-graduate"></i> Professional Qualifications
            </h3>
            <form wire:submit.prevent = "submitProfessionalQualifications" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Country -->
                <div class="mt-4">
                    <x-input-label for="country" :value="__('Country')" />
                    <x-select-input id="country" class="block mt-1 w-full" name="country_id" wire:model="country">
                        <option value="">{{ __('Select Country') }}</option>
                        <!-- Add country options here -->
                    </x-select-input>
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>

                <!-- Course -->
                <div class="mt-4">
                    <x-input-label for="course" :value="__('Course')" />
                    <x-text-input id="course" class="block mt-1 w-full" type="text" name="course"
                        wire:model="course" />
                    <x-input-error :messages="$errors->get('course')" class="mt-2" />
                </div>

                <!-- Mode of Learning -->
                <div class="mt-4">
                    <x-input-label for="mode_of_learning" :value="__('Mode of Learning')" />
                    <x-select-input id="mode_of_learning" class="block mt-1 w-full" name="mode_of_learning"
                        wire:model="mode_of_learning">
                        <option value="">{{ __('Select Mode of Learning') }}</option>
                        <option value="online">{{ __('Online') }}</option>
                        <option value="blended">{{ __('Blended') }}</option>
                        <option value="physical">{{ __('Physical') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('mode_of_learning')" class="mt-2" />
                </div>

                <!-- Institution -->
                <div class="mt-4">
                    <x-input-label for="institution" :value="__('Institution')" />
                    <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution"
                        wire:model="institution" />
                    <x-input-error :messages="$errors->get('institution')" class="mt-2" />
                </div>

                <!-- Issuer -->
                <div class="mt-4">
                    <x-input-label for="issuer" :value="__('Issuer')" />
                    <x-text-input id="issuer" class="block mt-1 w-full" type="text" name="issuer"
                        wire:model="issuer" />
                    <x-input-error :messages="$errors->get('issuer')" class="mt-2" />
                </div>

                <!-- Certificate -->
                <div class="mt-4">
                    <x-input-label for="certificate" :value="__('Certificate')" />
                    <x-text-input id="certificate" class="block mt-1 w-full" type="file" name="certificate"
                        wire:model="certificate" />
                    <x-input-error :messages="$errors->get('certificate')" class="mt-2" />
                </div>

                <!-- Start Date and End Date -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                    <!-- Start Date -->
                    <div>
                        <x-input-label for="start_date" :value="__('Start Date')" />
                        <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                            wire:model="start_date" />
                        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                    </div>

                    <!-- End Date -->
                    <div>
                        <x-input-label for="end_date" :value="__('End Date')" />
                        <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date"
                            wire:model="end_date" />
                        <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-10">
                    <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                        <i class="fas fa-save px-1"></i> {{ __('Save Professional Qualifications') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif


</div>
