@extends("layouts.plantilla") <!-- Desde la carpeta resources/views comezara a buscar y se debe especificar una plantilla -->

@section("title", "Editar Cursos")

@section("content")
    <h1>Bienvenido a la pagina de editar cursos</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        <!-- Con esa bandera, laravel agrega un token al envio del formulario, es obligatorio ya que laravel no permite el envio de formularios sin ese token -->
        @csrf

        <!-- Con esa bandera, laravel especifica que el metodo por el que se enviara la peticion es PUT, esto hay que hacerlo porque HTML nativo solo acepta post y get -->
        @method('put')

        <label for="">
            Nombre: <input type=" text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error("name")
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <textarea name="description" rows="10">
            {{old("description", $curso->description)}}
            </textarea>
        </label>
        @error("description")
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
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
