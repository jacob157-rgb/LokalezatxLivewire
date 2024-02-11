<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="flex justify-center">
            <span class="pt-1 text-3xl font-medium">{{ __('Verify Email') }}</span>
        </div>
        <div class="pt-5 mb-4 text-sm text-center text-gray-600">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        <div class="flex pt-5 text-center">
            <div class="w-full">
                <span style="font-variation-settings: 'wght' 600" class="text-9xl text-primary material-symbols-outlined">
                    mail
                </span>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-center text-green-600">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="flex justify-center pt-5">
                <div class="w-full">
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </div>
        </form>

        <div class="flex justify-center pt-5 text-center">
            <div class="w-full">
                <a href="{{ route('profile.show') }}"
                class="w-full py-3 font-semibold text-primary rounded-xl hover:underline">
                    {{ __('Edit Profile') }}</a>
            </div>
        </div>

        <div class="flex justify-center pt-2 text-center">
            <div class="w-full">
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit"
                    class="w-full py-3 font-semibold text-primary rounded-xl hover:underline">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
