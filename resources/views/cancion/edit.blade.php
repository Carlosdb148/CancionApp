@extends('app.base')

@section('content')
<div>
    aquí va el contenido de edit, se presenta el formulario con los campos
    que se han de introducir para editar una bicicleta
</div>
<div>
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">titulo Cancion</label>
            <input value="{{ old('titulo', $cancion->titulo) }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Titulo Cancion">
            <label for="nombre">Interprete</label>
            <input value="{{ old('interprete', $cancion->interprete) }}" required type="text" minlength="2" maxlength="100" class="form-control" id="interprete" name="interprete" placeholder="Interprete">
            <label for="nombre">Autor</label>
            <input value="{{ old('Autor', $cancion->autor) }}" type="text" minlength="2" maxlength="100" class="form-control" id="Autor" name="Autor" placeholder="Autor">
            <label for="nombre">Duracion</label>
            <input value="{{ old('Duracion', $cancion->duracion) }}" type="text" class="form-control" id="Duracion" name="Duracion" placeholder="Duracion">
            <label for="nombre">Genero</label>
            <input value="{{ old('Genero', $cancion->genero) }}" required type="text" minlength="2" maxlength="20" class="form-control" id="Genero" name="Genero" placeholder="Genero">
            <label for="nombre">Album</label>
            <input value="{{ old('Album', $cancion->album) }}" type="text" minlength="2" maxlength="60" class="form-control" id="Album" name="Album" placeholder="Album">
            <label for="nombre">Orden</label>
            <input value="{{ old('Orden', $cancion-> orden) }}" type="number" minlength="1" maxlength="6" class="form-control" id="Orden" name="Orden" placeholder="Orden">
            <label for="nombre">Fecha</label>
            <input value="{{ old('Fecha', $cancion->fecha) }}" required type="date" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit Cancion</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('cancion/' . $cancion->id) }}" class="btn btn-primary">view Cancion</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete Cancion</button>
    </form>
    &nbsp;
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection