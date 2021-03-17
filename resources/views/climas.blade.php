@extends('layouts.app')
@section('title', __('CLI+ | Agencia de comunicación digital ¿Quieres conocernos? '))
@section('description', __('Nosotras somos CLI y el + eres tu. Lo nuestro es el marketing, la comunicación y la publicidad y queremos ayudarte a alcanzar los objetivos de tu negocio.'))

@section('content')



<!-- intro -->
<section class="intro-content-pages bg-blue">
    <div class="container ">
        <h3 class="text-pink">cli+</h3>
        <h2 class="text-white"><span class="uppercase">Cli</span> @lang('somos nosotras y el') <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
            @lang('eres tú')</h2>
            <img class="bg-mas"
                src="{{ asset('img/bg-mas.png') }}"
                alt="@lang('más')" 
                title="@lang('más')"
            >
    </div>
</section>   
<!-- CONTENT -->
<section class="index-container">
    <article class="climas-es">
        <div class="container">
            <svg class="climas-ico" version="1.0" xmlns="http://www.w3.org/2000/svg" height="80px" viewBox="0 0 1676.000000 572.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,572.000000) scale(0.100000,-0.100000)" fill="#273157" stroke="none"><path d="M2890 5101 l0 -478 78 -13 c170 -27 390 -106 548 -198 133 -77 237 -156 360 -274 98 -94 103 -98 147 -98 44 0 48 3 345 260 320 277 332 291 316 363 -8 40 -204 238 -349 353 -321 254 -705 437 -1085 518 -104 23 -267 46 -317 46 l-43 0 0 -479z"/> <path d="M2075 5523 c-569 -131 -1129 -503 -1493 -991 -283 -378 -450 -774 -528 -1248 -22 -134 -30 -554 -14 -711 35 -345 119 -636 271 -943 135 -270 278 -474 479 -683 403 -419 895 -680 1464 -778 173 -30 568 -38 756 -15 475 58 948 256 1319 553 117 94 298 268 317 305 19 37 18 117 -3 155 -17 31 -323 313 -467 431 l-69 57 -72 0 c-84 0 -91 -4 -236 -133 -315 -279 -689 -423 -1104 -425 -172 0 -263 10 -419 49 -594 149 -1098 660 -1249 1269 -45 179 -52 241 -52 450 0 214 8 278 55 460 132 504 490 933 963 1155 l117 55 0 498 c0 273 -3 496 -7 496 -5 -1 -17 -3 -28 -6z"/> <path d="M6009 5507 c-18 -12 -44 -38 -56 -56 l-23 -34 0 -968 0 -969 570 0 571 0 -3 968 -3 967 -24 39 c-49 79 -29 76 -542 76 l-456 0 -34 -23z"/> <path d="M10762 5510 c-18 -11 -41 -34 -52 -52 -19 -32 -20 -52 -20 -450 l0 -418 520 0 520 0 0 416 c0 461 0 464 -65 504 -31 19 -49 20 -451 20 -400 0 -420 -1 -452 -20z"/> <path d="M10690 2063 c0 -1974 -8 -1796 80 -1841 44 -22 49 -22 442 -22 431 0 438 1 488 55 l25 27 3 1764 2 1764 -520 0 -520 0 0 -1747z"/> <path d="M5930 1506 l0 -1193 23 -34 c12 -19 42 -44 67 -57 l45 -22 1510 2 c1490 3 1510 3 1543 23 18 11 43 36 55 55 22 34 22 42 22 410 0 368 0 376 -22 410 -12 19 -37 44 -55 55 -32 20 -55 20 -993 25 -1073 6 -988 -1 -1036 77 l-24 38 -3 703 -3 702 -564 0 -565 0 0 -1194z"/> </g> </svg> es 
            <svg class="mas" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
            <span class="typewrite text-blue" data-period="2000" data-type='[ "que una empresa de comunicación", "que marketing digital", "que branding", "que Redes Sociales" ]'>
            <span class="wrap"></span>
          </span>
        </div>
    </article>
    <article class="tips bg-pink">
        <div class="container">
            <div class="info">
                <span class="num">01</span>
                <h3 class="text-blue">@lang('Queremos potenciar tu negocio, juntos')</h3>
                <div class="txt">
                    <p class="text-white">@lang('Lo nuestro es el Marketing Digital, la Comunicación y la Publicidad. Con ganas, pasión y profesionalidad conseguiremos grandes cosas juntos.') </p>
                    <p class="text-white">@lang('Bajo una planificación estratégica y contando con las herramientas necesarias llevaremos a cabo las acciones idóneas para potenciar tu negocio y alcanzar los objetivos marcados.')</p>
                </div>
            </div>
            <div class="info">
                <span class="num">02</span>
                <h3 class="text-blue">@lang('Ser uno + en tu empresa es lo que nos motiva')</h3>
                <div class="txt">
                    <p class="text-white">@lang('Nos gustaría poder ser uno + dentro de tu empresa. Ayudarte y acompañarte en tu camino para conseguir lo que te propongas. Queremos que te despreocupes de lo relacionado con el marketing y puedas dedicarte de lleno a lo que te importa, tu negocio.')</p>
                </div>
            </div>
        </div>
    </article>
    <article class="teams">
        <div class="container">
           <div class="intro">
               <h2>@lang('Equipo')</h2>
               <p>@lang('Trabajo en equipo, pasión, confianza, profesionalidad, transparencia y compromiso son algunas de las palabras que nos definen.')</p>
               <p>@lang('Si quieres conocernos mejor echa un ojo más abajo:')</p>
           </div>
           <div class="components2">
               <div class="item">
                    <img
                        src="{{ asset('img/carla-anon.gif') }}"
                        alt="@lang('Carla Añón forma parte del equipo de CLI+ Comunicación ')" 
                        title="@lang('Carla Añón')"
                    >
                    <div class="txt">
                        <h4>@lang('Carla Añón')</h4>
                        <p>@lang('De pequeña era un hacha en matemáticas. Superwoman que sobrepasa la capacidad humana estándar para el Multitasking. Posee más de 1TB de memoria interna. Birra y queso es su combinación ganadora.')</p>
                    </div>
               </div>
               <div class="item lara">
                    <img
                        src="{{ asset('img/lara-maisueche.gif') }}"
                        alt="@lang('Lara Maisueche forma parte del equipo de CLI+ Comunicación ')" 
                        title="@lang('Lara Maisueche')"
                    >
                    <div class="txt">
                        <h4>@lang('Lara Maisueche')</h4>
                        <p>@lang('Nuestra propia agenda humana, ¡no se le escapa una! Amante de las listas y los hashtags. Alcanza la velocidad del rayo escribiendo, aunque lo haga con un solo dedo. Alma organizadora y promotora del movimiento #marianitotime.')</p>
                    </div>
               </div>
               <div class="item">
                    <img
                        src="{{ asset('img/iulene-miguel.gif') }}"
                        alt="@lang('Iulene Miguel forma parte del equipo de CLI+ Comunicación')" 
                        title="@lang('Iulene Miguel')"
                    >
                    <div class="txt">
                        <h4>@lang('Iulene Miguel')</h4>
                        <p>@lang('La reina del pantone. La frase "quedarse en blanco" no se encuentra dentro de su vocabulario. Con su varita mágica pone color a nuestras ideas.  Constante y madrugadora crosffitter. No se pierde un pintxopote.') </p>
                    </div>
               </div>
           </div>
<!--
           <div class="components">
            <div class="item">
                 <img src="">
                <h4>@lang('Carla Añón')</h4>
                <p>@lang('De pequeña era un hacha en matemáticas. Superwoman que sobrepasa la capacidad humana estándar para el Multitasking. Posee más de 1TB de memoria interna. Birra y queso es su combinación ganadora.')</p>
            </div>
            <div class="item">
                <h4>@lang('Lara Maisueche')</h4>
                <p>@lang('Nuestra propia agenda humana, ¡no se le escapa una! Amante de las listas y los hashtags. Alcanza la velocidad del rayo escribiendo, aunque lo haga con un solo dedo. Alma organizadora y promotora del movimiento #marianitotime.')</p>
            </div>
            <div class="item">
                 <img src="">
                <h4>@lang('Iulene Miguel')</h4>
                <p>@lang('La reina del pantone. La frase "quedarse en blanco" no se encuentra dentro de su vocabulario. Con su varita mágica pone color a nuestras ideas.  Constante y madrugadora crosffitter. No se pierde un pintxopote.') </p>
            </div>
        </div>
    -->
        </div>
    </article>
</section>
<section class="contact-footer">
    <div class="container">
        <div class=" bg-grey">
            <div class="txt">
                <h3>@lang('Queremos conocerte, ponte en contacto con nosotras')</h3>
                <div class="tel-box">
                    <a href="tel:747425053" class="tel">747 425 053</a><span>|</span> <a href="tel:747425054" class="tel">747 425 054</a>
                </div>
                <a class="link" href="mailto:hola@climascomunicacion.com">@lang('hola@climascomunicacion.com')</a>
            </div>
            <div class="rrss">
                <ul>
                    <li><a target="_blank" href="https://www.instagram.com/climas_comunicacion/" title="Síguenos en Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/climascomunicacion" title="Síguenos en Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/climas-comunicacion" title="Síguenos en Linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection