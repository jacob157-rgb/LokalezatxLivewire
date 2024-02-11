<x-guest-layout>
    <div class="pt-4 bg-primary">
        <div class="flex flex-col items-center min-h-screen pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>
            <div class="p-3">
                <div class="w-full p-6 mt-4 overflow-hidden prose bg-white shadow-md rounded-3xl sm:max-w-2xl">
                    {!! $terms !!}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
