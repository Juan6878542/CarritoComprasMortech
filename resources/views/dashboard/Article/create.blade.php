@extends('dashboard.master')

@section('titulo', 'Nuevo Artículo')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <form action="{{ route('article.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa el código del Producto" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa el nombre del Producto" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Categoría</label>
            <div class="col-sm-10">
                <select class="form-control" name="category" id="category" required>
                    <option value="">Seleccionar categoría</option>
                    @foreach($category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Sale_price" class="col-sm-2 col-form-label">Precio Venta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Sale_price" id="Sale_price" placeholder="Ingresa el precio de venta del Producto" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Cantidad Disponible (Stock)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stock" id="stock" placeholder="Ingresa la cantidad disponible en stock" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Ingresa la descripción del Producto" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{ url('dashboard/article') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
