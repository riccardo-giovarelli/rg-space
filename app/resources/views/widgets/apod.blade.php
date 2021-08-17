<div class="apod__container p-3" id="apod" data-route="{{ route('getapod') }}">
    <div class="apod__header">
        <h2 class="apod__title-left pb-1 fs-1 text-center" id="apod_title-left">{{ __('apod.apod_title') }}</h2>
        <h3 class="apod__title-right mt-3 fs-3 text-center" id="apod_title-right"></h3>
    </div>
    <a class="apod__image-link" href="" id="apod_image_link" target="_blank">
        <img class="apod__image card-img-top p-2" id="apod_image" src="{{ asset('assets/images/misc/loading.gif') }}"
            alt="Astronomy picture of the day">
        <iframe class="apod__iframe card-img-top p-2" id="apod_video" src=""></iframe>
    </a>
    <div class="apod__info-container text-center">
        <span class="apod__info fst-italic" id="apod_info"></span>
    </div>

    <div class="apod__explanation-container mt-4">
        <h3 class="apod__explanation-title fs-4 text-center mt-2">{{ __('apod.apod_explanation') }}</h3>
        <div class="apod__explanation-text" id="apod_description">{{ __('apod.apod_loading_label') }}</div>
    </div>
</div>
