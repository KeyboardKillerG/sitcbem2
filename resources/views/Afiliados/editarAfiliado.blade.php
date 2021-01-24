@extends('bootstrap')

@section('master')
  <h3 style="text-transform: uppercase;">EDITAR AFILIADO {{$afiliado->Nombre}}</h3>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{ route('afiliado.update', $afiliado->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="nombre">Nombre:</label>
    <input
      type="text"
      required="text"
      name="Nombre"
      placeholder="Nombre"
      class="form-control mb-2 w-50"
      value="{{ $afiliado->Nombre }}"
    />
    <label for="apellidoPaterno">Apellido Paterno:</label>
    <input
      type="text"
      required="text"
      name="ApellidoP"
      placeholder="Apellido Paterno"
      class="form-control mb-2 w-50"
      value="{{ $afiliado->ApellidoP }}"
    />
    <label for="apellidoMaterno">Apellido Materno:</label>
    <input
      type="text"
      required="text"
      name="ApellidoM"
      placeholder="Apellido Materno"
      class="form-control mb-2 w-50"
      value="{{ $afiliado->ApellidoM }}"
    />
    <label for="nacimiento">Fecha de Nacimiento:</label>
    <input
      type="date"
      required="date"
      name="FechaNacimiento"
      placeholder="Fecha Nacimiento"
      class="form-control mb-2 w-25"
      value="{{ $afiliado->FechaNacimiento }}"
    />
    <label for='genero'>Género:</label>
    <select class="form-control mb-2 w-25" name="Genero" id='genero'>
      <option>Hombre</option>
      <option>Mujer</option>
      <option>Otro</option>
    </select>

    <label for='edocivil'>Estado Civil:</label>
    <select class="form-control mb-2 w-25" name="EstadoCivil" id='edocivil'>
      <option>Casado</option>
      <option>Soltero</option>
    </select>

    <label for='cp'>Codigo Postal:</label>
     <input
     id="cp"
      type="number"
      required="number"
      name="CodigoPostal"
      placeholder="202020"
      class="form-control mb-2 w-25"
      value="{{ $afiliado->CodigoPostal }}"
      />
      <label for="colonia">Colonia o Barrio:</label>
      <input
        type="text"
        required="text"
        name="Colonia"
        placeholder="Colonia"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Colonia }}"
      />
      <label for="calle">Calle:</label>
      <input
        type="text"
        required="text"
        name="Calle"
        placeholder="Calle"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Calle }}"
      />
      <label for="numeroExterior">Número Exterior:</label>
      <input
        type="text"
        required="text"
        name="NumeroExterior"
        placeholder="Numero Exterior"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->NumeroExterior }}"
      />
      <label for="numeroInterior">Número Interior:</label>
      <input
        type="text"
        required="text"
        name="NumeroInterior"
        placeholder="Numero Interior"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->NumeroInterior }}"
      />
      <label for="telefono">Telefono:</label>
      <input
        type="text"
        required="text"
        name="Telefono"
        placeholder="Telefono"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Telefono }}"
      />
      <label for="email">Correo Electronico:</label>
      <input
        type="email"
        required="email"
        name="Email"
        placeholder="Email"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Email }}"
        required
      />
      <label for="curp">CURP:</label>
      <input
        type="text"
        required="text"
        name="CURP"
        placeholder="CURP"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->CURP }}"
      />
      <label for="centroTrabajo">Centro de Trabajo: (Para seleccionar varios, mantenga pulsado 'Ctrl')</label>
       <div class="form-group mb-2">
         <select class="form-control" id="centroTrabajo" name="CentroTrabajoID">
            @foreach ($centrosTrabajo as $centroTrabajo)
             <option value='{{$centroTrabajo->id}}'>{{$centroTrabajo->Nombre}}</option>
            @endforeach
         </select>

         <label for="tipoPlaza">Tipo de Plaza:</label>
      <input
        type="text"
        required="text"
        name="TipoPlaza"
        placeholder="Tipo de plaza"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->TipoPlaza }}"
      />
      <label for="fechaIngreso">Fecha de Ingreso:</label>
      <input
        type="date"
        required="date"
        name="FechaIngreso"
        placeholder="Fecha de Ingreso"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->FechaIngreso }}"
      />
      <label for="RFC">RFC:</label>
      <input
        type="text"
        required="text"
        name="RFC"
        placeholder="RFC"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->RFC }}"
      />

      <div class="form-group mb-2">
       <label for="estado">Estado:</label>
       <select class="form-control" id="estado" name="Estado">
         @foreach ($estados as $estado)
         @if($estado ->id!=$edo->id)
         <option value='{{$estado->id}}'>{{$estado->Estado}}</option>
         @endif
         @endforeach
       </select>
     </div>
     <br>
     
    <button class="btn btn-info btn-block" type="submit">Editar</button>
  </form>
@endsection

