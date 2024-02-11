<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full py-2 font-light text-lg text-white bg-primary rounded-xl']) }}>
    {{ $slot }}
</button>
