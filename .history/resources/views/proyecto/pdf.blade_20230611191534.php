<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de proyectos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        thead {
            background-color: #f2f2f2;
        }
        
        th {
            text-align: left;
        }
        
        .corner-image {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    <img class="corner-image" src="http://ejemplo.com/ruta/de/la/imagen.jpg" alt="Imagen">
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nombre del proyecto</th>
                <th>Fuente de fondos</th>
                <th>Monto planificado</th>
                <th>Monto patrocinado</th>
                <th>Monto de fondos propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
            @php
                $i = 0;
            @endphp
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
</body>
</html>
