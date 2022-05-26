<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     *
     * Este es un seeder, el objetivo de un seeder es crear datos de prueba en la base de datos para trabajar en local, esto se puede hacer con tinker pero se deben agregar los registros uno a uno, con los seeders ya se tendra un codigo preparato para generar datos de prueba.
     * Para ejecutarlo el comando es
     * -php artisan db:seed
     * o para ejecutar tanto el comando migrate:fresh y db:seed se puede usar la bandera --seed:
     * - php artisan migrate:fresh --seed
     * Ademas para crear un seeder el comando es:
     * - php artisan make:seeder NombreSeeder
     * Aqui se deberian llamar las factories para crear datos de prueba
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(CursoSeeder::class); // Llama al seeder CursoSeeder
        Curso::factory(20)->create(); // Utiliza el factory creado para el modelo Curso creando 20 registros
    }
}
