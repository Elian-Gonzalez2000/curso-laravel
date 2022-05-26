<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelos en eloquent ORM
/* El comando para crear un modelo es:
- php artisan make:model Nombre
La convencion para escribir los nombres es crear el modelo en singular y el nombre de la tabla en plural, con esto eloquent hara una relacion automaticamente. */

/* Para usar tinker el comando es php artisan tinker y para salir hay que colocar exit.
Para crear un nuevo registro usando tinker primero se debe crear un nuevo objeto de la clase que se desee usar, esto se logra de manera similar a como se llama archivos en las rutas: con use namespace/archivo.
Luego hay que crear una instancia del modelo que se desea utilizar, ej: $curso = new Curso;
Luego se pueden ir insertando propiedades.
Para guardarlas en la BBDD se debe usar el metodo save() de las instancia del modelo, ej: $curso->save(); */

// Que extiendo de la clase model permite poder acceder a todos los metodos necesarios para usar la base de datos, con update e insert por ejemplo
class Curso extends Model
{
    use HasFactory;

    //protected $table = "users"; // Define la tabla a la que modificara datos (con esto ignora la convención).
}

// Adquiriendo informacion con eloquent
/* Desde tinker se puede obtener la informacion con la sintaxis:
    - $variable = Model::all(): Obtiene todos los registros de la BBDD en manera de lista de objetos.
    - $variable = Model::where("column", "termino"): Esto no devuelve una lista de objetos, para que devuelva una lista de objetos con todos los registros que tienen column="termino" se de usar el metodo get().
    - $variable = Model::where("column", "termino")->get(): Devuelve la lista de objetos.
    - $variable = Model::where("column", "termino")->orderBy("column", "desc || asc")->get(): Trae todos los registros que machen con la clausula where pero en orden descendiente con respecto a la column (ascendente por defecto).
    - $variable = Curso::select("campo", "campo")->get(): La clausula select devuelve todos los registros pero con solo los campos especificados como parametros.
    - $variable = Model::select("name as title", "campo")->get(): cuando se usa destro del select "campo as algo" cuando traiga el registro cambiara el nombre de la columna.
    - $variable = Model::select("campo", "campo")->take(cantidad)->get(): El metodo take() indica el numero especifico de registros que se desean traer.
    -- first(): El metodo first() indica que solo se traera el primer registro encontrado.
    - $variable = Model::find(id): El metodo find permite encontrar un registro con un id especifico, lo mismo se puede hacer con where("id", "valor") pero con find() es mas comodo.
    -- where("campo", "operador", "valor"): La clausula where pasandole tres parametros se pueden buscar registros dependiendo de una condicion ej: where("id", "<=", "12").
    -- where("campo", "like", "% palabra %"): Si se desea buscar un registro que machee con una palabra se puede utilizar la palabra "like" de segundo parametro, los % indican que la palabra a buscar puede tener algo adelante o atras. */

