<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class)->name("cursos.home");
//Route::get('/', "HomeController"): Esta es la manera de llamar a los controladores en laravel 7. El metodo name le agrega un nombre a la ruta, con lo que se evita usar la navegacion normal

Route::get("/cursos", [CursoController::class, "index"])->name("cursos.index");
//Route::get("/cursos", "CursoController@index"): Esta es la manera de llamar a los controladores sin la funcion de no __invoke en laravel 7. El metodo name le agrega un nombre a la ruta, con lo que se evita usar la navegacion normal

Route::get("/cursos/create", [CursoController::class, "create"])->name("cursos.create");

// El expresion Route::post envia datos de manera escondida hacia una url especifica.
Route::post("cursos", [CursoController::class, "store"])->name("cursos.store");

/* Añadiendo {} dentro de la ruta y una variable como parametro en la funcion anonima de la ruta se pueden generar una ruta dinamica. El metodo name le agrega un nombre a la ruta, con lo que se evita usar la navegacion normal */
Route::get("/cursos/{curso}", [CursoController::class, "show"])->name("cursos.show");

Route::get("cursos/{id}/edit", [CursoController::class, "edit"])->name("cursos.edit");

Route::put("cursos/{curso}", [CursoController::class, "update"])->name("cursos.update");

