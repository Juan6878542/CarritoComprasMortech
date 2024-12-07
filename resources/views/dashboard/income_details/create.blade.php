@extends('dashboard.master')

@section('titulo', 'Crear Detalle de Ingreso')

@include('layouts.navigation')

@section('contenido')
<main>
    <div class="container py-4">
        <h1>Crear Detalle de Ingreso</h1>
        <br>
        <form action="{{ route('income_details.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="income_id" class="col-sm-2 col-form-label">Ingreso ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="income_id" name="income_id" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="article_id" class="col-sm-2 col-form-label">Artículo ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="article_id" name="article_id" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="quantity" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
