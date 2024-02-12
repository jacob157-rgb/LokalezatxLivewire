<x-guest-layout class="bg-primary">
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="flex justify-center">
            <span class="pt-1 text-3xl font-medium">{{ __('Sign In') }}</span>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex justify-center pt-5">
                <div class="w-full">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="" type="email" name="email" :value="old('email')" required
                        autofocus autocomplete="username" />
                </div>
            </div>

            <div class="flex justify-center pt-4">
                <div class="w-full">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
            </div>

            <x-validation-errors class="mt-1"/>

            <div class="flex justify-center pt-4">
                <div class="w-full">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center pt-5">
                <div class="w-full">
                    <x-button class="flex items-center justify-center">
                        {{ __('Sign in') }} <span style="font-variation-settings: 'wght' 200" class="material-symbols-outlined ms-1">
                            arrow_circle_right
                            </span>
                    </x-button>
                </div>
            </div>

            <div class="flex justify-center pt-5">
                @if (Route::has('password.request'))
                <span>{{ __('Forgot your password?') }} <a href="{{ route('password.request') }}"
                        class="w-full py-3 font-semibold text-primary rounded-xl hover:underline">{{ __('Click here') }}</a></span>
                @endif
            </div>

            <div class="flex justify-center">
                <div class="w-full">
                    <div class="relative flex items-center py-5">
                        <div class="flex-grow border-t border-gray-500"></div>
                        <span class="flex-shrink mx-4 text-gray-600">{{__ ('Or Sign In with')}}</span>
                        <div class="flex-grow border-t border-gray-500"></div>
                    </div>
                </div>
            </div>

            <x-gbutton/>

            <div class="flex justify-center">
                <div class="w-full">
                    <div class="relative flex items-center py-5">
                        <div class="flex-grow border-t border-gray-500"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <span>{{ __("Don't have an account yet?")}}<a href="{{ route('register') }}"
                        class="w-full py-3 font-semibold ms-1 text-primary rounded-xl hover:underline">{{ __('Sign Up here')}}</a></span>
            </div>

            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>