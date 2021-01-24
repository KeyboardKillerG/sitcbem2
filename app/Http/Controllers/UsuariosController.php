<?php

namespace App\Http\Controllers;

use App\Role;
use App\Role_user;
use App\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }

  public function eliminarUsuarios($id){
    $usuarioEliminar = User::findOrFail($id)->DELETE();

    return back()->with('mensaje', 'usuario Eliminado');
  }
  

  public function mostrarUsuarios(Request $request){
    $usuarios = User::all();
    $rol_users= Role_user::all('id','user_id', 'role_id');;
    $roles= Role:: all('id','name');

    return view('Usuarios.verUsuarios', compact('usuarios','rol_users','roles'));
  }
}

