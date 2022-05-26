<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePropertiesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Para cambiar un columna primero se instala una dependencia, ver en la documentacion, luego la sintaxis para cambiar los datos que aceptan las columnas es:
     * $table->tipoDato("nombreColumn", cuantity)->change();
     */
    public function up()
    {
        /* Schema::table('users', function (Blueprint $table) {
            $table->string("name", 50)->nullable()->change();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::table('users', function (Blueprint $table) {
            $table->string("name", 255)->nullable(false)->change);
        }); */
    }
}
