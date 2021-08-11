<x-app-layout>
    <x-slot name="main">
        <div class="container mt-4 mb-5 rg-text-color ">
            <div class="row mt-4 justify-content-center">
                <div class="col-10">
                    <div class="container">
                        <div class="row pt-2 pb-4 fs-1">
                            {{ __('aboutme.aboutme_title') }}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/me/me_00.jpg') }}"
                                    class="img-fluid w-100 border rounded rounded-lg"
                                    alt="Riccardo Giovarelli - {{ __('aboutme.picture') }}">
                            </div>
                            <div class="col-md-6 fs-4">
                                <p class="text-start aboutme-text font-size-10">{{ __('aboutme.aboutme_text') }}</p>
                                <p class="text-start aboutme-text font-size-10">{{ __('aboutme.contactme_text') }}
                                    <a class="rg-text-color"
                                        href="{{ action([App\Http\Controllers\ContactController::class, 'contactShow']) }}">
                                        {{ __('aboutme.contactme_button') }}</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
