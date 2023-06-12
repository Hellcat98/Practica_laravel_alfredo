<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                   
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
                                            <td>
                                                
                                                {{ $i = 0, ++$i }}</td>
                                            
											<td>{{ $proyecto->NombreProyecto }}</td>
											<td>{{ $proyecto->fuenteFondos }}</td>
											<td>{{ $proyecto->MontoPlanificado }}</td>
											<td>{{ $proyecto->MontoPatrocinado }}</td>
											<td>{{ $proyecto->MontoFondosPropios }}</td>

                                           
                                                </form>
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
</body>
</html>
