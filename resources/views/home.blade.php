@extends('layouts.app')
@section('title', __('CLI+, un equipo de marketing dentro de tu empresa. ¿Quieres conocernos?'))
@section('description', __('Somos una agencia de comunicación y queremos formar parte de tu proyecto. Dinos en qué podemos ayudarte, nos adaptamos a ti y a tu negocio. ¿Y si somos lo que necesitas?'))

@section('content')
<section class="">
    <div class="intro-content full-screen">
        <div class="container">
            <h2><img src="img/comillas.png"><br>@lang('Un equipo de marketing dentro de tu empresa')</h2>
            
        </div>
        <img class="comunicacion" src="img/bg-comunicacion.jpg" alt="">
    </div>
</section>    
<section class="index-container">
    <article class="equipo">
        <div class="container">
            <div class="txt">
                <h2>@lang('¿Y si somos lo que estás buscando?')</h2>
                <h4 class="text-pink">@lang('Expertas digitales, intrépidas comunicadoras').</h4>
                <ul>
                    <li><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
                        @lang(' cercanas')
                    </li>
                    <li><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
                        @lang(' profesionales')
                    </li>
                    <li><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
                        @lang(' creativas')
                    </li>
                    <li><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
                        @lang(' auténticas')
                    </li>
                    <li><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
                        @lang(' sociales')
                    </li>
                    <li><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
                        @lang(' activas')
                    </li>
                </ul>
                <a class="button" href="{{ localized_route('climas') }}">@lang('conócenos')
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
                </a>
            </div>
        </div>
    </article>
    <article class="services bg-blue text-white">
        <div class="container">
            <h2>@lang('¿En qué podemos ayudarte?')</h2>
            <h4>@lang('Construyamos algo juntos')</h4>
            <div class="txt">
                <div class="item">
                    <img class="icon" src="img/icon-web.png" alt="icono diseño y desarollo web">
                    <h3 class="text-pink">@lang('Diseño y desarrollo de páginas web')</h3>
                    <p>@lang('Usabilidad y experiencia de usuario. Técnicas SEO. Diseño responsive.')</p>
                </div>
                <div class="item">
                    <img class="icon" src="img/icon-rrss.png" alt="icono de redes sociales">
                    <h3 class="text-pink">@lang('Gestión de Redes Sociales')</h3>
                    <p>@lang('Creación y gestión de perfiles. Escucha y atención al cliente. Análisis y estadísticas.')</p>
                </div>
                <div class="item">
                    <img class="icon" src="img/icon-branding.png" alt="icono de branding">
                    <h3 class="text-pink">@lang('Branding')</h3>
                    <p>@lang('Identidad visual. Diseño gráfico. Valor de marca. Posicionamiento.') </p>
                </div>
            </div>
            <a class="button-white button" href="{{ localized_route('services') }}">@lang('más servicios')
            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
        </a>
        </div>
        
    </article>
    <article class="contact bg-pink">
        <div class="container">
            
            <div class="txt">
                <h2>@lang('Cuéntanos')</h2>
                <p>@lang('Cuéntanos cómo te ha ido,')<br>@lang('si has conseguido lo que buscabas.')<br>@lang('No te preocupes, estamos aquí para ti.')</p>

                <a class="button" href="{{ localized_route('contact') }}">@lang('Cuéntanos')
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
                </a>
            </div>
            <div class="img">
                <img src="img/cuentanos-img.png">
            </div>
        </div>
    </article>
</section>
<section class="contact-footer">
    <div class="container">
        <div class=" bg-grey">
            <div class="txt">
                <h3>@lang('¿Tomamos un café?')</h3>
                <a href="tel:666 888 999" class="tel">747 425 053</a>
                <a class="link" href="mailto:hola@climascomunicacion.com">hola@climascomunicacion.com</a>
            </div>
            <div class="rrss">
                <ul>
                    <li><a target="_blank" href="https://www.instagram.com/climas_comunicacion/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/climascomunicacion"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a></li>
                    <!--li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg></a></li-->
                </ul>
            </div>
        </div>
    </div>
</section>
<div id="box-cookies" class="bg-yellow">
    <div class="container">
        <h4>@lang('Política de Cookies y Privacidad')</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit fames, porta justo arcu tempus porttitor at nunc tristique hac, purus semper ultricies tempor auctor sed luctus. Nostra et turpis dignissim class metus <a href="#">Política de Cookies</a></p>
        <a class="button" href="#">acepto
            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
        </a>
    </div>
</div>
@endsection

