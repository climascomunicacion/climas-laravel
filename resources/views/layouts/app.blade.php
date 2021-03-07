<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@hasSection('title') @yield('title') @endif</title>
    <meta name="description" content="@hasSection('description')@yield('description')@endif">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/button-cursor.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>
    @if($page ?? '' == 'home')
        <body class="home">
    @else
        <body class="climas-page page">
    @endif   
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX"
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
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/emblem.js') }}"></script>
    <script src="{{ asset('js/button-cursor.js') }}"></script>
</body>
</html>