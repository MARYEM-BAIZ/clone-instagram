<x-guest-layout>

<div style="margin-top:40px"  >
          <img style=" display:block; margin-left:auto; margin-right:auto" src="{{asset('photos/instagram.jpg')}}" alt="image">
          </div>
    <!-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" /> -->

        <form style=" border-radius:7px; width:40% ; border: 1px solid #eee ; box-shadow: 0 2px 3px #ccc; margin: 40px auto; padding:16px "  method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <div class="ml-4 text-white px-3 py-2" style="background-color:rgb(39, 175, 164);border-radius:7px">
              <button>  {{ __('Register') }}</button>
                    </div>
               
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
