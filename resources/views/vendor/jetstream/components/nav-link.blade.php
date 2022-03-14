@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link active font-weight-bolder'
            : 'nav-link';
@endphp

<li class="nav-item border border-dark rounded-3" >
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
