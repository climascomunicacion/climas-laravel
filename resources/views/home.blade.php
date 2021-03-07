@extends('layouts.app')
@section('title', __('CLI+ comunicación'))
@section('description', __(''))

@section('content')
     
<section class="index-container">
    <article class="equipo">
        <div class="container">
            <div class="txt">
                <h2>@lang('¿Y si somos lo que estás buscando?')</h2>
                <h4 class="text-pink">@lang('Expertas digitales, intrépidas comunicadoras').</h4>
                <ul>
                    <li>@lang('+ cercanas')</li>
                    <li>@lang('+ profesionales')</li>
                    <li>@lang('+ creativas')</li>
                    <li>@lang('+ auténticas')</li>
                    <li>@lang('+ sociales')</li>
                    <li>@lang('+ activas')</li>
                </ul>
                <a class="button" href="climas.php">@lang('conócenos')
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
            <a class="button-white button" href="services.php">@lang('más servicios')
            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
        </a>
        </div>
        
    </article>
    <article class="contact bg-pink">
        <div class="container">
            
            <div class="txt">
                <h2>@lang('Cuéntanos')</h2>
                <p>@lang('Cuéntanos cómo te ha ido')<br>@lang('Si has conseguido lo que buscabas.')<br>@lang('No te preocupes, estamos aquí para ti.')</p>

                <a class="button" href="contact.php">@lang('Cuéntanos')
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
                </a>
            </div>
            <div class="img">
                <img src="img/cuentanos-img.png">
            </div>
        </div>
    </article>
</section>
   
@endsection