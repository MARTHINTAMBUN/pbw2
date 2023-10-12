<x-app-layout>
     <form method="POST" action="{{ url('/koleksiStore') }}">
         @csrf
         <!-- Name -->
          <div>
            <x-input-label for="name" :value="__('Tambah Koleksi')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
