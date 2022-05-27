@extends("layouts.plantilla") <!-- Desde la carpeta resources/views comezara a buscar y se debe especificar una plantilla -->
@section("title", "Home")
@section("content")
    <h1>Contactanos</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error("name")
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        @error("correo")
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje"  rows="4"></textarea>
        </label>
        <br>
        @error("mensaje")
            <p><strong>{{$message}}</strong></p>
        @enderror
        <button type="submit">Enviar mensaje</button>
    </form>

    <!-- La directriz @ if  @ endif es para agregar condicionales -->
    @if (session("info"))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection
<!-- Los @ section son para definir un contenido dependiendo del nombre definido en el yield de la plantilla, la sintaxis para un unico contenido es "@ section("referenciaYield", "contenido")".
La sintaxis para definir contenido mas extenso es:
"@ section("referenciaYield")"
    Contenido
"@ endsection" -->
