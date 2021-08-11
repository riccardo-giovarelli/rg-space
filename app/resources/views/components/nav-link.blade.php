@props(['active'])

<a {{ $attributes->merge(['class' => $active ? 'nav-link disabled text-decoration-underline' : 'nav-link']) }}>
    {{ $slot }}
</a>
