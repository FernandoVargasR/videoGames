@extends('layouts.temp')
@section('contenido')
    <h1>Formulario de videojuegos </h1>

    <p>
        <a href="{{ route('videogame.index') }}">Listado de videojuegos</a>
    </p>

    <!-- Este formulario es llamado desde el metodo edit y desde el create. Cuando lo llamamos desde edit mandamos como parametros a un videojuego (que es el que vamos a editar), pero cuando lo llamamos desde create no le mandamos nada. En dependencia de donde lo estemos llamando es hacia donde  lo vamos a mandar. Entonces, para definir desde donde lo estamos llamando, hacemos el siguiente if -->
    @if(isset($videogame))
        <form action="{{ route('videogame.update', $videogame) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('videogame.store') }}" method="POST">
    @endif
    <!-- La siguiente linea nos crea un token, imprescindible para que nos permita enviar el formulario (ya que la hace seguro)  -->
        @csrf
        <!-- Si lo llamamos desde edit nos apareceran los datos del videojuego -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $videogame->nombre ?? ''}}">
        <br>
        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" id="categoria" value="{{ $videogame->categoria ?? ''}}">
        <br>
        <label for="plataforma">Plataforma:</label>
        <input type="text" name="plataforma" id="plataforma" value="{{ $videogame->plataforma ?? ''}}">
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ $videogame->precio ?? ''}}">
        <br>
        <label for="portada">Portada:</label>
        <input type="url" name="portada" id="portada" value="{{ $videogame->portada ?? ''}}">
        <br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $videogame->descripcion ?? ''}}">
        <br>
        <label for="user_id">User_id:</label>
        <input type="number" name="user_id" id="user_id" value="{{ $videogame->user_id ?? ''}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
@endsection
