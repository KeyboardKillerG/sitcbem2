@extends('bootstrap')
@section('master')
<h3>AGREGAR NUEVO AFILIADO</h3>
<form action="{{ route('afiliado.insertar') }}" class="text-light" method="POST">
  @csrf
  <label for="" style="color:#000000;">Nombre:</label>
  <input
    type="text"
    required="text"
    name="Nombre"
    class="form-control mb-2"
  />
  <label for="" style="color:#000000;">Apellido Paterno:</label>
  <input
    type="text"
    required="text"
    name="ApellidoP"
    class="form-control mb-2"
  />
  <label for="" style="color:#000000;">Apellido Materno:</label>
  <input
    type="text"
    required="text"
    name="ApellidoM"
    class="form-control mb-2"
  />
  <label for="" style="color:#000000;">Fecha de Nacimiento</label>
  <input
    type="date"
    required="date"
    name="FechaNacimiento"
    class="form-control mb-2"
  />
  <label for="" style="color:#000000;">Genero:</label>
  <div class="form-group mb-2">
   <select class="form-control" id="genero" name="Genero">
     <option>Hombre</option>
     <option>Mujer</option>
     <option>Otro</option>
   </select>
 </div>
 <label for="" style="color:#000000;">Estado Civil:</label>
 <div class="form-group mb-2">
  <select class="form-control" id="edocivil" name="EstadoCivil" placeholder="Estado Civil">
    <option>Soltero</option>
    <option>Casado</option>
  </select>
  </div>
  <label for="" style="color:#000000;">Código Postal:</label>
   <input
    type="number"
    required="number"
    name="CodigoPostal"
    class="form-control mb-2"
    />
    <label for="" style="color:#000000;">Colonia:</label>
    <input
      type="text"
      required="text"
      name="Colonia"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">Calle:</label>
    <input
      type="text"
      required="text"
      name="Calle"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">No. exterior:</label>
    <input
      type="text"
      required="text"
      name="NumeroExterior"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">No. interior:</label>
    <input
      type="text"
      required="text"
      name="NumeroInterior"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">Teléfono:</label>
    <input
      type="text"
      required="text"
      name="Telefono"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">Correo electronico:</label>
    <input 
      type="text"
      required="email"
      name="Email"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">CURP:</label>
    <input
      type="text"
      required="texto"
      name="CURP"
      class="form-control mb-2"
    />

 <label style="color:#000000;" for="centroTrabajo">Centro de Trabajo (Para seleccionar varios, mantenga pulsado 'Ctrl')</label>
    <div class="form-group mb-2">
     <select class="form-control" id="centroTrabajo" name="CentroTrabajoID">
       @foreach ($centrosTrabajo as $centroTrabajo)
        <option value='{{$centroTrabajo->id}}'>{{$centroTrabajo->Nombre}}</option>
       @endforeach
     </select>
     </div>
     <label for="" style="color:#000000;">Tipo de plaza:</label>
    <input
      type="text"
      required="text"
      name="TipoPlaza"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">Fecha de ingreso:</label>
    <input
      type="date"
      required="date"
      name="FechaIngreso"
      class="form-control mb-2"
    />
    <label for="" style="color:#000000;">RFC:</label>
    <input
      type="text"
      required="text"
      name="RFC"
      class="form-control mb-2"
    />
    <div class="form-group mb-2">
    <label for="" style="color:#000000;">Estado de actividad:</label>
     <select class="form-control" id="estado" name="Estado">
       @foreach ($estados as $estado)
       <option value="{{$estado->id}}">{{$estado->Estado}}</option>
       @endforeach
     </select>
   </div>

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
