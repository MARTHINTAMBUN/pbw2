<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registrasi User') }}
            </h2>
        </x-slot>

    <form method="POST" action="{{ url('userStore') }}">
            @csrf

            <!-- Username -->
            <div class="mt-4">
                <x-input-label for="username" :value="__('Username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Full Name -->
            <div class="mt-4">
                <x-input-label for="fullname" :value="__('Nama Lengkap')" />

                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />

                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Re-Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Alamat -->
            <div class="mt-4">
                <x-input-label for="alamat" :value="__('Alamat')" />

                <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="address" :value="old('alamat')" required autofocus />

                <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
            </div>

            <!-- Birth Date -->
            <div class="mt-4">
                <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />

                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus />

                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <!-- Phone Number -->
            <div class="mt-4">
                <x-input-label for="phoneNumber" :value="__('Nomor Telepon')" />

                <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required autofocus />

                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
            </div>

            <div class="my-4">
            <x-primary-button class="my-4">
                    {{ __('Submit') }}
            </x-primary-button>
                <button type="Reset" class="btn btn-danger buttonConf">Reset</button>
            </div>
        </form>
        </div>
    </div>
    
</x-app-layout>