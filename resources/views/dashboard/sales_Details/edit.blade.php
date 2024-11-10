@extends('dashboard.master')

@section('titulo', 'Editar Venta')

@include('layouts.navigation')

<main>

    <div class="container mt-4">

        <h1 class="mb-4">Editar Venta</h1>

        <form action="{{ route('sales_details.update', $sale->id) }}" method="post">

            @csrf
            @method('PUT')

            <!-- Campo Product ID -->
            <div class="form-group mb-3">
                <label for="product_id">Product ID:</label>
                <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $sale->product_id }}" required>
            </div>

            <!-- Campo Customer ID -->
            <div class="form-group mb-3">
                <label for="customer_id">Customer ID:</label>
                <input type="text" class="form-control" id="customer_id" name="customer_id" value="{{ $sale->customer_id }}" required>
            </div>

            <!-- Campo Quantity -->
            <div class="form-group mb-3">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $sale->quantity }}" required>
            </div>

            <!-- Campo Price -->
            <div class="form-group mb-3">
                <label for="price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $sale->price }}" required>
            </div>

            <!-- Campo Sale Date -->
            <div class="form-group mb-3">
                <label for="sale_date">Sale Date:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $sale->sale_date->format('Y-m-d') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Venta</button>

        </form>
    </div>

</main>
