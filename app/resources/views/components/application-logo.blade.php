@props(['width', 'height'])

<img src="{{ asset('assets/images/logo/logo.png') }}" alt="{{ __('misc.app_main_logo') }}"
    {{ $attributes->merge(['width' => $width, 'height' => $height]) }}>
