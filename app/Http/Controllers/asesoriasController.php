<?php

namespace App\Http\Controllers;

use App\Models\AsesoriaProfesor;
use App\Models\PerfilProfesor;
use App\Models\User;
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
        $profesores = PerfilProfesor::all();
        $asesorias = AsesoriaProfesor::with('users','profesores')->paginate(6); 
        return view('pages.administrador.Asesoria.index', compact ('asesorias') );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = PerfilProfesor::all(); 
        $usuarios = User::all();
        $asesorias = AsesoriaProfesor::all();
        return view("pages.administrador.Asesoria.create", compact('profesores','usuarios','asesorias'));
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
        $data->perfil_profesor_id = $request->perfil_profesor_id;
        $data->user_id = $request->user_id;
        $data->Descripcion = $request->Descripcion;
        $data->FechaAsesoria = $request->FechaAsesoria;
        $data->Estatus = $request->Estatus;
        $data->Link = $request->Link;
        $data->save();
        return redirect()->route('asesorias')->with('flash','Su venta ha sido guardado satisfactoriamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asesoria = AsesoriaProfesor::find($id);
        return view('pages.administrador.Asesoria.view',compact('asesoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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


