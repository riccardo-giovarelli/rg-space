<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo :width="250" :height="250" />
            </a>
        </x-slot>

        <div class="mt-4 mb-4">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <!-- Password -->
            <div class="mb-3">
                <label for="login-password" class="form-label">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control" id="login-password" required
                    autocomplete="current-password">
            </div>
            <!-- Button -->
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">{{ __('Confirm') }}</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
