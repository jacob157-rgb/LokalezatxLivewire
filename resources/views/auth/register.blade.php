<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="flex justify-center">
            <span class="pt-1 text-3xl font-medium">{{ __('Sign Up') }}</span>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex justify-center pt-4">
                <div class="w-full">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>
            </div>

            <div class="flex justify-center pt-4">
                <div class="w-full">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
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

            <x-validation-errors class="mt-1"/>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex justify-center pt-5">
                <div class="w-full">
                    <x-button class="flex items-center justify-center">
                        {{ __('Sign up') }} <span style="font-variation-settings: 'wght' 200" class="material-symbols-outlined ms-1">
                            add_circle
                            </span>
                    </x-button>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-full">
                    <div class="relative flex items-center py-5">
                        <div class="flex-grow border-t border-gray-500"></div>
                        <span class="flex-shrink mx-4 text-gray-600">{{__ ('Or Sign Up with')}}</span>
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
                <span>{{ __("Already have an account?")}}<a href="{{ route('login') }}"
                        class="w-full py-3 font-semibold ms-1 text-primary rounded-xl hover:underline">{{ __('Sign In here')}}</a></span>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>