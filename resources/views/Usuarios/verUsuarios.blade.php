@extends('bootstrap')
@section('master')
<table class="table">
<div Style="color: #3c1b66;
  font-weight: normal;
  font-size: 35px;
  font-family: Arial;
  text-transform: uppercase;">
<h2>USUARIOS</h2>
</div>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo de usuario</th>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
        <th scope="col">Acciones</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($usuarios as $usuario)
    <tr>
      <th scope="row">{{ $usuario->id }}</th>
      <td>{{ $usuario->name}}</td>
      <td>{{ $usuario->email}}</td>
      <td>
        @foreach($rol_users as $rol_user)
          @if($usuario->id == $rol_user->user_id)
            {{-- {{$rol_user->role_id}} --}}
            @foreach($roles as $rol)
              @if($rol_user->role_id == $rol->id)
                {{$rol->name}}
              @endif
            @endforeach 
          @endif
        @endforeach

       

      </td>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      <td>
          <a href="{{route('usuario.editar', $usuario->id)}}" class="btn btn-info btn-sm">Editar</a>
          @if(Auth::user()->hasRole('admin'))
          <form action="{{route('usuario.eliminar', $usuario->id) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
          </form>
        @endif
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
