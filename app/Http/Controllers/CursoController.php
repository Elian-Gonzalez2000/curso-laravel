<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

use App\Http\Requests\StoreCurso; // Importo el archivo con las validaciones

/* Las funciones dentro de lo controladores no deberian retornar codigo php plano, sino que se deberia llamar a un archivo con codigo HTML, en este caso eso archivos se llaman "vistas".
Estas vistas deben alojarse en la carpeta resource/views/vista.php.
Las vistas para mostrarse se debe retornar en la funcion de la ruta, esto se logra con el metodo view("rutaVista") el cual buscara desde la carpeta view de resource */
class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        return view("cursos.index", compact("cursos"));
    } // Por convencion se nombra index a la funcion de la pagina principal

    public function create(){
        return view("cursos.create");
    } // Para formularios de creacion se usa create

    public function store(StoreCurso $request){
        /* Con la expresion Request $request laravel guarda la infomacion enviada en el formulario para su uso */

        /* $request->validate([
            "name"=>"required | max:15",
            "description"=> "required | min:5",
            "categoria" => "required",
        ]); */

        $curso = new Curso();

        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->categoria=$request->categoria;

        $curso->save();

        return redirect()->route("cursos.show", $curso->id); // Con la funcion redirect se puede redireccionar al usuario a alguna pagina que se desee

    }// Para la peticion del formulario store

    public function show($id){
        // compact("curso") = ["curso" => $curso]
        $curso = Curso::find($id);

        return view("cursos.show", ["curso" => $curso]); // Se utilizan los arrays con nombre para rescatar las variable que se le pasan por parametro a la funcion y poder usarlas en la vista.
    } // Para mostrar un elemento particular se usa show
    // Todos estos nombres son convenciones

    public function edit ($id){
        // Con la expresion Curso $id laravel entiende que la variable $id es una instancia de la clase Curso
        $curso = Curso::find($id);
        return view("cursos.edit", compact("curso"));
    }

    public function update(Request $request, $id){
        //Curso $curso

        $request->validate([
            "name"=>"required",
            "description"=> "required",
            "categoria" => "required",
        ]);

        $curso = Curso::find($id);
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route("cursos.show", $curso->id);
    }
}
