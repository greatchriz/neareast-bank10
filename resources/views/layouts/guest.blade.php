{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/findash/html-dark/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 18:23:52 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FinDash - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/dash/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/dash/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/dash/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/dash/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/dash/css/responsive.css">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center bg-primary rounded">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/dash/js/jquery.min.js"></script>
    <script src="/dash/js/popper.min.js"></script>
    <script src="/dash/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="/dash/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="/dash/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="/dash/js/waypoints.min.js"></script>
    <script src="/dash/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="/dash/js/wow.min.js"></script>
    <!-- lottie JavaScript -->
    <script src="/dash/js/lottie.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="/dash/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="/dash/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="/dash/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="/dash/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="/dash/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="/dash/js/smooth-scrollbar.js"></script>
    <!-- Style Customizer -->
    <script src="/dash/js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="/dash/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="/dash/js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/findash/html-dark/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 18:23:52 GMT -->

</html>
