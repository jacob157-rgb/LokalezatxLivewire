<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="flex justify-center">
            <span class="pt-1 text-3xl font-medium">{{ __('Confirm Password') }}</span>
        </div>
        <div class="pt-5 mb-4 text-sm text-center text-gray-600">
            {{ __('For Security reason. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="flex justify-center">
                <div class="w-full">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="current-password" autofocus />
                </div>
            </div>

            <x-validation-errors class="mt-1" />

            <div class="flex justify-center pt-5">
                <div class="w-full">
                    <x-button>
                        {{ __('Confirm') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
