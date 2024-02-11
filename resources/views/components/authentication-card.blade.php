<div class="flex flex-col max-h-full min-h-screen bg-primary lg:flex lg:flex-row-reverse">
    <div class="flex flex-col items-center justify-center basis-1/2">
        {{ $logo }}
    </div>

    <div class="flex flex-col justify-center w-full p-10 bg-white basis-1/2 rounded-t-2xl lg:rounded-l-none lg:rounded-r-2xl">
        {{ $slot }}
    </div>
</div>
