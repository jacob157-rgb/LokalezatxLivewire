<x-guest-layout>
    <header>
        <nav class="container flex items-center justify-between px-0 py-4 mx-auto">
            <!-- Mobile Navigation -->
            <div class="flex items-center ml-5 lg:hidden">
                <button class="text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="stroke-0 bi bi-list text-primary h-7 w-7" viewBox="0 0 16 16" type="button"
                        data-drawer-target="nav-drawer" data-drawer-show="nav-drawer">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </button>
                <span class="ml-2 text-xl text-black">Navigation</span>
            </div>
    
            <!-- Logo -->
            <a href="/" class="flex items-center ml-5 mr-5 lg:ml-8 lg:mr-0">
                <img class="h-8 md:hidden lg:hidden" src="{{ asset('assets/logo/icon.png') }}" alt="">
                <img class="hidden h-8 ml-1.5 md:block lg:block" src="{{ asset('assets/logo/logo_blk.png') }}" alt="">
            </a>
    
            <!-- Desktop Navigation -->
            <div class="items-center justify-center flex-grow hidden text-center lg:flex">
                <a class="p-3 px-5 transition duration-300 ease-in-out active:bg-primary hover:bg-secondary me-2 rounded-3xl hover:text-black active:text-white"
                    href="/">Beranda</a>
                <a class="p-3 px-5 transition duration-300 ease-in-out active:bg-primary hover:bg-secondary me-2 rounded-3xl hover:text-black active:text-white"
                    href="/about">Tentang Kami</a>
                <a class="p-3 px-5 transition duration-300 ease-in-out active:bg-primary hover:bg-secondary rounded-3xl hover:text-black active:text-white"
                    href="/contact">Kontak</a>
            </div>
    
            <!-- Action buttons -->
            <div class="items-center hidden mr-7 lg:flex">
                <button
                    class="px-4 py-2 text-sm text-black transition duration-500 ease-in-out rounded-lg ring-inset-1 me-3 ring-1 ring-black hover:bg-black hover:text-white active:bg-black active:text-white">Daftarkan
                    Tempat</button>
                <a href="/login" class="bg-primary rounded-xl px-5 py-1.5 text-white active:bg-red-800"><span
                        class="align-middle">Masuk </span><span class="text-xl align-middle"><i
                            class="bi bi-box-arrow-in-right"></i></span></a>
            </div>
        </nav>
    
    </header>
</x-guest-layout>
