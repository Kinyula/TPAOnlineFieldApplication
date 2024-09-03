<div>
    <div class="card-box mb-30 p-6 bg-white shadow-lg rounded-lg">
        <h3 class="text-2xl font-bold mb-6 text-yellow-500 flex items-center">
            <i class="fas fa-envelope px-2"></i> Response Letter Form
        </h3>

        @if (session()->has('success'))
            <div
                class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('success') }}</strong>
                </div>
                <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                    wire:click="$set('search', '')">
                    <i class="fas fa-times w-5 h-5"></i>
                </button>
            </div>
        @endif

        <form wire:submit.prevent="submitResponseLetter" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Select Input with Search -->
            <div x-data="{ open: false, search: '' }" @click.away="open = false">
                <x-input-label for="recipient" :value="__('Select Recipient')" class="text-lg font-semibold mb-2" />
                <div class="relative">
                    <input type="text"
                        class="block mt-1 w-full border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 rounded-md"
                        placeholder="Search..." x-model="search" @input="$wire.set('search', search)"
                        @click="open = true" />
                    <div class="absolute top-0 right-0 mt-1 mr-2">
                        <i class="fas fa-search"></i>
                    </div>
                    <select id="recipient"
                        class="block mt-1 w-full border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 rounded-md mt-2"
                        name="recipient" wire:model="recipient" size="5" x-show="open"
                        @click.away="open = false">
                        <option value="">{{ __('Select Recipient') }}</option>
                        @foreach ($recipients as $recipient)
                            <option value="{{ $recipient->user_id }}">{{ $recipient->user->first_name }}
                                {{ $recipient->user->last_name }} from <span
                                    class="text-red-500">{{ $recipient->user->academicDetails?->institute_name }}</span>
                            </option>
                        @endforeach
                    </select>
                </div>
                <x-input-error :messages="$errors->get('recipient')" class="mt-2 text-red-500 text-sm" />
            </div>

            <!-- File Input -->
            <div class="sm:col-span-2 lg:col-span-3">
                <x-input-label for="response_letter" :value="__('Upload Response Letter')" class="text-lg font-semibold mb-2" />

                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-md cursor-pointer hover:border-yellow-500 focus-within:ring-2 focus-within:ring-yellow-500 focus-within:border-yellow-500 transition duration-150 ease-in-out">
                    <div class="space-y-1 text-center" wire:loading.class="opacity-50">
                        <label for="response_letter" class="cursor-pointer">
                            <svg class="mx-auto h-full w-full text-gray-400 hover:text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M8 16c0-4.418 3.582-8 8-8h16c4.418 0 8 3.582 8 8v16c0 4.418-3.582 8-8 8H16c-4.418 0-8-3.582-8-8V16z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M32 16l-8 8-8-8M24 24v-8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </label>
                        <div class="flex text-sm text-gray-600">
                            <label for="response_letter" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-600 hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-yellow-500 focus-within:ring-offset-2">
                                <span>Upload a response letter</span>
                                <input id="response_letter" name="response_letter" type="file" class="sr-only" wire:model="response_letter">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PDF up to 10MB</p>
                    </div>
                </div>

                <x-input-error :messages="$errors->get('response_letter')" class="mt-2 text-red-500 text-sm" />
            </div>


            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-6 sm:col-span-2 lg:col-span-3">
                <x-primary-button
                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-md shadow-md transition ease-in-out duration-150">
                    <i class="fas fa-save px-1"></i> {{ __('Submit Response Letter') }}
                </x-primary-button>
            </div>
        </form>
    </div>



</div>
