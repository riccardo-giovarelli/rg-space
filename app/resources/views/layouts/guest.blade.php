<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="font-sans antialiased">
    <main>
        {{ $slot }}
    </main>
    <!-- Page Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</body>

</html>
