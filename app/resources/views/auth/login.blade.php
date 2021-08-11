<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo :width="250" height="250" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mt-4 mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mt-4 mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="login-email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="login-email" name="email" required autofocus>
            </div>


            <!-- Password -->
            <div class="mb-3">
                <label for="login-password" class="form-label">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control" id="login-password" required
                    autocomplete="current-password">
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" id="login-checkbox" name="remember">
                <label class="form-check-label" for="exampleCheck1">{{ __('Remember me') }}</label>
            </div>

            <div class="row">
                <!-- Forgot password -->
                <div class="col-6">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <!-- Button -->
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
