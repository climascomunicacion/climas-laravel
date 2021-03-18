@extends('layouts.app')
@section('title', __('CLI+ | Contacta con nosotras, queremos ser uno + en tu proyecto'))
@section('description', __('Queremos formar parte de proyecto y ayudarte a conseguir tus objetivos desde el marketing. ¿Quedamos y nos conocemos?'))



@section('content')
     
<!-- intro -->
<section class="intro-content-pages bg-blue">
    <div class="container ">
        <h3 class="text-pink">contacto</h3>
        <h2 class="text-white"> @lang('Escríbenos si quieres saber') <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 177.000000 173.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,173.000000) scale(0.100000,-0.100000)" fill="#ce6a6b" stroke="none"><path d="M727 1705 c-20 -14 -47 -45 -59 -68 -22 -40 -23 -56 -26 -274 l-3 -233 -242 0 c-300 -1 -331 -9 -378 -102 -16 -31 -19 -59 -19 -163 0 -104 3 -132 19 -163 47 -93 78 -101 379 -102 l242 0 0 -300 c0 -216 3 -300 11 -300 6 0 42 11 79 24 100 36 209 56 310 57 l90 1 0 259 0 259 243 0 c300 1 331 9 378 102 16 31 19 59 19 163 0 104 -3 132 -19 163 -47 93 -78 101 -378 102 l-242 0 -3 233 c-3 218 -4 234 -26 274 -12 23 -39 54 -59 68 -35 23 -46 25 -158 25 -112 0 -123 -2 -158 -25z"/></g></svg>
            </h2>
            <img class="bg-mas"
                src="{{ asset('img/bg-mas.png') }}"
                alt="@lang('')" 
                title="@lang('')"
            >
    </div>
</section>   
<!-- CONTENT -->
<section class="services-container">
    <article class="que-necesitas">
        <div class="container">
            <h2>@lang('¿Tomamos un café?')</h2>
            <div class="content">
                <p>@lang('Cuéntanos tu idea, queremos ser uno + en tu proyecto.')</p>
            </div>
        </div>
    </article>
    <article class="form-container bg-pink">
        <div class="container col-umn-2">
            <div class="txt">
                <h4 class="uppercase text-white">@lang('puedes contactar con nosotras en:')</h4>
                <div class="tel-box">
                    <a href="tel:747425053" class="tel">747 425 053</a> <a href="tel:747425054" class="tel">747 425 054</a>
                </div>
                <a class="link" href="mailto:hola@climascomunicacion.com">hola@climascomunicacion.com</a>
                <a target="_blank" class="link-whatsapp" href="https://wa.me/34747425053">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    whatsapp  </a>
            </div>
            <div class="form">
                @if (count($errors) > 0)
    
@endif
                @if(!Session::has('success'))
                <h4 class="uppercase text-white">@lang('Si lo prefieres rellena este formulario:')</h4>
                @endif
                <form method="post" id="formulario-contacto" action="{{ localized_route('contact.save') }}">
                    @csrf
                    @if(!Session::has('success'))
                    <div >
                        <label for="nombre">@lang('Nombre')</label>
                        <input id="nombre" name="nombre" type="text" value="{{ old('nombre') }}" placeholder="nombre" />
                        @if ($errors->has('nombre'))
                        <p class="error">{{ $errors->first('nombre') }}</p>
                        @endif
                    </div>
                    <div >
                        <label for="email">@lang('email')</label>
                        <input id="email" name="email" type="text" value="{{ old('email') }}" placeholder="email" />
                        @if ($errors->has('email'))
                        <p class="error">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="textarea">
                        <label for="comentario">@lang('comentario')</label> 
                        <textarea name="comentario" id="comentario" rows="10">{{ old('comentario') }}</textarea>
                        @if ($errors->has('comentario'))
                        <p class="error">{{ $errors->first('comentario') }}</p>
                        @endif
                    </div>
                    <div class="check">
                        <input id="checkbox" name="checkbox" type="checkbox" value="true"/>
                        <label for="checkbox">@lang('He leído y acepto la') <a target="_blank" href="{{ localized_route('legal') }}" title="@lang('Leer infomración legal')">@lang('información legal')</a>
                        </label>
                        @if ($errors->has('checkbox'))
                        <p class="error">@lang('Es necesario aceptar la información legal')</p>
                        @endif
                    </div>
                    <div class="boton boton-white">
                        <input class=" button-white button bg-pink" type="submit" value="Enviar" id="enviar" name="enviar">
                    </div>
                </button>
                @endif
            </form>
            
            @if(Session::has('success'))
                <div class="success">
                    <p>@lang('Mensaje recibido. Gracias por contactar con nosotras, no tardaremos en responderte &#59;&#41;')</p>
                </div>
            @endif
            </div>
        </div>
    </article>
</section>
   
@endsection

@if ($errors->count() > 0 || Session::has('success') )
    <script>window.location = '#formulario-contacto';</script>
@endif