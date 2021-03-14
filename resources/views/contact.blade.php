@extends('layouts.app')
@section('title', __('¿Tomamos un café? Contacta con nosotras, queremos ser uno + en tu proyecto'))
@section('description', __('Queremos formar parte de proyecto y ayudarte a conseguir tus objetivos desde el marketing. ¿Quedamos y nos conocemos?'))



@section('content')
     
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
                <p class="uppercase">@lang('puedes contactarnos en:')</p>
                <a href="tel:666 888 999" class="tel">747 425 053</a>
                <a class="link" href="mailto:hola@climascomunicacion.com">hola@climascomunicacion.com</a>
                <a class="link-whatsapp" href="https://wa.me/34747425053">whatsapp  <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg></a>
            </div>
            <div class="form">
                <p class="uppercase">@lang('Si lo prefieres rellena este formulario:')</p>
                <form method="post" id="formulario-contacto" action="{{ localized_route('contact.save') }}">
                    @csrf
                    <div >
                        <label for="nombre">@lang('Nombre')</label>
                        <input id="nombre" name="nombre" type="text" value="" placeholder="nombre" />
                        @if ($errors->has('nombre'))
                        <p class="error">@lang('El campo nombre es obligatorio.')</p>
                        @endif
                    </div>
                    <div >
                        <label for="email">@lang('email')</label>
                        <input id="email" name="email" type="text" value="" placeholder="emal" />
                        @if ($errors->has('email'))
                        <p class="error">@lang('El campo email es obligatorio.')</p>
                        @endif
                    </div>
                    <div class="textarea">
                        <label for="comentario">@lang('comentario')</label> 
                        <textarea name="comentario" id="comentario" rows="10"></textarea>
                        @if ($errors->has('comentario'))
                        <p class="error">@lang('El campo comentario es obligatorio.')</p>
                        @endif
                    </div>
                    <div class="check">
                        <input id="checkbox" name="checkbox" type="checkbox" value="true"/>
                        <label for="checkbox">@lang('He leído y acepto la') <a href="{{ localized_route('legal') }}" title="@lang('Leer infomración legal')">@lang('información legal')</a>
                        </label>
                        @if ($errors->has('checkbox'))
                        <p class="error">@lang('Es necesario aceptar lainformación legal')</p>
                        @endif
                    </div>
                    <div class="boton">
                        <input class="button bg-pink" type="submit" value="Enviar" id="enviar" name="enviar">
                    </div>
                </button>
            </form>
            @if(Session::has('success'))
                <div class="success">
                    <p>@lang('Hemos recibido tu mensaje, en breve nos pondremos en contacto contigo')</p>
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