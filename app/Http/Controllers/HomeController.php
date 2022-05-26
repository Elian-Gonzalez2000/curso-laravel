<?php

// Para crear controladores se usa el comando php artisan make:controller NombreController desde la terminal
/* Los controladores son clases, primero se deben importar en el archivo deseado con use namespace\NombreClase, para llamarla simplemente NombreClase::class. */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Las funciones dentro de lo controladores no deberian retornar codigo php plano, sino que se deberia llamar a un archivo con codigo HTML, en este caso eso archivos se llaman "vistas".
Estas vistas deben alojarse en la carpeta resource/views/vista.php.
Las vistas para mostrarse se debe retornar en la funcion de la ruta, esto se logra con el metodo view("rutaVista") el cual buscara desde la carpeta view de resource */
class HomeController extends Controller
{
    public function __invoke(){
        return view("home");
    } // Cuando se utiliza __invoke es porque se desea que el controlador administre solo una ruta
}
