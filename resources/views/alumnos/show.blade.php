@extends('layouts.app')
@section('content')
    <h1 class="bg-success text-white p-2">ALUMNO {{ $alumno->id }}</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td><strong>NOMBRE</strong></td>
                <td>{{ $alumno->nombre }}</td>
            </tr>
            <tr>
                <td><strong>CURSO</strong></td>
                <td>{{ $alumno->curso }}</td>
            </tr>
            <tr>
                <td><strong>NOTA 1</strong></td>
                <td>{{ number_format($alumno->nota1, 2) }}</td>
            </tr>
            <tr>
                <td><strong>NOTA 2</strong></td>
                <td>{{ number_format($alumno->nota2, 2) }}</td>
            </tr>
            <tr>
                <td><strong>PROMEDIO</strong></td>
                <td>{{ number_format(($alumno->nota1 + $alumno->nota2) / 2, 2) }}</td>
            </tr>
            <tr>
                <td><strong>CONDICION</strong></td>
                <td>{{ (($alumno->nota1 + $alumno->nota2) / 2) > 10 ? 'APROBADO' : 'DESAPROBADO' }}</td>
            </tr>
            <tr>
                <td><strong>FECHA REG</strong></td>
                <td>{{ $alumno->created_at->format('d/m/Y') }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection