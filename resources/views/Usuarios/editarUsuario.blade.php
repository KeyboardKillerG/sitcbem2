@extends('bootstrap')

@section('master')
<h3 style="text-transform: uppercase;">EDITAR USUARIO {{$usuario->name}}</h3>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{route('usuario.update',$usuario->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="nombre">Nombre:</label>
    <input
      type="text"
      required="text"
      name="name"
      placeholder="Nombre"
      class="form-control mb-2 w-50"
      value="{{ $usuario->name }}"
    />
    <label for="email">Correo electrónico:</label>
    <input
      type="email"
      required="text"
      name="email"
      placeholder="Correo electrónico"
      class="form-control mb-2 w-50"
      value="{{ $usuario->email }}"
    />

    <label for="contrasena">Contraseña:</label>
    <input
      type="password"
      required="text"
      name="password"
      placeholder="Contraseña"
      class="form-control mb-2 w-50"
     
    />
    
    <label for="contrasena">Ingrese nuevamente la contraseña:</label>
    <input
      type="password"
      required="text"
      name="password2"
      placeholder="Repetir Contraseña"
      class="form-control mb-2 w-50"
      
    />

    <label for="" style="color:#000000;">Rol del Usuario:</label>
  
  <label hidden for="role" class="col-md-4 col-form-label text-md-right" Style="color:#000000;">{{ __('Rol') }}</label>
      <select class="form-control" id="role" name="role">
      @foreach ($roles as $ro)
      @switch($ro->id)
      @case(2)
            <option value="{{$ro->name}}">{{$ro->name}}</option>
            @break
            @case(3)
            <option value="{{$ro->name}}">{{$ro->name}}</option>
            @break
            @endswitch
            @endforeach 
         </select>

    <div Style="color:#000000;">
@if(Session::has('mensaje')){{
Session::get('mensaje')
}}
@endif
</div>
     <br>
     
    <button class="btn btn-info btn-block" type="submit">Editar</button>
  </form>
@endsection