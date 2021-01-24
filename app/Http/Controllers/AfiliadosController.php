<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Afiliado;
use App\CentroTrabajo;
use App\Estado;


class AfiliadosController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function agregarAfiliado(Request $request){
        $request->user()->authorizeRoles(['operador', 'admin']);
        $centrosTrabajo = CentroTrabajo::all();
        $estados = Estado::all();

        return view('Afiliados.agregarAfiliado', compact('centrosTrabajo', 'estados'));

      }

      public function insertarAfiliado(Request $request){
        $request->user()->authorizeRoles(['operador', 'admin']);
        $nuevoAfiliado = new Afiliado;
        $nuevoAfiliado->Nombre = $request->Nombre;
        $nuevoAfiliado->ApellidoP = $request->ApellidoP;
        $nuevoAfiliado->ApellidoM = $request->ApellidoM;
        $nuevoAfiliado->FechaNacimiento = $request->FechaNacimiento;
        $nuevoAfiliado->Genero = $request->Genero;
        $nuevoAfiliado->EstadoCivil = $request->EstadoCivil;
        $nuevoAfiliado->CodigoPostal = $request->CodigoPostal;
        $nuevoAfiliado->Colonia = $request->Colonia;
        $nuevoAfiliado->Calle = $request->Calle;
        $nuevoAfiliado->NumeroInterior = $request->NumeroInterior;
        $nuevoAfiliado->NumeroExterior = $request->NumeroExterior;
        $nuevoAfiliado->Telefono = $request->Telefono;
        $nuevoAfiliado->Email = $request->Email;
        $nuevoAfiliado->RFC = $request->RFC;
        $nuevoAfiliado->CURP = $request->CURP;
        $nuevoAfiliado->Foto = 'URL';
        $nuevoAfiliado->CentroTrabajoID = $request->CentroTrabajoID;
        $nuevoAfiliado->TipoPlaza = $request->TipoPlaza;
        $nuevoAfiliado->FechaIngreso = $request->FechaIngreso;
        $nuevoAfiliado->EstadoID = 1;


        $nuevoAfiliado->save();
        return redirect('/verAfiliados')->with('mensaje','Afiliado agregado con éxito');
      }

      public function mostrarAfiliados(Request $request){
         $afiliados = Afiliado::all();
         $centrosTrabajo = CentroTrabajo::all();

         return view('Afiliados.verAfiliados', compact('afiliados','centrosTrabajo'));
       }

      public function eliminarAfiliado(Request $request,$id){
        $request->user()->authorizeRoles(['operador', 'admin']);
        $afiliadoEliminar = Afiliado::findOrFail($id)->delete();

        return back()->with('mensaje', 'Afiliado Eliminado');
      }

      public function editarAfiliado(Request $request,$id){
        $request->user()->authorizeRoles(['operador', 'admin']);
        $afiliado = Afiliado::findOrFail($id);
        $centrosTrabajo = CentroTrabajo::all();
        $estados = Estado::all();
        $edo = Estado::findOrFail($afiliado->EstadoID);
        return view('Afiliados.editarAfiliado', compact('afiliado','edo','centrosTrabajo','estados'));
      }

      public function updateAfiliado(Request $request , $id){
      
        $Afiliado = Afiliado::findOrFail($id);
        $Afiliado->Nombre = $request->Nombre;
        $Afiliado->ApellidoP = $request->ApellidoP;
        $Afiliado->ApellidoM = $request->ApellidoM;
        $Afiliado->FechaNacimiento = $request->FechaNacimiento;
        $Afiliado->Genero = $request->Genero;
        $Afiliado->EstadoCivil = $request->EstadoCivil;
        $Afiliado->CodigoPostal = $request->CodigoPostal;
        $Afiliado->Colonia = $request->Colonia;
        $Afiliado->Calle = $request->Calle;
        $Afiliado->NumeroInterior = $request->NumeroInterior;
        $Afiliado->NumeroExterior = $request->NumeroExterior;
        $Afiliado->Telefono = $request->Telefono;
        $Afiliado->Email = $request->Email;
        $Afiliado->RFC = $request->RFC;
        $Afiliado->CURP = $request->CURP;
        $Afiliado->Foto = 'URL';
        $Afiliado->CentroTrabajoID = $request->CentroTrabajoID;
        $Afiliado->TipoPlaza = $request->TipoPlaza;
        $Afiliado->FechaIngreso = $request->FechaIngreso;
        $Afiliado->EstadoID = 1;


        $Afiliado->save();
        return redirect('/verAfiliados');
         



      }

}
