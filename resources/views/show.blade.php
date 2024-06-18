@extends('layout')
@section('title', 'Detalles de ' . $persona->cPerNombre . ' ' . $persona->cPerApellido)

@section('content')
<h2>Detalles de la Persona</h2>
<table class="table">
    <tbody>
        <tr>
            <th>Código:</th>
            <td>{{ $persona->nPerCodigo }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $persona->cPerNombre }}</td>
        </tr>
        <tr>
            <th>Apellido:</th>
            <td>{{ $persona->cPerApellido }}</td>
        </tr>
        <tr>
            <th>Dirección:</th>
            <td>{{ $persona->cPerDireccion }}</td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento:</th>
            <td>{{ $persona->dPerFecNac }}</td>
        </tr>
        <tr>
            <th>Edad:</th>
            <td>{{ $persona->nPerEdad }} años</td>
        </tr>
        <tr>
            <th>Sexo:</th>
            <td>{{ $persona->cPerSexo == 'Masculino' ? 'Masculino' : 'Femenino' }}</td>
        </tr>
        <tr>
            <th>Sueldo:</th>
            <td>${{ number_format($persona->nPerSueldo, 2) }}</td>
        </tr>
        <tr>
            <th>Código Aleatorio:</th>
            <td>{{ $persona->cPerRnd }}</td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td>{{ $persona->nPerEstado == 1 ? '1' : '2' }}</td>
        </tr>
        <tr>
            <th>Creado:</th>
            <td>{{ $persona->created_at->diffForHumans() }}</td>
        </tr>
    </tbody>
</table>
@endsection
