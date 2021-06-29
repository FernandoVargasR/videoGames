<?php

namespace App\Http\Controllers;

use App\Models\Ftpvideogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class FtpvideogameController extends Controller
{
    public function __construct(){
        // el middleware('auth') permite que solo el que este loggeado pueda acceder a esa ruta
        // $this->middleware('auth')->except('show');
        $this->middleware('auth');
        $this->rules=[
            'nombre' => 'required|string|max:100',
            'categoria' => 'required|string|max:100',
            'descripcion' =>'required|string|max:1000|min:5',
            'juego' => 'required|url',
            'online' => 'required|boolean',
        ];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ftpvideogame.ftpvideogame-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ftpvideogame  $ftpvideogame
     * @return \Illuminate\Http\Response
     */
    public function show(Ftpvideogame $ftpvideogame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ftpvideogame  $ftpvideogame
     * @return \Illuminate\Http\Response
     */
    public function edit(Ftpvideogame $ftpvideogame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ftpvideogame  $ftpvideogame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ftpvideogame $ftpvideogame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ftpvideogame  $ftpvideogame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ftpvideogame $ftpvideogame)
    {
        //
    }
}
