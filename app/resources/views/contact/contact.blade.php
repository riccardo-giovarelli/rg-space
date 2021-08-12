<x-app-layout>
    <x-slot name="main">
        <div class="container rg-text-color">
            @if (session('success'))
                <div class="row justify-content-center form-feedback">
                    <div class="col mt-3 text-center fs-3">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="row justify-content-center form-feedback">
                    <div class="col mt-3 text-center fs-3">
                        {{ session('error') }}
                    </div>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row mt-5">
                        <h2> {{ __('contactme.contactme_title') }} </h2>
                    </div>
                    <div class="row mt-4">
                        <form action="contact" class="contact-form p-4" method="post" id="contact_form">
                            @csrf
                            <div class="form-group">
                                <label for="name"
                                    class="form-label fs-5">{{ __('contactme.contactme_input_name') }}</label>
                                <input type="text" class="form-control contact-form-input" required id="name"
                                    name="name">
                            </div>
                            <div class="form-group mt-4">
                                <label for="email"
                                    class="form-label fs-5">{{ __('contactme.contactme_input_email') }}</label>
                                <input type="email" class="form-control contact-form-input" required id="email"
                                    name="email" placeholder="name@example.com">
                            </div>
                            <div class="form-group mt-4">
                                <label for="subject"
                                    class="form-label fs-5">{{ __('contactme.contactme_input_subject') }}</label>
                                <input type="text" class="form-control contact-form-input" id="subject" name="subject">
                            </div>
                            <div class="form-group mt-4">
                                <label for="message"
                                    class="form-label fs-5">{{ __('contactme.contactme_input_message') }}</label>
                                <textarea class="form-control contact-form-input" required id="message" name="message"
                                    rows="4"></textarea>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-outline-primary g-recaptcha"
                                    data-sitekey="{{ env('RECAPTCHA_SITE_KEY', '') }}" data-callback="onSubmit"
                                    data-action="submit">{{ __('contactme.contactme_submit_button') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
