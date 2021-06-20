@extends('layouts.temp')
@section('contenido')
    <h1>Detalle del videojuego</h1>

    <p>
        <a href="{{ route('videogame.index') }}">Listado de videojuegos</a>
    </p>

    <table border="1">
        <thead>
        <tr>
        <th>ID</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Plataforma</th>
        <th>Precio</th>
        <th>Portada</th>
        <th>Descripcion</th>
        <th>User id</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $videogame->id }}</td>
                <td>{{ $videogame->created_at}}</td>
                <td>{{ $videogame->updated_at}}</td>
                <td>{{ $videogame->nombre}}</td>
                <td>{{ $videogame->categoria}}</td>
                <td>{{ $videogame->plataforma}}</td>
                <td>{{ $videogame->precio}}</td>
                <td>{{ $videogame->portada}}</td>
                <td>{{ $videogame->descripcion}}</td>
                <td>{{ $videogame->user_id}}</td>
            </tr>
        </tbody>
    </table>

    <form action="{{ route('videogame.destroy', $videogame) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar videojuego">
    </form>
@endsection
