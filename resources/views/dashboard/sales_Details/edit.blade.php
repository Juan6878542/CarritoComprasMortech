@extends('dashboard.master')

@section('titulo', 'Editar Venta')

@include('layouts.navigation')

<main>

    <div class="container mt-4">

        <h1 class="mb-4">Editar Venta</h1>

        <form action="{{ route('sales_details.update', $sales_details->id) }}" method="post">

            @csrf
            @method('PUT')

           
            <div class="form-group mb-3">
                <label for="article_id">Articulo ID:</label>
                <input type="text" class="form-control" id="article_id" name="article_id" value="{{ $sales_details->article_id }}" required>
            </div>

            
            <div class="form-group mb-3">
                <label for="quantity">Cantidad:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $sales_details->quantity }}" required>
            </div>

            
            <div class="form-group mb-3">
                <label for="price">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $sales_details->price }}" required>
            </div>

            
            <div class="form-group mb-3">
                <label for="sale_date">Fecha de Venta:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $sales_details->sale_date }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Venta</button>

        </form>
    </div>

</main>
