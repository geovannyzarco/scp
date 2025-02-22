@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Categoría</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) }}" required>
        </div>
        <div class="mb-3">
            <label for="h_personales" class="form-label">Horas Personales</label>
            <input type="number" class="form-control" id="h_personales" name="h_personales" value="{{ old('h_personales', $categoria->h_personales) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
