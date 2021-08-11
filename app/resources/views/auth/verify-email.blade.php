<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo :width="250" height="250" />
            </a>
        </x-slot>

        <div class="mt-4 mb-4">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mt-4 mb-4">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="row">
            <div class="col-6 text-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('Resend Verification Email') }}</button>
                </form>
            </div>
            <div class="col-6 text-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('Log Out') }}</button>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
