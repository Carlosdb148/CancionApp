@extends('app.base')

@section('content')
<div>
    aquí va el contenido de create, se presenta el formulario con los campos
    que se han de introducir para dar de alta una bicicleta nueva
</div>
<div>
    <form action="{{ url('persona') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">DNI Persona</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="10" class="form-control" id="name" name="name" placeholder="dni">
            <label for="nombre">Nombre Persona</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Nombre persona">
            <label for="nombre">Apellidos Persona</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Apellidos persona">
            <label for="nombre">Telefono Persona</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Telefono persona">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection