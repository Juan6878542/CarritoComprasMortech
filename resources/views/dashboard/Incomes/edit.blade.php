@extends('dashboard.master')

@section('titulo', 'Editar Ingreso')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <h1>Editar Ingreso</h1>
    <form action="{{ route('income.update', $income->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="provider_id" class="col-sm-2 col-form-label">ID del Proveedor</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="provider_id" id="provider_id" value="{{ $income->provider_id }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">ID del Usuario</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="user_id" id="user_id" value="{{ $income->user_id }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" value="{{ $income->receipt_type }}" maxlength="20" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie del Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" value="{{ $income->receipt_series }}" maxlength="7">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Número del Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" value="{{ $income->receipt_number }}" maxlength="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" id="date" value="{{ $income->date }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" value="{{ $income->tax }}" maxlength="4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="total" id="total" value="{{ $income->total }}" maxlength="11" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="status" value="{{ $income->status }}" maxlength="20" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success mt-3">Actualizar</button>
                <a href="{{ url('dashboard/income') }}" class="btn btn-secondary mt-3">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
