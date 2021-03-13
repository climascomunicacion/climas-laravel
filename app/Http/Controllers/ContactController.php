<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;

class ContactController extends Controller
{

  public function showForm(Request $request) {
    return view('contact');
  }

  public function storeForm(Request $request) {
      $this->validate($request, [
        'nombre' => 'required',
        'email' => 'required|email',
        'comentario' => 'required',
        'checkbox' =>'accepted'
     ]);

     ContactUs::create($request->all());

    \Mail::send('email', array(
        'nombre' => $request->get('nombre'),
        'email' => $request->get('email'),
        'comentario' => $request->get('comentario'),
    ), function($message) use ($request){
        $message->from('contactoweb@climascomunicacion.com');
        $message->to('jon.echeverria@gmail.com', 'Climas comuniación')->subject('Mensaje de contacto desde climascomunicacion.com'); //contactoweb@climascomunicacion.com
    });

    return back()->with('success', 'Gracias por ponerse en contacto.');
  }

}