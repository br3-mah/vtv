<x-guest-layout>
<div class="row flex">
<div class="col-lg-3 left-side-login">
    <!-- <span center class="mega-logo">ERMAC SCREEN</span> -->
</div>
<div class="col-lg-4 mid-side-login">
    <!-- <span center class="mega-logo">ERMAC SCREEN</span> -->
</div>
<div class="login-card col-lg-4 col-xs-12">
            
        <figure class="image is-64x64">
            <img src="{{asset('/images/ermac.webp')}}">
        </figure>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="text-green-700" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full text-green-500" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-green-700" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full text-green-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-4">
                <x-jet-button>
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        <x-jet-button class="mt-2 bg-blue-400">
            {{ __('Log in with Facebook') }}
        </x-jet-button>
        <x-jet-button class="mt-2 bg-red-500">
            {{ __('Log in with Google') }}
        </x-jet-button>
        <br>
        @if (Route::has('password.request'))
            <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Change your password') }}
            </a>
        @endif
    </div>
</div>
</x-guest-layout>
