@extends('bootstrap')
@section('master')
<h3>AGREGAR NUEVO AFILIADO</h3>
<form action="{{ route('afiliado.insertar') }}" class="text-light" method="POST">
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
    name="ApellidoP"
    placeholder="Apellido Paterno"
    class="form-control mb-2"
  />
  <input
    type="text"
    required="text"
    name="ApellidoM"
    placeholder="Apellido Materno"
    class="form-control mb-2"
  />
  <input
    type="date"
    required="date"
    name="FechaNacimiento"
    placeholder="Fecha Nacimiento"
    class="form-control mb-2"
  />
  <div class="form-group mb-2">
   <select class="form-control" id="genero" name="Genero">
     <option>Hombre</option>
     <option>Mujer</option>
     <option>Otro</option>
   </select>
 </div>

 <div class="form-group mb-2">
  <select class="form-control" id="edocivil" name="EstadoCivil" placeholder="Estado Civil">
    <option>Soltero</option>
    <option>Casado</option>
  </select>
  </div>

   <input
    type="number"
    required="number"
    name="CodigoPostal"
    placeholder="Codigo Postal"
    class="form-control mb-2"
    />

    <input
      type="text"
      required="text"
      name="Colonia"
      placeholder="Colonia"
      class="form-control mb-2"
    />

    <input
      type="text"
      required="text"
      name="Calle"
      placeholder="Calle"
      class="form-control mb-2"
    />

    <input
      type="text"
      required="text"
      name="NumeroExterior"
      placeholder="Numero Exterior"
      class="form-control mb-2"
    />
    <input
      type="text"
      required="text"
      name="NumeroInterior"
      placeholder="Numero Interior"
      class="form-control mb-2"
    />
    <input
      type="text"
      required="text"
      name="Telefono"
      placeholder="Telefono"
      class="form-control mb-2"
    />
    <input
      type="text"
      required="email"
      name="Email"
      placeholder="Email"
      class="form-control mb-2"
    />
    <input
      type="text"
      required="texto"
      name="CURP"
      placeholder="CURP"
      class="form-control mb-2"
    />

 <label for="centroTrabajo">Centro de Trabajo (Para seleccionar varios, mantenga pulsado 'Ctrl')</label>
    <div class="form-group mb-2">
     <select class="form-control" id="centroTrabajo" name="CentroTrabajoID">
       @foreach ($centrosTrabajo as $centroTrabajo)
        <option value='{{$centroTrabajo->id}}'>{{$centroTrabajo->Nombre}}</option>
       @endforeach


     </select>
     </div>

    <input
      type="text"
      required="text"
      name="TipoPlaza"
      placeholder="Tipo de plaza"
      class="form-control mb-2"
    />
    <input
      type="date"
      required="date"
      name="FechaIngreso"
      placeholder="Fecha de Ingreso"
      class="form-control mb-2"
    />
    <input
      type="text"
      required="text"
      name="RFC"
      placeholder="RFC"
      class="form-control mb-2"
    />
    <div class="form-group mb-2">
     <label for="estado">Estado</label>
     <select class="form-control" id="estado" name="Estado">
       @foreach ($estados as $estado)
       <option>{{$estado->Estado}}</option>
       @endforeach
     </select>
   </div>

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
