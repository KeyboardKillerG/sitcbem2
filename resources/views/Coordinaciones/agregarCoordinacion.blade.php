@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('coordinacion.insertar') }}" class="text-light">
  @csrf
  <input
    type="text"
    required="text"
    name="Nombre"
    placeholder="Nombre"
    class="form-control mb-2"
  />

  <input
    type="text"
    required="text"
    name="Telefono"
    placeholder="Teléfono"
    class="form-control mb-2"
  />

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
