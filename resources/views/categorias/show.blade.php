@extends('layouts.app')

@section('title', 'Detalles de la Categoría')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalles de la Categoría</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><strong>Nombre:</strong> {{ $categoria->nombre }}</h5>
            <p class="card-text"><strong>Horas Personales:</strong> {{ $categoria->h_personales }}</p>
        </div>
    </div>

    <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Volver</a>
    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning mt-3">Editar</a>

    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">Eliminar</button>
    </form>
</div>
@endsection
