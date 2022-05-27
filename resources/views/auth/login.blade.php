<x-guest-layout>
<div class="row flex">
<div class="col-lg-3 left-side-login">
</div>
<div class="col-lg-4 mid-side-login">
</div>
<div class="login-card col-lg-4 col-xs-12">
            
        <!-- Stylus Ermac Screen -->
        <input id="lights" type="checkbox"/>
        <!-- <div class="backdrop"></div> -->
        <div class="scene">
            <span center class="mega-logo">ERMAC </span><span class="mega-logo-postfix">SCREEN TV</span>
            <div class="tv">
                <!-- <video class="ambilight" id="dupe" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/video-player-video.mp4" muted="muted" playsinline="playsinline" autoplay="autoplay" loop="loop"></video> -->
                <video class="screen" id="player" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/605876/video-player-video.mp4" muted="muted" playsinline="playsinline" autoplay="autoplay" loop="loop"></video>
            </div>
<!-- 
            <div class="tv__unit tv-unit">
                <div class="tv-unit__door"></div>
                <div class="tv-unit__door"></div>
                <div class="tv-unit__door"></div>
            </div> -->
            <!-- <label class="light-switch" for="lights"></label> -->

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
                    <!-- <x-jet-label class="text-green-700" for="email" value="{{ __('Email') }}" /> -->
                    <x-jet-input id="email" placeholder="Username" class="block mt-1 w-full text-green-500" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <!-- <x-jet-label class="text-green-700" for="password" value="{{ __('Password') }}" /> -->
                    <x-jet-input id="password" placeholder="Password" class="block mt-1 w-full text-green-500" type="password" name="password" required autocomplete="current-password" />
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
            @if (Route  ::has('password.request'))
                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Change your password') }}
                </a>
            @endif
        </div>
        <!-- End Stylus Ermac Screen -->

    </div>
</div>
</x-guest-layout>
