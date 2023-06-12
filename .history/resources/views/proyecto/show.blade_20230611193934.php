@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Datos del ') }} proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyecto.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del proyecto:</strong>
                            {{ $proyecto->NombreProyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Fuente de fondos:</strong>
                            {{ $proyecto->fuenteFondos }}
                        </div>
                        <div class="form-group">
                            <strong>Monto planificado:</strong>
                            {{ $proyecto->MontoPlanificado }}
                        </div>
                        <div class="form-group">
                            <strong>Monto patrocinado:</strong>
                            {{ $proyecto->MontoPatrocinado }}
                        </div>
                        <div class="form-group">
                            <strong>Monto de fondos propios:</strong>
                            {{ $proyecto->MontoFondosPropios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
