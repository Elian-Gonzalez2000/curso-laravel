<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     * Las factories son para generar datos de prueba automaticamente sin la necesidad de definir cada registro en un seeder. El comando para crear archivos:
     * - php artisan make:factory NombreFactory
     */
    protected $model = Curso::class;
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            "name" => $name, // Crea una sentencia para el campo "name"
            "slug" => Str::slug($name, "-"), // Str::slug es un helper, buscarlos en documentacion
            "description" => $this->faker->paragraph(), // Crea un parrafo para el campo "description"
            "categoria" => $this->faker->randomElement(["Desarrollo web", "Diseño web"]), // Crea elementos aleatorios que definamos destro del array que se le pasa como parametros a randomElement() para el campo categoria
        ];
    }
}
