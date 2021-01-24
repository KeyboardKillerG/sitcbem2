@extends('bootstrap')
@section('master')

<h3 style="text-transform: uppercase;">EDITAR CENTRO DE TRABAJO</h3>
<form method="POST" action="{{ route('centroTrabajo.update', $centro->id) }}" class="text-light">
  
  @csrf
  <input
    type="text"
    required="text"
    name="Nombre"
    placeholder="Nombre"
    class="form-control mb-2"
    value = "{{$centro->Nombre}}"
  />

  <input
    type="text"
    required="text"
    name="Telefono"
    placeholder="Telefono"
    class="form-control mb-2"
    value = "{{$centro->Telefono}}"
  />

  <div class="form-group mb-2">
     
     <select class="form-control" id="coordinacion" name="CoordinacionID">
      <option>{{$coordi->Nombre}}</option>
        @foreach ($coordinaciones as $coordinacion)
          @if ($coordinacion->id!=$coordi->id)
            <option value='{{$coordinacion->id}}'>{{$coordinacion->Nombre}}</option>
          @endif
       @endforeach
  </select>

</div>

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
