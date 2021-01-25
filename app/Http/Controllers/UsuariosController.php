<?php

namespace App\Http\Controllers;

use App\Role;
use App\Role_user;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsuariosController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }

  public function agregarUsuario(Request $request){
    $request->user()->authorizeRoles(['operador', 'admin']);
    $rol_users= Role_user::all('id','user_id', 'role_id');;
    $roles= Role:: all('id','name');

    return view('Usuarios.agregarUsuario', compact('roles', 'rol_users'));

  }

  public function insertarUsuario(Request $request){
  $request->user()->authorizeRoles(['operador', 'admin']);
    if($request->password == $request->password2){
  $NuevoUser = User::create([
    'name' => $request['name'],
    'email' => $request['email'],
    'password' => Hash::make($request['password']),

]);

$NuevoUser->roles()->attach(Role::where('name', $request['role'])->first());
//$nuevoUsuario->save();
return redirect('/verUsuario')->with('mensaje','Usuario agregado con éxito');
//return $request->all();
  }
  else {
    return redirect('/agregarUsuario')->with('mensaje','Contraseña no iguales');
  }
 
  }

  public function eliminarUsuarios($id){
    $usuarioEliminar = User::findOrFail($id)->DELETE();

    return back()->with('mensaje', 'usuario Eliminado');
  }

  public function editarUsuarios(Request $request,$id){
    $usuario = User::findOrFail($id);
    $rol_users= Role_user::all('id','user_id', 'role_id');;
    $roles= Role:: all('id','name');

    return view('Usuarios.editarUsuario', compact('usuario','rol_users','roles'));
  }
  

  public function mostrarUsuarios(Request $request){
    $usuarios = User::all();
    $rol_users= Role_user::all('id','user_id', 'role_id');;
    $roles= Role:: all('id','name');

    return view('Usuarios.verUsuarios', compact('usuarios','rol_users','roles'));
  }
//Aun no funciona falta el rol
  public function updateUsuarios(Request $request,$id){
    $UpdateUsuario = User::findOrFail($id);
    $UpdateUsuario -> update([
      'name' => $request['name'],
    'email' => $request['email'],
    'password' => Hash::make($request['password']),
    ]);
    $UpdateUsuario->roles()->detach();
    
$UpdateUsuario->roles()->attach(Role::where('name', $request['role'])->first());
return redirect('/verUsuario')->with('mensaje','Usuario editado con éxito');
         
//$nuevoUsuario->save();

    

    


  }

}

