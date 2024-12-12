<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HOHEYA</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('assets/img/kaiadmin/H_favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
</head>

<body>
    <div class="wrapper">

        {{-- sidebar --}}
        @include('etudiant.partials.sidebar')
        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    @include('etudiant.partials.logo-header')
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                @include('etudiant.partials.navbar')
                <!-- End Navbar -->
            </div>

            {{-- container --}}
            @yield('content')

            {{-- footer --}}
            @include('etudiant.partials.footer')
        </div>

        <!-- Custom template | don't include it in your project! -->
        @include('etudiant.partials.custom')
        <!-- End Custom template -->
    </div>

    {{-- scripts --}}
    @include('etudiant.partials.scripts')
</body>

</html>
