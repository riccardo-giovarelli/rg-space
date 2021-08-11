<nav class="container-fluid p-3 rg-nav">
    <div class="row align-items-center">
        <!-- Logo -->
        <a class="col-auto navbar-brand" href="{{ route('home') }}">
            <x-application-logo :width="50" :height="50" />
        </a>
        <!-- Navigation Links -->
        <div class="col-auto d-none d-lg-block">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="rg-text-color">
                        {{ __('navigation.app_navigation_home') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="https://www.rgspace.it/blog/" :active="false" class="rg-text-color">
                        {{ __('navigation.app_navigation_blog') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('aboutme')" :active="request()->routeIs('aboutme')" class="rg-text-color">
                        {{ __('navigation.app_navigation_aboutme') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('contactme')" :active="request()->routeIs('contactme')"
                        class="rg-text-color">
                        {{ __('navigation.app_navigation_contactme') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
