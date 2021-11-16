<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Estudiante;
use App\Models\PerfilProfesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class estudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $usuarios = User::all();
        $Estudiantes = Estudiante::with('users')->paginate(6); 
        return view('pages.administrador.Estudiantes.index', compact ('Estudiantes') );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Estudiantes = Estudiante::all(); 
        $usuarios = User::whereHas("roles", function($consulta) {
            $consulta->where("name", "Usuario") ;
        })->get();
        return view("pages.administrador.Estudiantes.create", compact('Estudiantes','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Estudiante();
        $data->users_id = $request->users_id;
        $data->Edad = $request->Edad;
        $data->Intereses = $request->Intereses;
        $data->save();
        return redirect()->route('estudiantes')->with('flash','Su venta ha sido guardado satisfactoriamente.');
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
        $Estudiantes= Estudiante::find($id);
        return view('pages.administrador.Estudiantes.edit',compact('Estudiantes'));
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
        $Estudiantes = Estudiante::findOrFail($id);
        $Estudiantes->fill($request->all());
        $Estudiantes->save();
        return redirect()->route('estudiantes')->with('flash','Su informacion ha sido actualizada con Exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Estudiante::findOrFail($id);
        $data->delete();
        return redirect()->route('estudiantes')->with('flash','Su información ha sido eliminada con Exito.');
    }
}


