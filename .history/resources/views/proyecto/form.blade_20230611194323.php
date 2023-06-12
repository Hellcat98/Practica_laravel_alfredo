<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Proyecto') }}
            {{ Form::text('NombreProyecto', $proyecto->NombreProyecto, ['class' => 'form-control' . ($errors->has('NombreProyecto') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre del proyecto']) }}
            {!! $errors->first('NombreProyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fuente de Fondos') }}
            {{ Form::text('fuenteFondos', $proyecto->fuenteFondos, ['class' => 'form-control' . ($errors->has('fuenteFondos') ? ' is-invalid' : ''), 'placeholder' => 'Fuente de los fondos']) }}
            {!! $errors->first('fuenteFondos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoPlanificado') }}
            {{ Form::text('MontoPlanificado', $proyecto->MontoPlanificado, ['class' => 'form-control' . ($errors->has('MontoPlanificado') ? ' is-invalid' : ''), 'placeholder' => 'Montoplanificado']) }}
            {!! $errors->first('MontoPlanificado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoPatrocinado') }}
            {{ Form::text('MontoPatrocinado', $proyecto->MontoPatrocinado, ['class' => 'form-control' . ($errors->has('MontoPatrocinado') ? ' is-invalid' : ''), 'placeholder' => 'Montopatrocinado']) }}
            {!! $errors->first('MontoPatrocinado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoFondosPropios') }}
            {{ Form::text('MontoFondosPropios', $proyecto->MontoFondosPropios, ['class' => 'form-control' . ($errors->has('MontoFondosPropios') ? ' is-invalid' : ''), 'placeholder' => 'Montofondospropios']) }}
            {!! $errors->first('MontoFondosPropios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>