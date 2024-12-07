@extends('dashboard.master')

@section('titulo', 'Editar Venta')

@include('layouts.navigation')

@section('contenido')
<main>
    <div class="container py-4">
        <h1>Editar Venta</h1>
        <br>
        <form action="{{ route('Sale.update', $sale->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="Client_id" class="col-sm-2 col-form-label">Client ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Client_id" name="Client_id" value="{{ $sale->Client_id }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="User_id" class="col-sm-2 col-form-label">User ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="User_id" name="User_id" value="{{ $sale->User_id }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de Recibo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="receipt_type" name="receipt_type" value="{{ $sale->receipt_type }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="receipt_series" class="col-sm-2 col-form-label">Serie del Recibo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="receipt_series" name="receipt_series" value="{{ $sale->receipt_series }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="receipt_number" class="col-sm-2 col-form-label">Número del Recibo:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="receipt_number" name="receipt_number" value="{{ $sale->receipt_number }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tax" class="col-sm-2 col-form-label">Impuesto:</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" id="tax" name="tax" value="{{ $sale->tax }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="total" class="col-sm-2 col-form-label">Total:</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" id="total" name="total" value="{{ $sale->total }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Estado:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" name="status" value="{{ $sale->status }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
