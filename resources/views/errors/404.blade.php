@extends('layouts.app')
@section('title', __('CLI+ comunicación'))
@section('description', __(''))



@section('content')
    

<!-- CONTENT -->
<section class="page-404">
    <article>
        <div class="container ">
        	<img src="img/404.gif">
            <div class="txt">
                <h2>Upsss</h2>
                <p>Que no panda el cúnico. Pincha abajo y vuelves con nosotras en un periquete.</p>
                <a class="button" href="{{ localized_route('/') }}">inicio<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg></a>
            </div>
        </div>
    </article>
</section>
   
@endsection