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

            </tr>
        @endforeach
    </tbody>
</table>