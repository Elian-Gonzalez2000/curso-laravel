<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view("contactanos.index");
    }

    public function store(Request $request ){
        $request->validate([
            "name"=>"required",
            "correo"=>"required | email",
            "mensaje"=>"required",
        ]);

        // Instancia de la clase ContactanosMailable que se le pasa como parametro el contenido de la peticion para que el constructor lo reciba y mande esa informacion al mail
        $correos = new ContactanosMailable($request->all());

        // Funcion que enviara el mail con el contenido de la variable $correos
        Mail::to("eliancarlogm@gmail.com")->send($correos);

    return redirect()->route("contactanos.index")->with("info", "Mensaje enviado");
    // El metodo with("variable", "valor") es para al hacer el redirect pase una variable con contenido a la pagina que se esta redirigiendo, se accede ella llamando a la variable
    }
}
