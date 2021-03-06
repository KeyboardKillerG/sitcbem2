
@extends('bootstrap')
@if(Session::has('mensaje')){{
Session::get('mensaje')
}}
@endif
@section('master')

<table class="table">
<div Style="color: #3c1b66;
  font-weight: normal;
  font-size: 35px;
  font-family: Arial;
  text-transform: uppercase;">
<h2>COORDINADORES</h2>
</div>

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      <th scope="col">Acciones</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($coordinaciones as $coordinacion)
    <tr>
      <th scope="row">{{ $coordinacion->id }}</th>
      <td>{{ $coordinacion->Nombre }}</td>
      <td>{{ $coordinacion->Telefono }}</td>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      <td>
          <a href="{{route('coordinacion.editar', $coordinacion->id)}}" class="btn btn-info btn-sm">Editar</a>
          @if(Auth::user()->hasRole('admin'))
      <form action="{{ route('coordinacion.eliminar', $coordinacion->id) }}" class="d-inline" method="POST">
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
