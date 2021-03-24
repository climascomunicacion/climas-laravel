<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Cookiebot -->
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="bc7641b0-ac83-4a55-bc19-82e91c96ee25" data-blockingmode="auto" type="text/javascript"></script>
    
    
    <script data-cookieconsent="ignore">
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("consent", "default", {
            ad_storage: "denied",
            analytics_storage: "denied",
            wait_for_update: 500
        });
        gtag("set", "ads_data_redaction", true);
    </script>
    <!-- End Cookiebot -->
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W26D78H');</script>
    <!-- End Google Tag Manager -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@hasSection('title') @yield('title') @endif</title>
    <meta name="description" content="@hasSection('description')@yield('description')@endif">

    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link href="{{ asset('css/button-cursor.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XJS20MP8LY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-XJS20MP8LY');
    </script>
@if(Str::contains(Route::currentRouteName(), 'contact'))
<!-- reCAPTCHA -->
{!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
]) !!}
<!-- / reCAPTCHA -->
 @endif    
</head>
    @if($page ?? '' == 'home')
        <body class="home">
    @else
        <body class="climas-page page">
    @endif   
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W26D78H"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    

    <div id="page">
        <svg class="cursor" width="25" height="25" viewBox="0 0 25 25">
            <circle class="cursor__inner" cx="12.5" cy="12.5" r="6.25"></circle>
        </svg> 
        
        @include('partials.navigation')
        @yield('content')
    
    
    @include('partials.footer')
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/emblem.js') }}"></script>
    <script src="{{ asset('js/button-cursor.js') }}"></script>
</body>
</html>