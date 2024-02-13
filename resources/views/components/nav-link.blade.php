@props(['active'])

@php
$classes = ($active ?? false)
            ? 'transition duration-300 ease-in-out bg-primary hover:bg-secondary rounded-3xl hover:text-black text-white'
            : 'transition duration-300 ease-in-out text-black hover:bg-secondary rounded-3xl hover:text-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
