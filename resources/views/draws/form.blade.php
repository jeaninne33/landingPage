<div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cédula:</strong>
            {!! Form::text('document', null, array('placeholder' => 'Cédula','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            {!! Form::text('lastname', null, array('placeholder' => 'Apellido','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Celular:</strong>
            {!! Form::text('phone', null, array('placeholder' => 'Celular','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Departamento:</strong>
            <select class="form-control" id="id_depeartament" name="id_depeartament">
                 <option value="" selected="selecteds">Seleccione</option>
                @foreach($departament as $depart)
                <option value="{{$depart['id']}}">{{$depart['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ciudad:</strong>
            <select class="form-control" id="id_city" name="id_city">
                 <option value="" selected="selecteds">Seleccione</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="yes" name="habeas" id="habeas" title="Haz Clic Aqui">
                    Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales                </label>
            </div>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>