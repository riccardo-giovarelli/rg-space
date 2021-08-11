<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo :width="250" height="250" />
            </a>
        </x-slot>

        <div class="fs-6 mt-4">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mt-4 mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mt-4 mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div class="mt-4 mb-3">
                <label for="login-email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="login-email" name="email" required autofocus>
            </div>
            <!-- Button -->
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
