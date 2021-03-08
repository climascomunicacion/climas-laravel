@extends('layouts.app')
@section('title', __('CLI+ comunicación'))
@section('description', __(''))



@section('content')
     
<section class="services-container">
    <article class="que-necesitas">
        <div class="container">
            <h2>¿Tomamos un café???</h2>
            <div class="content">
                <p>Cuéntanos tu idea, queremos ser uno + en tu proyecto.</p>
            </div>
        </div>
    </article>
    <article class="form-container bg-pink">
        <div class="container col-umn-2">
            <div class="txt">
                <p class="uppercase">puedes contactarnos en:</p>
                <a href="tel:666 888 999" class="tel">747 425 053</a>
                <a class="link" href="mailto:hola@climascomunicacion.com">hola@climascomunicacion.com</a>
                <a class="link-whatsapp" href="#">whatsapp  <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg></a>
            </div>
            <div class="form">
                <p class="uppercase">Si lo prefieres rellena este formulario:</p>
                <form method="post" id="formulario-contacto">
                    <div >
                        <label for="nombre">Nombre</label>
                        <input id="nombre" name="nombre" type="text" value="" placeholder="nombre" />
                        <p class="error">El campo nombre es obligatorio.</p>
                    </div>
                    <div >
                        <label for="email">email</label>
                        <input id="email" name="email" type="text" value="" placeholder="emal" />
                        <p class="error">El campo email es obligatorio.</p>
                    </div>
                    <div class="textarea">
                        <label for="description">comentario</label> 
                        <textarea name="description" id="comentario" rows="10"></textarea>
                        <p class="error">El campo comentario es obligatorio.</p> 
                    </div>
                    <div class="check">
                        <input id="avisoLegal" name="avisoLegal" type="checkbox" value="true" required/>
                        <label for="avisoLegal">He leído y acepto la <a href="#" title="Leer infomración legal">información legal</a>
                        </label>
                        <p class="error">Es necesario aceptar lainformación legal</p>
                    </div>
                    <div class="boton">
                        <input class="button bg-pink" type="submit" value="Enviar" id="enviar" name="enviar">
                    </div>
                </button>
            </form>
            </div>
        </div>
    </article>
</section>
   
@endsection