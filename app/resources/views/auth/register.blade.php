<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo :width="250" height="250" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4 mb-3">
                <label for="login-name" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="login-name" name="name" required autofocus>
            </div>

            <!-- Email Address -->
            <div class="mt-4 mb-3">
                <label for="login-email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="login-email" name="email" required autofocus>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="register-password" class="form-label">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control" id="register-password" required
                    autocomplete="new-password">
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="login-password-confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" class="form-control"
                    id="login-password-confirmation" required>
            </div>


            <div class="row">
                <!-- Already registered -->
                <div class="col-6 text-start">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <!-- Button -->
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
