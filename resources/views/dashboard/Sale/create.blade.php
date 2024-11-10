@extends('dashboard.master')

@section('titulo', 'Crear Venta')

@include('layouts.navigation')

<main>
    <div>
        <h1>Crear Venta</h1>
        <br>
        <form action="{{ route('Sale.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="Client_id">Client ID:</label>
                <input type="text" class="form-control" id="Client_id" name="Client_id" required>
            </div>
            <div class="form-group">
                <label for="User_id">User ID:</label>
                <input type="text" class="form-control" id="User_id" name="User_id" required>
            </div>
            <div class="form-group">
                <label for="receipt_type">Tipo de Recibo:</label>
                <input type="text" class="form-control" id="receipt_type" name="receipt_type" required>
            </div>
            <div class="form-group">
                <label for="receipt_series">Serie del Recibo:</label>
                <input type="text" class="form-control" id="receipt_series" name="receipt_series">
            </div>
            <div class="form-group">
                <label for="receipt_number">Número del Recibo:</label>
                <input type="text" class="form-control" id="receipt_number" name="receipt_number" required>
            </div>
            <div class="form-group">
                <label for="tax">Impuesto:</label>
                <input type="number" step="0.01" class="form-control" id="tax" name="tax" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" step="0.01" class="form-control" id="total" name="total" required>
            </div>
            <div class="form-group">
                <label for="status">Estado:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</main>
