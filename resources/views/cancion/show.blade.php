@extends('app.base')

@section('content')
<div>
    Id : {{ $cancion->id }} <br>
    Titulo : {{$cancion->titulo}} <br>
    Interprete : {{$cancion->interprete}}<br>
    Autor : {{$cancion->autor}}<br>
    Duracion : {{$cancion->duracion}}<br>
    Genero : {{$cancion->genero}}<br>
    Album : {{$cancion->album}}<br>
    Orden : {{$cancion->orden}}<br>
     Fecha : {{$cancion->fecha}}<br>
    <br>
    <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('cancion/' . $cancion->id . '/edit') }}" class="btn btn-primary">edit Cancion</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete bike</button>
</div>
<form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection