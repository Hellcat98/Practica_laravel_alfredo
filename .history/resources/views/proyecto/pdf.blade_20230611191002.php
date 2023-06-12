<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de proyectos</title>
</head>
<body>
    @extends('layouts.app')


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
                                    @php
    $i = 0;
@endphp
                                        <tr>
                                            <td>
                                                
                                                {{ ++$i }}</td>
                                            
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
            </div>
        </div>
    </div>
</body>
</html>
