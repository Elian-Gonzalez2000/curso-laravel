@extends("layouts.plantilla") <!-- Desde la carpeta resources/views comezara a buscar y se debe especificar una plantilla -->
@section("title", "Nosotros")
@section("content")
    <h1>Nosotros</h1>
@endsection
<!-- Los @ section son para definir un contenido dependiendo del nombre definido en el yield de la plantilla, la sintaxis para un unico contenido es "@ section("referenciaYield", "contenido")".
La sintaxis para definir contenido mas extenso es:
"@ section("referenciaYield")"
    Contenido
"@ endsection" -->
