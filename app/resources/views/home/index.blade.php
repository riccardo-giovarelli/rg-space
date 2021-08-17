<x-app-layout>
    <x-slot name="main">
        <div class="container mt-4 mb-5">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-xs-8 mt-5">
                    @include('widgets.apod')
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
