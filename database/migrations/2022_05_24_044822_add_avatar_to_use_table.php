<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * El nombre de la migracion fue para que laravel agregara la mayor cantidad de codigo al crearla.
     * Creo un Schema::table-> este esquema en lugar de crear un tabla como Schema::create este hace una referencia a una tabla que ya existe:
     * Schema::table("nombreTabla", function(Blueprint $table) {
     *  Aqui se pondran los datos que se desean modificar
     * });
     */
    public function up()
    {
        /* Schema::table('users', function (Blueprint $table) {
            $table->string("avatar")->nullable()->change(); // modifica la columna avatar
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
            $table->dropColumn("avatar")->nullable(false)->after("email")->change();
        }); */
    }
}
