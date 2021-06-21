<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function __construct(){
        $this->rules=[
            'nombre' => 'required|string|max:100',
            'categoria' => 'required|string|max:100',
            'plataforma' => 'required|string|max:50',
            'precio' => ['required','regex:/^\d+(\.\d{1,2})?$/'],
            'portada' => 'required|url',
            'descripcion' =>'required|string|max:1000|min:5',
            'user_id' => 'required|integer',

        ];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tabla con todos los videojuegos
        $videogames = Videogame::get(); //consulta a la tabla en la base de datos
        //$videogames = Videogame::where('categoria','Acción')->get();
        //$videogames = Videogame::where('categoria', 'like', 'Acción%')->get();
        return view('videogame.videogame-index', compact('videogames')); //el primer parametro es la vista (ubicada en resources/views). El segundo es la tabla de videogames de la db
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videogame.videogame-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //base de datos
        //validacion de formularios del lado del servidor
        $request ->validate($this->rules);
        //La siguiente linea nos permite guardar todos los datos del formulario en la base de datos
        Videogame::create($request->all());
        //cuando nos guarde en la db, nos redirecciona al index
        return redirect()->route('videogame.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame)
    {
        //muestra un videojuego en especifico de acuerdo a su id
        return view('videogame.videogame-show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame)
    {
        return view ('videogame.videogame-form', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videogame $videogame)
    {
        //actualiza las modificaciones
        $request ->validate($this->rules);
        //a la linea de abajo le pasamos todo lo que trae request, que son los nuevos valores de cada campo de la tabla videojuegos (acabados de actualizar por el usuario). Debemos especificarle donde debe ser la actualizacion porque, si no lo hacemos, actualizacia toda la tabla. Except se pone para evitar errores, ya que el token y el method patch son confundidos pro columnas, por lo que debemos excluirlos al hacer la actualizacion
        Videogame::where('id', $videogame->id)->update($request->except('_token', '_method'));

        return redirect()->route('videogame.show', $videogame);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame)
    {
        //elimina un videojuego
        $videogame->delete();
        return redirect()->route('videogame.index');
    }
}
