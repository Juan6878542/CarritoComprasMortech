@extends('dashboard.master')

@section('titulo', 'Nuevo Ingreso')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <form action="{{ route('income.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="Provider_id" class="col-sm-2 col-form-label">ID del Proveedor</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Provider_id" id="Provider_id" placeholder="Ingresa el ID del proveedor" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="User_id" class="col-sm-2 col-form-label">ID del Usuario</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="User_id" id="User_id" placeholder="Ingresa el ID del usuario" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el tipo de recibo" maxlength="20" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie del Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa la serie del recibo" maxlength="7">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Número del Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el número del recibo" maxlength="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" placeholder="Ingresa el impuesto" maxlength="4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="total" id="total" placeholder="Ingresa el total" maxlength="11" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="status" placeholder="Ingresa el estado" maxlength="20" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success mt-3">Registrar</button>
                <a href="{{ url('dashboard/income') }}" class="btn btn-secondary mt-3">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
