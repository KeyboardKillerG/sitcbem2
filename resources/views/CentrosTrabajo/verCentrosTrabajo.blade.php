@extends('bootstrap')
@section('master')
<table class="table">
<div Style="color: #3c1b66;
  font-weight: normal;
  font-size: 35px;
  font-family: Arial;
  text-transform: uppercase;">
<h2>CENTROS DE TRABAJO</h2>

</div>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Coordinacion</th>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      <th scope="col">Acciones</th>
      @endif
    </tr>
  </thead>
  <tbody>

    @foreach ($centros as $centro)
    <tr>
      <th scope="row">{{ $centro->id }}</th>
      <td>{{ $centro->Nombre }}</td>
      <td>{{ $centro->Telefono }}</td>
      <td>

     
      @foreach($Coordinacionx as $Coordinacion)
          @if($Coordinacion->id == $centro->CoordinacionID)
            {{$Coordinacion->Nombre}}
          @endif
        @endforeach
      
      </td>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      
      <td>
          <a href="{{route('centroTrabajo.editar', $centro->id)}}" class="btn btn-info btn-sm">Editar</a>
          @if(Auth::user()->hasRole('admin'))
          <form action="{{ route('centroTrabajo.eliminar', $centro->id) }}" class="d-inline" method="POST">
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
