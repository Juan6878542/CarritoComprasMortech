@extends('dashboard.master')

@section('titulo', 'Editar Venta')

@include('layouts.navigation')

<main>
    <div>
        <h1>Editar Venta</h1>
        <br>
        <form action="{{ route('Sale.update', $sale->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Client_id">Client ID:</label>
                <input type="text" class="form-control" id="Client_id" name="Client_id" value="{{ $sale->Client_id }}" required>
            </div>
            <div class="form-group">
                <label for="User_id">User ID:</label>
                <input type="text" class="form-control" id="User_id" name="User_id" value="{{ $sale->User_id }}" required>
            </div>
            <div class="form-group">
                <label for="receipt_type">Tipo de Recibo:</label>
                <input type="text" class="form-control" id="receipt_type" name="receipt_type" value="{{ $sale->receipt_type }}" required>
            </div>
            <div class="form-group">
                <label for="receipt_series">Serie del Recibo:</label>
                <input type="text" class="form-control" id="receipt_series" name="receipt_series" value="{{ $sale->receipt_series }}">
            </div>
            <div class="form-group">
                <label for="receipt_number">Número del Recibo:</label>
                <input type="text" class="form-control" id="receipt_number" name="receipt_number" value="{{ $sale->receipt_number }}" required>
            </div>
            <div class="form-group">
                <label for="tax">Impuesto:</label>
                <input type="number" step="0.01" class="form-control" id="tax" name="tax" value="{{ $sale->tax }}" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" step="0.01" class="form-control" id="total" name="total" value="{{ $sale->total }}" required>
            </div>
            <div class="form-group">
                <label for="status">Estado:</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $sale->status }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</main>
