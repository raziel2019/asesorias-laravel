<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\User;
use App\Models\Profesion;
use App\Models\PerfilProfesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class profesoresController extends Controller
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
        return view('pages.administrador.Profesores.index', compact ('profesores') );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = PerfilProfesor::all(); 
        $usuarios = User::whereHas("roles", function($consulta) {
            $consulta->where("name", "Profesor") ;
        })->get();
        $profesiones = Profesion::all();
        $paises = Pais::all();
        return view("pages.administrador.Profesores.create", compact('profesores','usuarios','profesiones','paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PerfilProfesor();
        $data->Usuarios_id = $request->Usuarios_id;
        $data->Profesion_id = $request->Profesion_id;
        $data->Pais_id = $request->Pais_id;
        $data->Email = $request->Email;
        $data->Movil = $request->Movil;
        $data->Linkedin = $request->Linkedin;
        $data->ExpeLaboral = $request->ExpeLaboral;
        $data->Logros = $request->Logros;
        $data->FormacionAcademica = $request->FormacionAcademica;
        $data->Aptitudes = $request->Aptitudes;
        $data->Cursos = $request->Cursos;
        $data->PerfilProfesorcol = $request->PerfilProfesorcol;
        $data->save();
        return redirect()->route('profesores')->with('flash','Su venta ha sido guardado satisfactoriamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesores = PerfilProfesor::find($id);
        return view('pages.administrador.Profesores.view',compact('profesores'));
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
        $data = PerfilProfesor::findOrFail($id);
        $data->delete();
        return redirect()->route('profesores')->with('flash','Su informaci??n ha sido eliminada con Exito.');
    }
}


