<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\User;
use App\Models\Profesion;
use App\Models\AsesoriaProfesor;
use App\Models\PerfilProfesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ProfesoresDisponiblesController extends Controller
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
        $profesores = PerfilProfesor::with('users','paises','profesiones')->paginate(6); 
        return view('pages.usuario.Profesores.index', compact ('profesores') );
       
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
        $data = new AsesoriaProfesor();
        $data->user_id = $request->user_id;
        $data->Descripcion = $request->Descripcion;
        $data->NombreEstudiante = $request->NombreEstudiante;  
        $data->Estatus = $request->Estatus;
        $data->save();
        return redirect()->route('ProfesoresDisponibles')->with('flash','Su venta ha sido guardado satisfactoriamente.');
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
        $profesores = PerfilProfesor::all(); 
        $usuarios = User::whereHas("roles", function($consulta) {
            $consulta->where("name", "Profesor") ;
        })->get();
        $asesorias = AsesoriaProfesor::all();
        return view("pages.usuario.Profesores.create", compact('profesores','usuarios','asesorias'));
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
    }
}


