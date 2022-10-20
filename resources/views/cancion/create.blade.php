@extends('app.base')

@section('content')
<div>
    aquí va el contenido de create, se presenta el formulario con los campos
    que se han de introducir para dar de alta una bicicleta nueva
</div>
<div>
    <form action="{{ url('cancion') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Titulo</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="80" class="form-control" id="titulo" name="titulo" placeholder="Titulo cancion">
            <label for="nombre">Interprete</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="interprete" name="interprete" placeholder="Interprete">
            <label for="nombre">Autor</label>
            <input value="{{ old('name') }}" type="text" minlength="2" maxlength="100" class="form-control" id="Autor" name="Autor" placeholder="Autor">
            <label for="nombre">Duracion</label>
            <input value="{{ old('name') }}" type="text" class="form-control" id="Duracion" name="Duracion" placeholder="Duracion">
            <label for="nombre">genero</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="20" class="form-control" id="genero" name="genero" placeholder="Genero">
            <label for="nombre">Album</label>
            <input value="{{ old('name') }}" type="text" minlength="2" maxlength="60" class="form-control" id="Album" name="Album" placeholder="Album">
            <label for="nombre">Orden</label>
            <input value="{{ old('name') }}" type="number" minlength="1" maxlength="6" class="form-control" id="Orden" name="Orden" placeholder="Orden">
            <label for="nombre">Fecha</label>
            <input value="{{ old('name') }}" required type="text" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection