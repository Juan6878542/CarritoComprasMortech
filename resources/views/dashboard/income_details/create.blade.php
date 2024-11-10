@extends('dashboard.master')

@section('titulo', 'Crear Detalle de Ingreso')

@include('layouts.navigation')

<main>
    <div>
        <h1>Crear Detalle de Ingreso</h1>
        <br>
        <form action="{{ route('income_details.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="income_id">Ingreso ID:</label>
                <input type="text" class="form-control" id="income_id" name="income_id" required>
            </div>
            <div class="form-group">
                <label for="article_id">Articulo ID:</label>
                <input type="text" class="form-control" id="article_id" name="article_id" required>
            </div>
            <div class="form-group">
                <label for="quantity">Cantidad:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</main>
