<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

use App\Http\Requests\StoreCurso; // Importo el archivo con las validaciones
use Illuminate\Support\Str;

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

        /* $curso = new Curso();

        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->categoria=$request->categoria;

        $curso->save(); */

            // Asignacion masiva
        /* la siguiente linea es la asignacion masiva, el metodo create espera un array con los campos a crear, y el metodo all() proporciona esto, al usarse en la varible $request se crea el array necesario con todos los datos de los campos de formularios.
        NOTA: Es necesario definir la variable $fillable en el modelo */
        $curso = Curso::create($request->all());

        return redirect()->route("cursos.show", $curso->id); // Con la funcion redirect se puede redireccionar al usuario a alguna pagina que se desee

    }// Para la peticion del formulario store

    public function show($slug){
        // compact("curso") = ["curso" => $curso]
        $curso = Curso::where("slug", $slug)->get();

        return view("cursos.show", ["curso" => $curso]); // Se utilizan los arrays con nombre para rescatar las variable que se le pasan por parametro a la funcion y poder usarlas en la vista.
    } // Para mostrar un elemento particular se usa show
    // Todos estos nombres son convenciones

    public function edit ($slug){
        // Con la expresion Curso $id laravel entiende que la variable $id es una instancia de la clase Curso
        $curso = Curso::where("slug", $slug)->get();
        return view("cursos.edit", ["curso" => $curso[0]]);
    }

    public function update(Request $request, $id){
        //Curso $curso

        $request->validate([
            "name"=>"required",
            "description"=> "required",
            "categoria" => "required",
        ]);
        $curso = Curso::where("slug", $id)->get();
        $curso[0]->name = $request->name;
        $curso[0]->slug = Str::slug($request->name, "-");
        $curso[0]->description = $request->description;
        $curso[0]->categoria = $request->categoria;
        $curso = $curso[0];
        $curso->save();
        return redirect()->route("cursos.show", $curso->slug);
    }

    public function destroy(Curso $curso){
        // Delete es el metodo que permite eliminar un registro
        $curso->delete();

        return redirect()->route("cursos.index");
    }
}
