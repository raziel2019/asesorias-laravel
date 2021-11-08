<?php

namespace App\Http\Controllers;

use App\Models\Profesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class profesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $profesiones = Profesion::paginate(6); 
        return view('pages.administrador.Profesion.index', compact ('profesiones') );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesiones = Profesion::all();
        return view("pages.administrador.Profesion.create", compact('profesiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Profesion();
        $data->Descripcion = $request->Descripcion; 
        $data->save();
        return redirect()->route('profesiones')->with('flash','Su informacion ha sido guardada satisfactoriamente.');
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
        $profesiones = Profesion::findOrFail($id);
        return view('pages.administrador.Profesion.edit', compact('profesiones'));
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
        $profesiones = Profesion::findOrFail($id);
        $profesiones->fill($request->all());
        $profesiones->save();
        return redirect()->route('profesiones')->with('flash','Su informacion ha sido actualizada con Exito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Profesion::findOrFail($id);
        $data->delete();
        return redirect()->route('profesiones')->with('flash','Su información ha sido eliminada con Exito.');
    }
}


