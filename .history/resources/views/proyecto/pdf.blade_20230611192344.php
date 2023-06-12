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
            margin-top: 20px;
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
        
        .logo-container {
            margin-bottom: 20px;
        }
        
        .logo-image {
            width: 85px;
            height: auto;
        }

        h3 {
            text-align: center;
            margin-top: 0;
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    <div class="logo-container">
        <img class="logo-image" src="https://seeklogo.com/images/G/gobierno-de-el-salvador-logo-6E68A237D9-seeklogo.com.png" alt="Logo">
        <h3>Reporte de proyectos</h3>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre del proyecto</th>
                <th>Fuente de fondos</th>
                <th>Monto planificado</th>
                <th>Monto patrocinado</th>
                <th>Monto de fondos propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
        
            <tr>
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
<p>Proyecto hecho por: Gerardo Alfredo Fernandez Estevez</p>
</html>
