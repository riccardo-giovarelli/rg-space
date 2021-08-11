<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="font-sans antialiased">

    <!-- Loader -->
    <x-bs-loader />

    <div>
        <!-- Page Heading -->
        <header class="bg-white shadow">
            @include('layouts.navigation')
        </header>

        <!-- Page Content -->
        <main>

            <!-- Alert -->
            <div id="alert-container"></div>

            <!-- Main content -->
            {{ $main }}

        </main>

        <!-- Page Footer -->
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
