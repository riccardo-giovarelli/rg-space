<div class="card" id="apod">
    <div class="card-header text-center font-size-8">
        <div class="" id="apod_title-left">{{ __('apod.apod_title') }}</div>
        <div class="fs-5 fst-italic" id="apod_title-right"></div>
    </div>
    <a href="" id="apod_image_link" target="_blank">
        <img src="{{ asset('assets/images/misc/loading.gif') }}" class="card-img-top p-2" id="apod_image"
            alt="Astronomy picture of the day" style="max-width: 600px; height: auto;">
        <iframe width="420" height="315" class="card-img-top p-2" id="apod_video" style="display:none;" src=""></iframe>
    </a>
    <div class="text-center"><span class="fst-italic" id="apod_info"></span>
    </div>
    <div class="card-body">
        <div class="accordion" id="accordionApod">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingApod">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseApod" aria-expanded="false" aria-controls="collapseApod">
                        {{ __('apod.apod_explanation') }}
                    </button>
                </h2>
                <div id="collapseApod" class="accordion-collapse collapse" aria-labelledby="headingApod"
                    data-bs-parent="#accordionApod">
                    <div id="apod_description" class="accordion-body">
                        {{ __('apod.apod_loading_label') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
