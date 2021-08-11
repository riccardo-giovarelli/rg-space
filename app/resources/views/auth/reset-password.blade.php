<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo :width="250" height="250" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mt-4 mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mt-4 mb-3">
                <label for="login-email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="login-email" name="email" required autofocus>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="reset-password" class="form-label">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control" id="reset-password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="login-password-confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" class="form-control"
                    id="login-password-confirmation" required>
            </div>

            <!-- Button -->
            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
