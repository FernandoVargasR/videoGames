@extends('layouts.temp')
@section('contenido')
    <h1>Listado de vieojuegos </h1>

    <p>
        <a href="{{ route('videogame.create') }}">Agregar Videojuego</a>
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
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach($videogames as $videogame)
                <tr>
                    <td>{{ $videogame->id }}</td>
                    <td>{{ $videogame->created_at}}</td>
                    <td>{{ $videogame->updated_at}}</td>
                    <td> <a href="{{ route('videogame.show', $videogame->id) }}">{{ $videogame->nombre}}</a>
                    </td>
                    <td>{{ $videogame->categoria}}</td>
                    <td>{{ $videogame->plataforma}}</td>
                    <td>{{ $videogame->precio}}</td>
                    <td>{{ $videogame->portada}}</td>
                    <td>{{ $videogame->descripcion}}</td>
                    <td>{{ $videogame->user_id}}</td>
                    <td> <a href="{{ route('videogame.edit', $videogame) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
