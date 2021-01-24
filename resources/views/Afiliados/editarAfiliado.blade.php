@extends('bootstrap')

@section('master')
  <h1>Editar</h1>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{ route('afiliado.update', $afiliado->id) }}" method="POST">
    @method('PUT')
    @csrf

    <input
      type="text"
      required="text"
      name="Nombre"
      placeholder="Nombre"
      class="form-control mb-2 w-50"
      value="{{ $afiliado->Nombre }}"
    />
    <input
      type="text"
      required="text"
      name="ApellidoP"
      placeholder="Apellido Paterno"
      class="form-control mb-2 w-50"
      value="{{ $afiliado->ApellidoP }}"
    />
    <input
      type="text"
      required="text"
      name="ApellidoM"
      placeholder="Apellido Materno"
      class="form-control mb-2 w-50"
      value="{{ $afiliado->ApellidoM }}"
    />
    <input
      type="date"
      required="date"
      name="FechaNacimiento"
      placeholder="Fecha Nacimiento"
      class="form-control mb-2 w-25"
      value="{{ $afiliado->FechaNacimiento }}"
    />
    <label for='genero'>Genero:</label>
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

      <input
        type="text"
        required="text"
        name="Colonia"
        placeholder="Colonia"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Colonia }}"
      />

      <input
        type="text"
        required="text"
        name="Calle"
        placeholder="Calle"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Calle }}"
      />

      <input
        type="text"
        required="text"
        name="NumeroExterior"
        placeholder="Numero Exterior"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->NumeroExterior }}"
      />
      <input
        type="text"
        required="text"
        name="NumeroInterior"
        placeholder="Numero Interior"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->NumeroInterior }}"
      />
      <input
        type="text"
        required="text"
        name="Telefono"
        placeholder="Telefono"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Telefono }}"
      />
      <input
        type="text"
        required="email"
        name="Email"
        placeholder="Email"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->Email }}"
      />
      <input
        type="text"
        required="text"
        name="CURP"
        placeholder="CURP"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->CURP }}"
      />
      <label for="centroTrabajo">Centro de Trabajo (Para seleccionar varios, mantenga pulsado 'Ctrl')</label>
       <div class="form-group mb-2">
         <select class="form-control" id="centroTrabajo" name="CentroTrabajoID">
            @foreach ($centrosTrabajo as $centroTrabajo)
             <option value='{{$centroTrabajo->id}}'>{{$centroTrabajo->Nombre}}</option>
            @endforeach
         </select>


      <input
        type="text"
        required="text"
        name="TipoPlaza"
        placeholder="Tipo de plaza"
        class="form-control mb-2  w-25"
        value="{{ $afiliado->TipoPlaza }}"
      />
      <input
        type="date"
        required="date"
        name="FechaIngreso"
        placeholder="Fecha de Ingreso"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->FechaIngreso }}"
      />
      <input
        type="text"
        required="text"
        name="RFC"
        placeholder="RFC"
        class="form-control mb-2 w-25"
        value="{{ $afiliado->RFC }}"
      />

      <div class="form-group mb-2">
       <label for="estado">Estado</label>
       <select class="form-control" id="estado" name="Estado">
         @foreach ($estados as $estado)
         @if($estado ->id!=$edo->id)
         <option value='{{$estado->id}}'>{{$estado->Estado}}</option>
         @endif
         @endforeach
       </select>
     </div>


   

     
    <button class="btn btn-info btn-block" type="submit">Editar</button>
  </form>
@endsection
