@extends('dashboard.master')
@section('titulo','Editar Artículo')
@include('layouts/navigation')
@section('contenido')
<h1>Editar Artículo</h1>
<div class="container py-4">
    <form action="{{ url('dashboard/article/' . $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">ID de Artículo</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $article->id }}" readonly>
        </div>
        <div class="form-group">
            <label for="product">Producto</label>
            <input type="text" class="form-control" id="product" name="product" value="{{ $article->product }}" required>
        </div>
        <div class="form-group">
            <label for="code">Código</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $article->code }}" required>
        </div>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $article->stock }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $article->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="state">Estado</label>
            <select class="form-control" id="state" name="state" required>
                <option value="activo" {{ $article->state == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ $article->state == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category">Categoría</label>
            <select class="form-control" id="category" name="category" required>
                @foreach($category as $category)
                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ url('dashboard/article') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
