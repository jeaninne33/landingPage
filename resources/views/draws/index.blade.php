@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listados de Concursantes</h2>
            </div>
            <hr>
            <br/>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('draws.create') }}"> Nuevo Concursante</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="export-draw" target="_blank"> Exportar Registros en Excel</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
             <th>Departamento</th>
              <th>Sorteo</th>
            <th width="180px">Fecha y hora Creado</tsh>
        </tr>
    @foreach ($participants as $partic)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $partic->name}}</td>
        <td>{{ $partic->lastname}}</td>
        <td>{{ $partic->email}}</td>
        <td>{{ $partic->findDepartament($departament,$partic->id_depeartament)}}</td>
        <td>{{ $partic->draw->name}}</td>
        <td>{{ $partic->created_at}}</td>
    </tr>
    @endforeach
    </table>
    {!! $participants->render() !!}
@endsection