@extends('bootstrap')
@section('master')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">ApellidoP</th>
      <th scope="col">ApellidoM</th>
      <th scope="col">Email</th>
      <th scope="col">Centro Trabajo</th>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
        <th scope="col">Acciones</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($afiliados as $afiliado)
    <tr>
      <th scope="row">{{ $afiliado->id }}</th>
      <td>{{ $afiliado->Nombre }}</td>
      <td>{{ $afiliado->ApellidoP}}</td>
      <td>{{ $afiliado->ApellidoM }}</td>
      <td>{{ $afiliado->Email }}</td>
      <td>
        @foreach($centrosTrabajo as $centroTrabajo)
          @if($centroTrabajo->id == $afiliado->CentroTrabajoID)
            {{$centroTrabajo->Nombre}}
          @endif
        @endforeach
      </td>
      @if((Auth::user()->hasRole('admin')) || (Auth::user()->hasRole('operador')))
      <td>
       
          <a href="{{route('afiliado.editar', $afiliado->id)}}" class="btn btn-info btn-sm">Editar</a>
          @if(Auth::user()->hasRole('admin'))
          <form action="{{ route('afiliado.eliminar', $afiliado->id) }}" class="d-inline" method="POST">
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
