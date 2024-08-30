<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        {{-- <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the contact details!
                </h2>
                <p class="text-gray-500">Complete at least 50% of the application to unlock the final step.</p>
                <p class="text-gray-600">Keep going, you're doing great!</p>
                <div
                    class="inline-flex items-center px-4 py-2 bg-blue-800 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition ease-in-out duration-300">
                    <i class="fas fa-spinner animate-spin mr-2"></i> Keep Filling Out the Forms
                </div>
            </div>
        </div> --}}
        @livewire('student.student-files.edit-student-detail-files.edit-contact-details-livewire')
    @else
        <div class="card-box mb-30 p-3">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500">
                <i class="fas fa-address-book"></i> Contact Details
            </h3>

            @if (session()->has('contact'))
                <div
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('contact') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif

            <form wire:submit.prevent="submitContactDetails" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- First Name -->
                    <div>
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                            wire:model="first_name" disabled />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                            wire:model="last_name" disabled />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <x-input-label for="phone_number" :value="__('Phone Number')" />
                        <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                            wire:model="phone_number" disabled />
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>

                    <!-- Country -->
                    <div>
                        <x-input-label for="country" :value="__('Country')" />
                        <x-select-input id="country" class="block mt-1 w-full" name="country"
                            wire:model.change="country">
                            <option value="">{{ __('Select Country') }}</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                    </div>

                    <!-- Region -->
                    <div>
                        <x-input-label for="region" :value="__('Region')" />
                        <x-select-input id="region" class="block mt-1 w-full" name="region"
                            wire:model.change="region">
                            <option value="">{{ __('Select Region') }}</option>
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->region }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error :messages="$errors->get('region')" class="mt-2" />
                    </div>

                    <!-- District -->
                    <div>
                        <x-input-label for="district" :value="__('District')" />
                        <x-select-input id="district" class="block mt-1 w-full" name="district"
                            wire:model.change="district">
                            <option value="">{{ __('Select District') }}</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->district }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error :messages="$errors->get('district')" class="mt-2" />
                    </div>

                    <!-- Ward -->
                    <div>
                        <x-input-label for="ward" :value="__('Ward')" />
                        <x-select-input id="ward" class="block mt-1 w-full" name="ward" wire:model="ward">
                            <option value="">{{ __('Select Ward') }}</option>
                            @foreach ($wards as $ward)
                                <option value="{{ $ward->id }}">{{ $ward->ward }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error :messages="$errors->get('ward')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500">
                        <i class="fas fa-check px-1"></i> {{ __('Save Contact Details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif

</div>
