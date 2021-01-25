@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('centroTrabajo.insertar') }}" class="text-light">
  @csrf

  <label style="color:#000000;" for='Nom'>Nombre :</label>
  <input
    type="text"
    required="text"
    name="Nombre"
    class="form-control mb-2"
/>

<label  style="color:#000000;" for='tel'> Teléfono:</label>
  <input
    type="text"
    required="number"
    name="Telefono"
    class="form-control mb-2"
  />


  <div class="form-group mb-2">
     <label style="color:#000000;" for="coordinacion">Coordinaciones</label>
     <select class="form-control" id="coordinacion" name="CoordinacionID">
         @foreach ($coordinaciones as $coordinacion)
          <option value='{{$coordinacion->id}}' >{{$coordinacion->Nombre}}</option>
         @endforeach
      </select>
  </div>


  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
