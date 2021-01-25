@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('coordinacion.insertar') }}" class="text-light">
  @csrf
  <label style="color:#000000;" for='Nom'>Nombre:</label>
  <input
    type="text"
    required="text"
    name="Nombre"
    class="form-control mb-2"
  />
  <label style="color:#000000;" for='Nom'>Teléfono:</label>
  <input
    type="text"
    required="text"
    name="Telefono"
    class="form-control mb-2"
  />

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
