@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyecto') }}
                            </span>

                            
                              <div class="float-right">
                                <a href="{{ route('generar_pdf') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                  {{ __('Generar PDF del listado del proyectos') }}
                                </a>
                              </div>
                              <div class="float-right">
                                <a href="{{ route('proyecto.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar nuevo proyecto') }}
                                </a>
                              </div>
                              
                        </div>
                        
                        
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre del proyecto</th>
										<th>Fuente de fondos</th>
										<th>Monto planificado</th>
										<th>Monto patrocinado</th>
										<th>Monto de fondos propios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $proyecto->NombreProyecto }}</td>
											<td>{{ $proyecto->fuenteFondos }}</td>
											<td>{{ $proyecto->MontoPlanificado }}</td>
											<td>{{ $proyecto->MontoPatrocinado }}</td>
											<td>{{ $proyecto->MontoFondosPropios }}</td>

                                            <td>
                                                <form action="{{ route('proyecto.destroy',$proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyecto.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyecto.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
