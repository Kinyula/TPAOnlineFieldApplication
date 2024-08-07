<div>
    <div class="card-box mb-30 p-3">
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Department') }}
        </h2>
        <form wire:submit.prevent = "createDepartment">
            <!-- Department -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="department" :value="__('Department')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="department" class="block mt-1 w-full" type="text" name="department"
                    wire:model="department" />
                <x-input-error :messages="$errors->get('department')" class="mt-2" />
            </div>

            <!-- Floor number -->

            <div>
                <span class="flex relative top-3">
                    <x-input-label for="region" :value="__('Region')" />
                    <x-mandatory-star />
                </span>
                <x-select-input id="floor" class="block mt-1 w-full" name="floor" wire:model="floor">
                    <option value="">-- Select Floor --</option>

                    <!-- Add your region options here with numerical values in brackets -->
                    <option value="B2">Below 2 (B2)</option>
                    <option value="B1">Below 1 (B1)</option>
                    <option value="1">First floor (1)</option>
                    <option value="2">Second floor (2)</option>
                    <option value="3">Third floor (3)</option>
                    <option value="4">Fourth floor (4)</option>
                    <option value="5">Fifth floor (5)</option>
                    <option value="6">Sixth floor (6)</option>
                    <option value="7">Seventh floor (7)</option>
                    <option value="8">Eighth floor (8)</option>
                    <option value="9">Ninth floor (9)</option>
                    <option value="10">Tenth floor (10)</option>
                    <option value="11">Eleventh floor (11)</option>
                    <option value="12">Twelfth floor (12)</option>
                    <option value="13">Thirteenth floor (13)</option>
                    <option value="14">Fourteenth floor (14)</option>
                    <option value="15">Fifteenth floor (15)</option>
                    <option value="16">Sixteenth floor (16)</option>
                    <option value="17">Seventeenth floor (17)</option>
                    <option value="18">Eighteenth floor (18)</option>
                    <option value="19">Nineteenth floor (19)</option>
                    <option value="20">Twentieth floor (20)</option>
                    <option value="21">Twenty first floor (21)</option>
                    <option value="22">Twenty second floor (22)</option>
                    <option value="23">Twenty third floor (23)</option>
                    <option value="24">Twenty fourth floor (24)</option>
                    <option value="25">Twenty fifth floor (25)</option>
                    <option value="26">Twenty sixth floor (26)</option>
                    <option value="27">Twenty seventh floor (27)</option>
                    <option value="28">Twenty eighth floor (28)</option>
                    <option value="29">Twenty ninth floor (29)</option>
                    <option value="30">Thirtieth floor (30)</option>
                    <option value="31">Thirty first floor (31)</option>
                    <option value="32">Thirty second floor (32)</option>
                    <option value="33">Thirty third floor (33)</option>
                    <option value="34">Thirty fourth floor (34)</option>
                    <option value="35">Thirty fifth floor (35)</option>
                    <option value="36">Thirty sixth floor (36)</option>
                    <option value="max">Max floor</option>
                </x-select-input>
                <x-input-error :messages="$errors->get('floor')" class="mt-2" />
            </div>


            <!-- Office name -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="office" :value="__('Office Name')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="office" class="block mt-1 w-full" type="text" name="office"
                    wire:model="office" />
                <x-input-error :messages="$errors->get('office')" class="mt-2" />
            </div>

            <!-- Submit button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i>
                    {{ __('save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
