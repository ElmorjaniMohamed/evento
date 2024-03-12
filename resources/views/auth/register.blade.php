<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
         <!-- Role selection -->
         <div class="mt-4">
            <div for="user_role" class="text-2xl text-slate-800 pb-6 text-center font-bold">Join as a Spectator or Organizer</div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="bg-none border-2 border-orange-500 outline-none rounded-lg p-4 flex items-center space-x-4">
                    <input id="user_role_user" type="radio" value="User" name="user_role"
                        class="text-orange-500 focus:ring-orange-500 dark:focus:ring-orange-500"  required>
                    <label for="user_role_user" class="text-sm font-medium text-gray-900 dark:text-gray-300">I'm a
                        Spectator</label>
                </div>
                <div class="bg-none border-2 border-orange-500 outline-none rounded-lg p-4 flex items-center space-x-4">
                    <input id="user_role_organizer" type="radio" value="Organizer" name="user_role"
                        class="text-orange-500 focus:ring-orange-500 dark:focus:ring-orange-500"  required>
                    <label for="user_role_organizer" class="text-sm font-medium text-gray-900 dark:text-gray-300">I'm an
                        Organizer</label>
                </div>
            </div>
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Image -->
        <x-image-input name="image" label="Image" />


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
