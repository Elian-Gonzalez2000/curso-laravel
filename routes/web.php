<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return "<h1>Pagina principal</h1>";
});
*/

/* Las rutas en Laravel se leen de arriba hacia abajo, asi que el orden en el que se colocan las rutas importa (similar a react) */
// Para crear controladores se usa el comando php artisan make:controller NombreController

Route::get('/', HomeController::class)->name("home");
//Route::get('/', "HomeController"): Esta es la manera de llamar a los controladores en laravel 7. El metodo name le agrega un nombre a la ruta, con lo que se evita usar la navegacion normal

//Route::get("/cursos", [CursoController::class, "index"])->name("cursos.index");
//Route::get("/cursos", "CursoController@index"): Esta es la manera de llamar a los controladores sin la funcion de no __invoke en laravel 7. El metodo name le agrega un nombre a la ruta, con lo que se evita usar la navegacion normal

//Route::get("/cursos/create", [CursoController::class, "create"])->name("cursos.create");

// El expresion Route::post envia datos de manera escondida hacia una url especifica.
//Route::post("cursos", [CursoController::class, "store"])->name("cursos.store");

/* Añadiendo {} dentro de la ruta y una variable como parametro en la funcion anonima de la ruta se pueden generar una ruta dinamica. El metodo name le agrega un nombre a la ruta, con lo que se evita usar la navegacion normal */
//Route::get("/cursos/{curso}", [CursoController::class, "show"])->name("cursos.show");

//Route::get("cursos/{id}/edit", [CursoController::class, "edit"])->name("cursos.edit");

//Route::put("cursos/{curso}", [CursoController::class, "update"])->name("cursos.update");

//Route::delete("cursos/{curso}", [CursoController::class, "destroy"])->name('cursos.destroy');

// Route::resource permite mejorar el codigo a la hora de escribir rutas, este metodo se aprovecha mucho de las convencianes para definir cuales varibles y rutas mostrar, lo mas importante es que permite hacer cambios drasticos a la estructura de rutas de la aplicacion sin muchas complicaciones.
Route::resource("cursos", CursoController::class)->parameters(["cursos" =>"cursos"])->names("cursos");
// El metodo names establece los nombres que se quieran especificar para que trabaje la aplicacion, pero en el cliente se mostrara en la url lo que se haya pasado como primer parametro a resource.
// El metodo parameters recibe un array y establece que palabra es la que se usara para las variables en las funciones controladoras

Route::view('nosotros', 'nosotros')->name('nosotros');

// Entrando a esta ruta se podran enviar correos electronidos, pero primero se necesita configurar laravel colocando los datos correctos en el .env y crear un archivo mail con el comando: php artisan make:mail ContactanosMailable
Route::get("contactanos", [ContactanosController::class, "index"])->name("contactanos.index");

Route::post("contactanos", [ContactanosController::class, "store"])->name("contactanos.store");
