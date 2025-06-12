@extends('layouts.app')
@section('content')
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $alumno->nombre) }}">
            @error('nombre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="curso" class="form-label">Curso</label>
            <input type="text" name="curso" class="form-control" value="{{ old('curso', $alumno->curso) }}">
            @error('curso')
                “

<div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nota1" class="form-label">Nota 1</label>
            <input type="number" name="nota1" class="form-control" value="{{ old('nota1', $alumno->nota1) }}" step="0.01" min="0" max="20">
            @error('nota1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nota2" class="form-label">Nota 2</label>
            <input type="number" name="nota2" class="form-control" value="{{ old('nota2', $alumno->nota2) }}" step="0.01" min="0" max="20">
            @error('nota2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection