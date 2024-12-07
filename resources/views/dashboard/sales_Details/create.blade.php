@extends('dashboard.master')

@section('titulo', 'Crear Detalle de Venta')

@include('layouts.navigation')

<main>
    <div class="container mt-5">
        <h1>Crear Detalle de Venta</h1>
        <br>

      
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sales_details.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="sale_id">Venta ID:</label>
                <input type="text" class="form-control" id="sale_id" name="sale_id" value="{{ old('sale_id') }}" required>
                <small class="form-text text-muted">El ID de la venta debe existir en la tabla de ventas.</small>
            </div>

            <div class="form-group">
                <label for="article_id">Articulo ID:</label>
                <input type="text" class="form-control" id="article_id" name="article_id" value="{{ old('article_id') }}" required>
                <small class="form-text text-muted">El ID del artículo debe existir en la tabla de artículos.</small>
            </div>

            <div class="form-group">
                <label for="quantity">Cantidad:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                <small class="form-text text-muted">Cantidad de artículos en el detalle.</small>
            </div>

            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
                <small class="form-text text-muted">Precio del artículo.</small>
            </div>

            <div class="form-group">
                <label for="discount">Descuento:</label>
                <input type="number" class="form-control" id="discount" name="discount" step="0.01" value="{{ old('discount') }}">
                <small class="form-text text-muted">Descuento aplicado al artículo (opcional).</small>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Detalle</button>
        </form>

    </div>
</main>
