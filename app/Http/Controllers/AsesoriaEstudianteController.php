<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AsesoriaEstudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AsesoriaEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {        
        $usuarios = User::all();
        $AsesoriaEstudiante = AsesoriaEstudiante::all();
        return view('pages.profesor.AsesoriasEstudiantes.index', compact ('AsesoriaEstudiante') );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AsesoriaEstudiante= AsesoriaEstudiante::all(); 
        $usuarios = User::whereHas("roles", function($consulta) {
            $consulta->where("name", "Usuario") ;
        })->get();
        return view("pages.profesor.AsesoriasEstudiantes.create", compact('AsesoriaEstudiante','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new AsesoriaEstudiante();
        $data->user_id = $request->user_id;
        $data->Descripcion = $request->Descripcion;
        $data->FechaAsesoria = $request->FechaAsesoria;
        $data->Estatus = $request->Estatus;
        $data->Link = $request->Link;
        $data->save();
        return redirect()->route('AsesoriaEstudiante')->with('flash','Su venta ha sido guardado satisfactoriamente.');
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
        $AsesoriaEstudiante= AsesoriaEstudiante::find($id);
        return view('pages.profesor.AsesoriasEstudiantes.edit',compact('AsesoriaEstudiante'));
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
        $AsesoriaEstudiante= AsesoriaEstudiante::findOrFail($id);
        $AsesoriaEstudiante->fill($request->all());
        $AsesoriaEstudiante->save();
        return redirect()->route('AsesoriaEstudiante')->with('flash','Su informacion ha sido actualizada con Exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AsesoriaEstudiante::findOrFail($id);
        $data->delete();
        return redirect()->route('AsesoriaEstudiante')->with('flash','Su información ha sido eliminada con Exito.');
    }
}


