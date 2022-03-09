<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="/vendor_assets/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="/vendor_assets/css/animate.css">
        <link rel="stylesheet" href="/vendor_assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/vendor_assets/css/jquery-ui.css">
        <link rel="stylesheet" href="/vendor_assets/css/line-awesome.min.css">
        <link rel="stylesheet" href="/vendor_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/vendor_assets/css/owl.carousel.css">
        <link rel="stylesheet" href="/vendor_assets/css/select2.min.css">
        <link rel="stylesheet" href="/vendor_assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="/vendor_assets/css/slick.css">
        <link rel="stylesheet" href="/vendor_assets/css/trumbowyg.min.css">
        <link rel="stylesheet" href="/vendor_assets/css/venobox.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/styles.css') }}">

        @routes
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js" defer></script>
        <script src="/vendor_assets/js/bootstrap/bootstrap.min.js" defer></script>
        <script src="/vendor_assets/js/bootstrap/popper.js" defer></script>
        <script src="/vendor_assets/js/jquery/jquery-1.12.4.min.js" defer></script>
        <script src="/vendor_assets/js/jquery/uikit.min.js" defer></script>
        <script src="/vendor_assets/js/chart.bundle.min.js" defer></script>
        <script src="/vendor_assets/js/grid.min.js" defer></script>
        <script src="/vendor_assets/js/jquery-ui.min.js" defer></script>
        <script src="/vendor_assets/js/jquery.barrating.min.js" defer></script>
        <script src="/vendor_assets/js/jquery.countdown.min.js" defer></script>
        <script src="/vendor_assets/js/jquery.counterup.min.js" defer></script>
        <script src="/vendor_assets/js/jquery.easing1.3.js" defer></script>
        <script src="/vendor_assets/js/jquery.magnific-popup.min.js" defer></script>
        <script src="/vendor_assets/js/owl.carousel.min.js" defer></script>
        <script src="/vendor_assets/js/select2.full.min.js" defer></script>
        <script src="/vendor_assets/js/slick.min.js" defer></script>
        <script src="/vendor_assets/js/tether.min.js" defer></script>
        <script src="/vendor_assets/js/trumbowyg.min.js" defer></script>
        <script src="/vendor_assets/js/venobox.min.js" defer></script>
        <script src="/vendor_assets/js/waypoints.min.js" defer></script>
        <script src="/theme_assets/js/dashboard.js" defer></script>
        <script src="/theme_assets/js/main.js" defer></script>
        <script src="/theme_assets/js/map.js" defer></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-light">
        @inertia
    </body>
</html>
