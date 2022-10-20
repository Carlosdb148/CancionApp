@extends('app.base')

@section('content')
    <div class="row" style="margin-top: 8px;">
    aquí va el contenido del index, por ejemplo, listado de bicicletas,
    desde el que se pueden editar, consultar y borrar las bicicletas
    y un enlace para crear bicicletas
    </div>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="personTable">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">dni</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellidos</th>
                    <th scope="col">telefono</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $person)
                <tr>
                    <td>
                        {{$person->id}}
                    </td>
                    <td>
                        {{$person->dni}}
                    </td>
                    <td>
                        {{$person->nombre}}
                    </td>
                    <td>
                        {{$person->apellidos}}
                    </td>
                    <td>
                        {{$person->telefono}}
                    </td>
                    <td>
                        <a href="javascript: void(0);"
                            class = "deleteRow"
                            data-name="bici 1"
                            data-url="{{ url('persona/1') }}">
                            delete
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('persona/' . $person->id .'/edit') }}">edit</a>
                    </td>
                    <td>
                        <a href="{{ url('persona/' . $person->id) }}">show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ url('persona/create') }}" class="btn btn-success">add persona</a>
    </div>
@endsection

@section('scripts')
<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
<script src="{{ url('assets/js/bikeindex.js') }}"></script>
@endsection