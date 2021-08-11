<x-guest-layout>
    <div class="onlyric__container">
        <div class="onlyric__message">
            <h1>{{ __('auth.auth_only-ric_message') }}</h1>
        </div>
        <div class="onlyric__back">
            <a href="{{ route('login') }}">{{ __('auth.auth_only-ric_back') }}</a>
        </div>
    </div>
</x-guest-layout>
