@extends("layouts.plantilla") <!-- Desde la carpeta resources/views comezara a buscar y se debe especificar una plantilla -->

@section("title", "Crear Cursos")

@section("content")
    <h1>Bienvenido a la pagina de crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        <!-- Con esa bandera, laravel agrega un token al envio del formulario, es obligatorio ya que laravel no permite el envio de formularios sin ese token -->
        @csrf

        <label for="">
            Nombre: <input type=" text" name="name" value="{{old('name')}}">
        </label>
        <!-- El metodo old permite mantener los datos del formulario despues de que se procese, pero solo en caso de que no tenga exito -->

        <!--
            Con la directriz @ error, laravel permite mostrar mensajes de error dependiendo de las validaciones que se hayan definido en su funcion de controlador mediante request -> validation.
            Los mensajes de error se definen en los archivos de la carpeta resources/lang/
        -->
        @error("name")
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <textarea name="description" rows="10">{{old('description')}}</textarea>
        </label>

        @error("description")
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error("categoria")
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>

    </form>
@endsection
<!-- Los @ section son para definir un contenido dependiendo del nombre definido en el yield de la plantilla, la sintaxis para un unico contenido es "@ section("referenciaYield", "contenido")".
La sintaxis para definir contenido mas extenso es:
"@ section("referenciaYield")"
    Contenido
"@ endsection" -->
