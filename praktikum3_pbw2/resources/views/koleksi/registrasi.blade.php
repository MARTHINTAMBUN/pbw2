<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registrasi User') }}
            </h2>
        </x-slot>

    <form method="POST" action="{{ url('koleksiStore') }}">
            @csrf

            <!-- NamaKoleksi -->
            <div class="mt-4">
                <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />

                <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autofocus />

                <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
            </div>

            <!-- Jenis Koleksi -->
            <div class="mt-4">
                <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />

                <x-text-input id="jenisKoleksi" class="block mt-1 w-full" type="text" name="jenisKoleksi" :value="old('jenisKoleksi')" required autofocus />

                <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
            </div>

            <!-- Jumlah Koleksi -->
            <div class="mt-4">
                <x-input-label for="jumlahKoleksi" :value="__('jumlahKoleksi')" />

                <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required />

                <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
            </div>

            <!-- Submit -->
            <x-primary-button class="my-4">
                    {{ __('Submit') }}
            </x-primary-button>
        </form>
        </div>
    </div>
    
</x-app-layout>