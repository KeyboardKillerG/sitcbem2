@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('coordinacion.update', $coordinacion->id) }}" class="text-light">
  @method('PUT')
  @csrf

  <input
    type="text"
    required="text"
    name="Nombre"
    placeholder="Nombre"
    class="form-control mb-2"
    value = "{{$coordinacion->Nombre}}"
  />

  <input
    type="text"
    required="text"
    name="Telefono"
    placeholder="Teléfono"
    class="form-control mb-2"
    value = "{{$coordinacion->Telefono}}"
  />

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
