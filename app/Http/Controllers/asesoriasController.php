<?php

namespace App\Http\Controllers;

use App\Models\AsesoriaProfesor;
use App\Models\Pais;
use App\Models\User;
use App\Models\Profesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class asesoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $usuarios = User::all();
        $profesiones = Profesion::all();
        $paises = Pais::all();
        $asesorias = AsesoriaProfesor::with('users','paises','profesiones')->paginate(6); 
        return view('pages.administrador.Asesoria.index', compact ('asesorias') );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asesorias = AsesoriaProfesor::all();
        return view("pages.administrador.Asesoria.create", compact('asesorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new AsesoriaProfesor();
        $data->Descripcion = $request->Descripcion; 
        $data->save();
        return redirect()->route('asesorias')->with('flash','Su informacion ha sido guardada satisfactoriamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesorias = AsesoriaProfesor::findOrFail($id);
        return view('pages.administrador.Asesoria.edit', compact('asesorias'));
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
        $asesorias = AsesoriaProfesor::findOrFail($id);
        $asesorias->fill($request->all());
        $asesorias->save();
        return redirect()->route('asesorias')->with('flash','Su informacion ha sido actualizada con Exito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AsesoriaProfesor::findOrFail($id);
        $data->delete();
        return redirect()->route('asesorias')->with('flash','Su información ha sido eliminada con Exito.');
    }
}


