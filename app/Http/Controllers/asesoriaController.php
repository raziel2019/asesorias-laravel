<?php

namespace App\Http\Controllers;

use App\Models\AsesoriaEstudiante;
use App\Models\PerfilProfesor;
use App\Models\AsesoriaProfesor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class asesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {        
        $usuarios = User::all();
        $profesores = PerfilProfesor::all();
        $asesoria = AsesoriaProfesor::with('users','profesores')->where('user_id', auth()->user()->id)->get(); 
        return view('pages.profesor.Asesorias.index', compact ('asesoria') );
       
    }

    public function UsuarioAsesorias(){
        $AsesoriaEstudiante = AsesoriaEstudiante::where('user_id', auth()->user()->id)->get(); 
        return view('pages.usuario.Asesorias.index', compact ('AsesoriaEstudiante') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesoria = AsesoriaProfesor::findOrFail($id);
        return view('pages.profesor.Asesorias.edit', compact('asesoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asesoria = AsesoriaProfesor::findOrFail($id);
        $asesoria->fill($request->all());
        $asesoria->save();
        return redirect()->route('asesoria')->with('flash','Su informacion ha sido actualizada con Exito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}


