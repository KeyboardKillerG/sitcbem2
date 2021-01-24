<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinacion;

class CoordinacionesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function agregarCoordinacion(){
    return view('Coordinaciones.agregarCoordinacion');
  }

  public function insertarCoordinacion(Request $request){
    $coordinacion = new Coordinacion;
    $coordinacion->Nombre = $request->Nombre;
    $coordinacion->Telefono = $request->Telefono;

    $coordinacion->save();
    return redirect('/verCoordinaciones');
  }

  public function mostrarCoordinaciones(){

     $coordinaciones = Coordinacion::all();

     return view('Coordinaciones.verCoordinaciones', compact('coordinaciones'));
   }

   public function eliminarCoordinacion($id){

     $coordinacionEliminar = Coordinacion::findOrFail($id)->delete();

     return back()->with('mensaje', 'Coordinacion Eliminada');
   }

   public function editarCoordinacion($id){
     $coordinacion = Coordinacion::findOrFail($id);
     return view('Coordinaciones.editarCoordinacion', compact('coordinacion'));
   }

   public function updateCoordinacion(Request $request , $id){
     $coordinacion = Coordinacion::findOrFail($id);
     $coordinacion->Nombre = $request->Nombre;
     $coordinacion->Telefono = $request->Telefono;

     $coordinacion->save();
     return redirect('/verCoordinaciones');
   }

}
