<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
    * En caso de tener muchas validaciones la funcion controller se ensuciara y lo recomendable es crear un archivo que contenga las validaciones con el comando:
     * php artisan make:request: esto dentro de la carpeta Http/Request para contener las validaciones.
     *
     * La funcion authorize() se deberia colocar la logica necesaria para verificar si un usuario esta autorizado a realizar ciertas acciones dentro de la aplicacion, esta funcion debe intentar retornar true para permitir el paso, una vez hecho eso se ejecuta la funcion rules.
     *
     * La funcion rules() se deben colocar las validaciones deseadas
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>"required | max:15",
            "description"=> "required | min:5",
            "categoria" => "required",
        ];
    }

    /* La funcion attributes permite cambiar el :attribute con un texto especifico dependiendo del campo */
    public function attributes(){
        return [
            "name"=> "nombre",
        ];
    }

    /* En la funcion messages se retorna los mensajes que se deseen personalizar deendiendo del campo y tipo de mensaje, se usa la sintaxis:
    ["campo.tipoMensaje"=>"Mensaje personalizado"] */
    public function messages(){
        return [
            "description.required" => "Mensaje personalizado para descripcion"
        ];
    }
}
