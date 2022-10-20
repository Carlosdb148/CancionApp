@extends('app.base')

@section('content')
<div>
    aquí se muestra en detalle los datos de la bicicleta cuyo id es {{ $id }}
    <br>
    <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('persona/' . $id . '/edit') }}" class="btn btn-primary">edit bike</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete bike</button>
</div>
<form action="{{ url('persona/' . $id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection