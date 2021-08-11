<nav class="container-fluid p-3">
    <div class="row align-items-center">
        <!-- Logo -->
        <a class="col-auto navbar-brand" href="{{ route('home') }}">
            <x-application-logo :width="50" :height="50" />
        </a>
        <!-- Navigation Links -->
        <div class="col-auto d-none d-lg-block">
            <ul class="nav nav-pills">
                <li class="nav-item">

                    <a class="nav-link" href="https://www.rgspace.it/blog/">
                        {{ __('navigation.app_navigation_blog') }}
                    </a>

                </li>
                <?php /*
                                                <li class="nav-item">
                                                    <x-nav-link :href="route('search')" :active="request()->routeIs('search')">
                                                        {{ __('navigation.app_navigation_cerca') }}
                                                    </x-nav-link>
                                                </li>

                                                */
                ?>
            </ul>
        </div>
    </div>
</nav>
