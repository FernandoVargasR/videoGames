@extends('home')
@section('contenido')

<div class="container">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Detalle del videojuego</h2>
    </div>


    <p>
        <a href="{{ route('videogame.index') }}"  class="btn btn-dark" role="button">Listado de videojuegos</a>
    </p>
    <div class="table-responsive table-responsive-xl">
        <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Precio</th>
            <th scope="col">Portada</th>
            <th scope="col">Descripcion</th>
            <th scope="col">User id</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bg-primary">{{ $videogame->id }}</td>
                    <td>{{ $videogame->created_at}}</td>
                    <td>{{ $videogame->updated_at}}</td>
                    <td>{{ $videogame->nombre}}</td>
                    <td>{{ $videogame->categoria}}</td>
                    <td>{{ $videogame->plataforma}}</td>
                    <td>${{ $videogame->precio}}</td>
                    <td><img src="{{ $videogame->portada}}" class="img-fluid" alt="Responsive image"></td>
                    <td>{{ $videogame->descripcion}}</td>
                    <td>{{ $videogame->user_id}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="{{ route('videogame.destroy', $videogame) }}" method="POST">
        @csrf
        @method('DELETE')
        <!-- <input type="submit" value="Eliminar videojuego"> -->
        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Eliminar videojuego</button>
    </form>
</div>
@endsection
