<div>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-user"></i> Create TPA Staff</h3>
        <form wire:submit.prevent="createStaff" class="space-y-4">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- First Name -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        wire:model="first_name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        wire:model="last_name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        wire:model="email" autocomplete="username"
                        placeholder="Your email should be like this eg. name@gmail.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="phone_number" :value="__('Phone Number')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                        wire:model="phone_number" autocomplete="phone_number"
                        placeholder="Your phone number should be like this 0xxxxxxxx" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-mandatory-star />
                    </span>
                    <div class="relative">
                        <x-text-input id="password" class="block mt-1 w-full pr-10" type="password" name="password"
                            wire:model="password" />
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" onclick="togglePasswordVisibility()">
                            <i id="password-eye-icon" class="far fa-eye text-gray-600"></i>
                        </span>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Gender -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="gender" :value="__('Gender')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="gender" class="block mt-1 w-full" name="gender" wire:model="gender">
                        <option value="">-- Select Gender --</option>
                        <option value="male">{{ __('Male') }}</option>
                        <option value="female">{{ __('Female') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>

                <!-- Port -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="port" :value="__('Port')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="port" class="block mt-1 w-full" name="port" wire:model="port">
                        <option value="">-- Select Port --</option>
                        @foreach ($ports as $port)
                            <option value="{{ $port->id }}">{{ $port->port_name }}</option>
                        @endforeach
                    </x-select-input>
                    <x-input-error :messages="$errors->get('port')" class="mt-2" />
                </div>

                <!-- Role -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="role" :value="__('Role')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="role" class="block mt-1 w-full" name="role" wire:model="role">
                        <option value="">-- Select Role --</option>
                        <option value="2">Directorate of ICT ( DICT )</option>
                        <option value="3">Directorate of Marketing</option>
                        <option value="4">Human Resource ( HR )</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                </div>

                <!-- Position -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="position" :value="__('Position')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="position" class="block mt-1 w-full" name="position" wire:model="position">
                        <option value="">-- Select Position --</option>
                        <option value="Directorate of ICT ( DICT )">Directorate of ICT ( DICT )</option>
                        <option value="Directorate of Marketing">Directorate of Marketing</option>
                        <option value="Human Resource ( HR )">Human Resource ( HR )</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('position')" class="mt-2" />
                </div>

                <!-- Department -->
                <div>
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

                <!-- Profile Image -->
                <div>
                    <label for="profile_image"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">Profile image</label>
                    <input type="file" wire:model="profile_image" class="form-control">
                    @error('profile_image')
                        <strong class="text-sm text-red-600 dark:text-red-400 space-y-1 mt-2">{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i>
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('password-eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</div>
