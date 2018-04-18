@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nuevo Concursante</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('draws.index') }}"> Atrás</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'draws.store','method'=>'POST')) !!}
         @include('draws.form')
    {!! Form::close() !!}
@endsection
@section('scripts')
    <script>
      $('#id_depeartament').on('change',function(e){
             var id=e.target.value;
            $.get('/city/'+id, function(data){
                $('#id_city').empty();
                $('#id_city').append('<option value="">Seleccione</option>');
                 $.each(data,function(index,city){
                   $('#id_city').append('<option value="'+city.id+'">'+city.name+'</option>');
                 });
           });
          });
    </script>
@endsection
