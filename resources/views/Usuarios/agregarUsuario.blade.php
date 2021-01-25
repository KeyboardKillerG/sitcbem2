@extends('bootstrap')

@section('master')


<h3>AGREGAR NUEVO USUARIO</h3>
<form action="{{ route('usuario.insertar') }}" class="text-light" method="POST">
  @csrf
  <label for="" style="color:#000000;">Nombre del Usuario:</label>
  <input
    type="text"
    required="text"
    name="name"
    placeholder="Nombre del Usuario:"
    class="form-control mb-2"
  />
  <label for="" style="color:#000000;">Correo electronico:</label>
  <input
    type="text"
    required="text"
    name="email"
    placeholder="Correo electronico:"
    class="form-control mb-2"
  />
  
  <label for="" style="color:#000000;">Contraseña:</label>
  <input
    type="password"
    required="text"
    name="password"
    placeholder="Contraseña:"
    class="form-control mb-2"
  />

  <label for="" style="color:#000000;">Contraseña:</label>
  <input
    type="password"
    required="text"
    name="password2"
    placeholder="Contraseña:"
    class="form-control mb-2"
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
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection

