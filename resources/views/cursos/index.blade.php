@extends("layouts.plantilla") <!-- Desde la carpeta resources/views comezara a buscar y se debe especificar una plantilla -->

@section("title", "Cursos")

@section("content")
    <h1>Bienvenido a la pagina principal</h1>
    <!-- Para hacer referencia a las rutas de la pagina laravel recomiendo agregarles un nombre personalizados, se pueden usar con la sintaxis mostrada en los enlaces del li, route de segundo parametro se le puede pasar la ruta dinamica -->
        <a href="{{route('cursos.create')}}">Crear Cursos</a>
    <ul>
        <!-- La siguiente directris permite ejecutar un "@ foreach($array as $elements)" -->
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">
                    {{$curso->name}}
                </a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection
<!-- Los @ section son para definir un contenido dependiendo del nombre definido en el yield de la plantilla, la sintaxis para un unico contenido es "@ section("referenciaYield", "contenido")".
La sintaxis para definir contenido mas extenso es:
"@ section("referenciaYield")"
    Contenido
"@ endsection" -->
