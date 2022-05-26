<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migrations
/* Para crear una migracion se usa el comando:
- php artisan make:migration NombreMigracion
Esta forma es correcta, pero existe una buena practica que es escribir el nombre de la migracion asi:
- php artisan make:migration create_nombre_table
De esta manera laravel creara el archivo pero con los Schemas de la funciones up y down. */

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * En la funcion up() se crean los esquemas con las sintaxis: Schema::create("nombreTabla", function(Blueprint $table){
     * Aqui dentro se definen las columnas de la tabla con la sintaxis de :
     * $table->tipodeCampo()->algunaBandera;
     * });
     */
    public function up()
    {
        Schema::create("cursos", function(Blueprint $table){
            $table->id(); // Crea un dato tipo id incremental dependiendo de lacantidad de registro
            $table->string("name"); // string=varchar(255), como parametro recibe un string que sera el nombre de la columna
            $table->text("description"); //text acepta cualquier cantidad de caracteres, como parametro recibe un string que sera el nombre de la columna
            $table->text("categoria");
            $table->timestamps(); // create_at update_at
        });
    }

    /* Con el comando "php artisan migrate:rollback" se revertira la ultima migracion hecha, el numero de migraciones se puede observar en la tabla migrations column bath, esta columna identifica cuando se hizo la migracion.
    - php artisan migrate:fresh: Este comando ejecutara el drop de cada archivo borrando todas las tablas y luego hara la migracion de cada una de ellas. */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("cursos"); // Eliminar la tabla que coincida con el nombre pasado como parametro
    }
}
