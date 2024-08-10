@extends('dashboard.master')

@section('titulo', 'Nueva Persona')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <form action="{{ route('person.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Selecciona una opción</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="type" required>
                    <option value="">Selecciona una opción</option>
                    <option value="natural">Personal natural</option>
                    <option value="Empresa">Empresa</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Name" class="col-sm-2 col-form-label">Nombres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Ingresa los nombres" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingresa los apellidos" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="Document_Type" id="Document_Type" required>
                    <option value="">Selecciona un tipo de documento</option>
                    <option value="cc">Cédula de ciudadanía</option>
                    <option value="nit">NIT</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Número de documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingresa el número de documento" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Dirección de residencia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Ingresa la dirección" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Número de teléfono</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Ingresa el número de teléfono" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo electrónico</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Ingresa el correo electrónico" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success mt-3">Registrar</button>
                <a href="{{ url('dashboard/person') }}" class="btn btn-secondary mt-3">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
