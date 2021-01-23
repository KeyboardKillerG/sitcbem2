@extends('bootstrap')
@section('master')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">ApellidoP</th>
      <th scope="col">ApellidoM</th>
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
{{--         @foreach($centrosTrabajo as $centroTrabajo)
          @if($centroTrabajo->id == $afiliado->CentroTrabajoID)
            {{$centroTrabajo->Nombre}}
          @endif
        @endforeach --}}
      </td>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      <td>
        @if(Auth::user()->hasRole('admin'))
          <form action="{{route('usuario.eliminar', $usuario->id) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
          </form>
        @endif
          <a href="{{route('usuario.editar', $usuario->id)}}" class="btn btn-info btn-sm">Editar</a>
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
