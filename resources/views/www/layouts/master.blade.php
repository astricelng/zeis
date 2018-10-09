<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- PAGE META DATA -->
        <meta name="author" property="author" content="Zeis Producciones" />
        <meta name="google-site-verification" content="6wy55gbZGWpDzs1KCxtFKrBJNDLrfcl3vWbYka5Nap4" />


        @stack('meta-data')

        <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->

        <!-- END PAGE META DATA -->

        <!-- STYLES -->
        <link href="{{ asset('/assets/www/css/app.css') }}" rel="stylesheet">

        @stack('styles')

        <!-- FAVICON -->
        {{--<link rel="shortcut icon" href="favicon.ico" />--}}

    </head>

    <!-- Remove 'loading' class on finish loading -->
    <body class="">
        <div id="app" class="global-container">

            <!-- PRELOADER -->

            <div class="page-container">

                @yield('content')



            </div>

        </div>

        <!-- COMPATIBILITY SCRIPTS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- SCRIPTS -->
        {{--<script type="text/javascript" src="{{ asset('/assets/www/js/manifest.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/www/js/vendor.js') }}"></script>--}}
        <script src="{{ asset('/'.app()->getLocale().'/js/lang-'.app()->getLocale().'.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/www/js/SmoothScroll.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('/assets/www/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/www/js/main.js') }}"></script>

        

        @stack('scripts')

    </body>

</html>