<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CentroTrabajo;
use App\Coordinacion;

class CentrosTrabajoController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  
  public function agregarCentroTrabajo(){
      $coordinaciones = Coordinacion::all();

      return view('CentrosTrabajo.agregarCentro', compact('coordinaciones'));
    }

    public function insertarCentroTrabajo(Request $request){
      $centroTrabajo = new CentroTrabajo;
      $centroTrabajo->Nombre = $request->Nombre;
      $centroTrabajo->Telefono = $request->Telefono;
      $centroTrabajo->CoordinacionID = $request->CoordinacionID;


      $centroTrabajo->save();
      return redirect('/verCentrosTrabajo')->with('mensaje','Centro de trabajo agregado con éxito');
    }

    public function mostrarCentrosTrabajo(){

       $centros = CentroTrabajo::all();
       $Coordinacionx = Coordinacion::all();
       return view('CentrosTrabajo.verCentrosTrabajo', compact('centros','Coordinacionx'));
     }

     public function eliminarCentroTrabajo($id){

       $centrooEliminar = CentroTrabajo::findOrFail($id)->delete();

       return back()->with('mensaje', 'Centro Eliminado');
     }

     public function editarCentroTrabajo($id){
      $centro = CentroTrabajo::findOrFail($id);
      $coordi = Coordinacion::findOrFail($centro->CoordinacionID);
      $coordinaciones = Coordinacion::all();

      return view('CentrosTrabajo.editarCentroTrabajo', compact('centro','coordi','coordinaciones'));
    }

     public function updateCentroTrabajo(Request $request , $id){
       $centroTrabajo = CentroTrabajo::findOrFail($id);
       $centroTrabajo->Nombre = $request->Nombre;
       $centroTrabajo->Telefono = $request->Telefono;
       $centroTrabajo->CoordinacionID = $request->CoordinacionID;

       $centroTrabajo->save();
       return redirect('/verCentrosTrabajo')->with('mensaje','Centro de trabajo editado con éxito');
     }

}
