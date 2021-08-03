<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
//para borrar 
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados= Empleado::all();
        //asfasf
        return view('empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado=$request->all();
        // si existe foto
        if($request->hasFile('Foto')){
            //se guarde en upload y luego se inserte en public
            $empleado['Foto']=$request->file('Foto')->store('empleados','public');
            
            
        }
        Empleado::create($empleado);

        return redirect()->route('empleado.index')->with('mensaje',"Empleado Creado Con Exito");

        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
         //
        // return $empleado;
        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
         //
         $request1=$request->all();
         // si existe foto
         if($request->hasFile('Foto')){
 
 
             //para borrar de la carpeta la foto y reemplazarla
             Storage::delete('public/'.$empleado->Foto);
             
             //se guarde en upload y luego se inserte en public
             $request1['Foto']=$request->file('Foto')->store('empleados','public');
             
             
         }
 
         $empleado->update($request1);
 
         return redirect()->route('empleado.index')->with('mensaje',"Empleado Actualizado con exito");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        
         // si existe foto
         if(!empty($empleado->Foto)){
            //para borrar de la carpeta la foto y reemplazarla
            Storage::delete('public/'.$empleado->Foto);
                     
        }

        $empleado->delete();

        return redirect()->route('empleado.index')->with('mensaje',"Empleado Eliminado");

    }
}
