<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('includes/head')
</head>
<body>
    <div class="website" id="app">
        <div class="container container-wrapper">
            <div class="sidebar">
                @yield('sidebar')
            </div>
            <div class="content content-{{$pageType}}">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Backend Routes -->
    @routes

    @php
        $themeFolder = get_theme_folder();
    @endphp

    <!-- main script -->
    <script src="{{ mix('js/app.js', 'themes/' . $themeFolder) }}"></script>

    <!-- theme's custom js variables -->
    @include('includes/scripts')

    <!-- scripts injected by specific views -->
    @stack('scripts')
    <noscript>Please enable JavaScript to view this website correctly.</noscript>
</body>
</html>
