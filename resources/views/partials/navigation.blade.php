
    @if($page ?? '' == 'home' || '404')
        <section class="intro-home">
        <div class="navigation">
            
    @else
        <section class="intro">
        <div class="navigation navigation-white">
    @endif


    <div class="container">
        <div class="logo">
            <a class="h1" href="{{ localized_route('/') }}">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100px" height="65px" viewBox="0 0 1676.000000 572.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,572.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M2890 5101 l0 -478 78 -13 c170 -27 390 -106 548 -198 133 -77 237 -156 360 -274 98 -94 103 -98 147 -98 44 0 48 3 345 260 320 277 332 291 316 363 -8 40 -204 238 -349 353 -321 254 -705 437 -1085 518 -104 23 -267 46 -317 46 l-43 0 0 -479z"></path> <path d="M2075 5523 c-569 -131 -1129 -503 -1493 -991 -283 -378 -450 -774 -528 -1248 -22 -134 -30 -554 -14 -711 35 -345 119 -636 271 -943 135 -270 278 -474 479 -683 403 -419 895 -680 1464 -778 173 -30 568 -38 756 -15 475 58 948 256 1319 553 117 94 298 268 317 305 19 37 18 117 -3 155 -17 31 -323 313 -467 431 l-69 57 -72 0 c-84 0 -91 -4 -236 -133 -315 -279 -689 -423 -1104 -425 -172 0 -263 10 -419 49 -594 149 -1098 660 -1249 1269 -45 179 -52 241 -52 450 0 214 8 278 55 460 132 504 490 933 963 1155 l117 55 0 498 c0 273 -3 496 -7 496 -5 -1 -17 -3 -28 -6z"></path> <path d="M6009 5507 c-18 -12 -44 -38 -56 -56 l-23 -34 0 -968 0 -969 570 0 571 0 -3 968 -3 967 -24 39 c-49 79 -29 76 -542 76 l-456 0 -34 -23z"></path> <path d="M10762 5510 c-18 -11 -41 -34 -52 -52 -19 -32 -20 -52 -20 -450 l0 -418 520 0 520 0 0 416 c0 461 0 464 -65 504 -31 19 -49 20 -451 20 -400 0 -420 -1 -452 -20z"></path> <path d="M15105 4641 c-56 -14 -112 -50 -153 -96 -70 -80 -72 -93 -72 -487 l0 -348 -415 0 c-388 0 -418 -1 -467 -20 -70 -26 -117 -66 -153 -131 -29 -53 -30 -57 -33 -221 -3 -130 0 -179 12 -221 21 -71 87 -146 158 -178 53 -24 55 -24 476 -27 l422 -3 0 -458 0 -459 111 39 c169 60 326 89 517 96 l162 6 0 388 0 388 423 3 c405 3 424 4 468 24 64 30 114 77 143 136 25 50 26 58 26 237 0 174 -2 189 -24 236 -13 29 -44 69 -71 93 -80 70 -93 72 -556 72 l-408 0 -3 358 -3 357 -28 57 c-32 64 -80 111 -146 142 -40 18 -68 21 -201 23 -85 1 -168 -2 -185 -6z"></path> <path d="M10690 2063 c0 -1974 -8 -1796 80 -1841 44 -22 49 -22 442 -22 431 0 438 1 488 55 l25 27 3 1764 2 1764 -520 0 -520 0 0 -1747z"></path> <path d="M5930 1506 l0 -1193 23 -34 c12 -19 42 -44 67 -57 l45 -22 1510 2 c1490 3 1510 3 1543 23 18 11 43 36 55 55 22 34 22 42 22 410 0 368 0 376 -22 410 -12 19 -37 44 -55 55 -32 20 -55 20 -993 25 -1073 6 -988 -1 -1036 77 l-24 38 -3 703 -3 702 -564 0 -565 0 0 -1194z"></path> </g> </svg>
            </a>
        </div>
        <div class="container-menu">
            <nav>
              
                <ul class="menu">
                    <li><a class="@if (Str::contains(Route::currentRouteName(), '/')) active @endif" href="{{ localized_route('/') }}">@lang('inicio')</a></li>
                    <li><a class="@if (Str::contains(Route::currentRouteName(), 'agencia')) active @endif" href="{{ localized_route('agencia') }}">@lang('cli +')</a></li>
                    <li><a class="@if (Str::contains(Route::currentRouteName(), 'services')) active @endif" href="{{ localized_route('services') }}">@lang('servicios')</a></li>
                    <li><a class="@if (Str::contains(Route::currentRouteName(), 'contact')) active @endif" href="{{ localized_route('contact') }}">@lang('contacto')</a></li>
                  </ul>
                  <ul class="lang">
                    <li><a href="{{ localized_route(substr(Route::currentRouteName(), 3), [], 'es') }}" class="">ES</a></li>
                    <li><a href="{{ localized_route(substr(Route::currentRouteName(), 3), [], 'eu') }}" class="">EU</a></li>
                  </ul>
            </nav>
        </div>
        
        <div class="navigation-hamburguesa ">
            <input type="checkbox" id="myInput">
            <label for="myInput">
              <span class="bar top"></span>
              <span class="bar middle"></span>
              <span class="bar bottom"></span>
            </label>
            <aside>
            <div class="aside-section aside-left">
              <div class="aside-content">
                <a href="{{ localized_route('/') }}">
                <h1><span></span><svg fill="#273157" version="1.0" xmlns="http://www.w3.org/2000/svg" width="100px" height="65px" viewBox="0 0 1676.000000 572.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,572.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M2890 5101 l0 -478 78 -13 c170 -27 390 -106 548 -198 133 -77 237 -156 360 -274 98 -94 103 -98 147 -98 44 0 48 3 345 260 320 277 332 291 316 363 -8 40 -204 238 -349 353 -321 254 -705 437 -1085 518 -104 23 -267 46 -317 46 l-43 0 0 -479z"></path> <path d="M2075 5523 c-569 -131 -1129 -503 -1493 -991 -283 -378 -450 -774 -528 -1248 -22 -134 -30 -554 -14 -711 35 -345 119 -636 271 -943 135 -270 278 -474 479 -683 403 -419 895 -680 1464 -778 173 -30 568 -38 756 -15 475 58 948 256 1319 553 117 94 298 268 317 305 19 37 18 117 -3 155 -17 31 -323 313 -467 431 l-69 57 -72 0 c-84 0 -91 -4 -236 -133 -315 -279 -689 -423 -1104 -425 -172 0 -263 10 -419 49 -594 149 -1098 660 -1249 1269 -45 179 -52 241 -52 450 0 214 8 278 55 460 132 504 490 933 963 1155 l117 55 0 498 c0 273 -3 496 -7 496 -5 -1 -17 -3 -28 -6z"></path> <path d="M6009 5507 c-18 -12 -44 -38 -56 -56 l-23 -34 0 -968 0 -969 570 0 571 0 -3 968 -3 967 -24 39 c-49 79 -29 76 -542 76 l-456 0 -34 -23z"></path> <path d="M10762 5510 c-18 -11 -41 -34 -52 -52 -19 -32 -20 -52 -20 -450 l0 -418 520 0 520 0 0 416 c0 461 0 464 -65 504 -31 19 -49 20 -451 20 -400 0 -420 -1 -452 -20z"></path> <path d="M15105 4641 c-56 -14 -112 -50 -153 -96 -70 -80 -72 -93 -72 -487 l0 -348 -415 0 c-388 0 -418 -1 -467 -20 -70 -26 -117 -66 -153 -131 -29 -53 -30 -57 -33 -221 -3 -130 0 -179 12 -221 21 -71 87 -146 158 -178 53 -24 55 -24 476 -27 l422 -3 0 -458 0 -459 111 39 c169 60 326 89 517 96 l162 6 0 388 0 388 423 3 c405 3 424 4 468 24 64 30 114 77 143 136 25 50 26 58 26 237 0 174 -2 189 -24 236 -13 29 -44 69 -71 93 -80 70 -93 72 -556 72 l-408 0 -3 358 -3 357 -28 57 c-32 64 -80 111 -146 142 -40 18 -68 21 -201 23 -85 1 -168 -2 -185 -6z"></path> <path d="M10690 2063 c0 -1974 -8 -1796 80 -1841 44 -22 49 -22 442 -22 431 0 438 1 488 55 l25 27 3 1764 2 1764 -520 0 -520 0 0 -1747z"></path> <path d="M5930 1506 l0 -1193 23 -34 c12 -19 42 -44 67 -57 l45 -22 1510 2 c1490 3 1510 3 1543 23 18 11 43 36 55 55 22 34 22 42 22 410 0 368 0 376 -22 410 -12 19 -37 44 -55 55 -32 20 -55 20 -993 25 -1073 6 -988 -1 -1036 77 l-24 38 -3 703 -3 702 -564 0 -565 0 0 -1194z"></path> </g> </svg> </h1>
            </a>
              </div>
            </div>
            <div class="aside-section aside-right">
              <ul class="aside-list">
                <li><a class="@if (Str::contains(Route::currentRouteName(), '/')) active @endif" href="{{ localized_route('/') }}">@lang('inicio')</a></li>
                <li><a class="@if (Str::contains(Route::currentRouteName(), 'agencia')) active @endif" href="{{ localized_route('agencia') }}">@lang('cli +')</a></li>
                <li><a class="@if (Str::contains(Route::currentRouteName(), 'services')) active @endif" href="{{ localized_route('services') }}">@lang('servicios')</a></li>
                <li><a class="@if (Str::contains(Route::currentRouteName(), 'contact')) active @endif" href="{{ localized_route('contact') }}">@lang('contacto')</a></li>
                <li><a href="{{ localized_route(substr(Route::currentRouteName(), 3), [], 'es') }}" class>ES</a></li>
                    <li><a href="{{ localized_route(substr(Route::currentRouteName(), 3), [], 'eu') }}" class>EU</a></li>
              </ul>
            </div>

          </aside>
        </div>
    </div>
</div>
</section>