<nav class="navbar navbar-expand-lg navbar-light rg-nav">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="col-auto navbar-brand" href="{{ route('home') }}">
            <x-application-logo :width="50" :height="50" />
        </a>
        <button class="navbar-toggler rg-text-color" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="material-icons hb-menu">
                menu
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="rg-text-color {{ request()->routeIs('home') ? 'nav-link disabled text-decoration-underline' : 'nav-link' }}"
                        href="{{ route('home') }}">
                        {{ __('navigation.app_navigation_home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_self" class="rg-text-color nav-link" href="https://www.rgspace.it/blog/">
                        {{ __('navigation.app_navigation_blog') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="rg-text-color {{ request()->routeIs('aboutme') ? 'nav-link disabled text-decoration-underline' : 'nav-link' }}"
                        href="{{ route('aboutme') }}">
                        {{ __('navigation.app_navigation_aboutme') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="rg-text-color {{ request()->routeIs('contactme') ? 'nav-link disabled text-decoration-underline' : 'nav-link' }}"
                        href="{{ route('contactme') }}">
                        {{ __('navigation.app_navigation_contactme') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
