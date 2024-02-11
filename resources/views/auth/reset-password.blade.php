<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="flex justify-center">
            <span class="pt-1 text-3xl font-medium">{{ __('Reset Password') }}</span>
        </div>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="flex justify-center pt-5">
                <div class="block w-full">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $request->email)"
                        required autofocus autocomplete="username" />
                </div>
            </div>

            <div class="flex justify-center pt-4">
                <div class="w-full">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="new-password" />
                </div>
            </div>

            <div class="flex justify-center pt-4">
                <div class="w-full">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <x-validation-errors class="mt-1" />

            <div class="flex justify-center pt-5">
                <div class="w-full">
                    <x-button class="flex items-center justify-center">
                        {{ __('Reset Password') }} <span style="font-variation-settings: 'wght' 200"
                            class="material-symbols-outlined ms-1">
                            lock_reset
                        </span>
                    </x-button>
                </div>
            </div>

            <div class="flex pt-2 text-center">
                <a href="{{ route('login') }}"
                    class="w-full py-3 font-semibold text-primary rounded-xl hover:underline">{{ __('Sign In') }}</a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
