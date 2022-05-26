@extends("layouts.plantilla") <!-- Desde la carpeta resources/views comezara a buscar y se debe especificar una plantilla -->

@section("title", "Curso " . $curso )

@section("content")
    <h1>Pagina cursos {{$curso[0]->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso[0])}}">Editar cursos</a>
    <p>{{$curso[0]->description}}</p>
    <p>{{$curso[0]->categoria}}</p>
    <form action="{{route('cursos.destroy', $curso[0])}}" method="POST">
        @csrf
        @method("delete")
        <button type="submit">Eliminar</button>
    </form>
    <!-- Cuando se desea concatenar un echo dentro del codigo html en lugar de usar la etiqueta de php, blade ofrece otra directiva que es la que se muestra en el h1 con dos corchetes y la varible -->
@endsection
<!-- Los @ section son para definir un contenido dependiendo del nombre definido en el yield de la plantilla, la sintaxis para un unico contenido es "@ section("referenciaYield", "contenido")".
La sintaxis para definir contenido mas extenso es:
"@ section("referenciaYield")"
    Contenido
"@ endsection" -->
