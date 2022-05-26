<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * Este es otro archivo seeder, para crear un archivo seeder el comando es:
     * - php artisan make:seeder NombreSeeder
     * Sin embargo el comando para correr los seeders:
     * - php artisan db:seed
     * Solamente correra el archivo DatabaseSeeder.php, por lo que desde ese archivo hay que llamar los demas seeders para que se ejecuten.
     * NOTA: Ya no es necesario crear seeder gracias a que las factories solo requieren una linea de codigo para ejecutarse, de esta no es necesario crear seeder.
     */
    public function run()
    {
        //
        // Colocar el mismo codigo que en tinker para añadir registros
        //Curso::factory(20)->create(); // Utiliza el factory del modelo Curso
    }
}
