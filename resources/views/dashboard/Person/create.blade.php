@extends('dashboard.master')

@section('titulo', 'Nueva Persona')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <form action="{{ route('person.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" Name="Name" id="Name" placeholder="Ingresa el nombre" required>
                @error('Name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="Type" class="col-sm-2 col-form-label">Tipo persona</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Type" id="Type" placeholder="Ingresa el tipo persona" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="Document_Type" id="Document_Type" required>
                    <option value="">Seleccionar documento</option>
                    <option value="1">Cédula</option>
                    <option value="0">NIT</option>
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
            <label for="Email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="Email" class="form-control" name="Email" id="Email" placeholder="Ingresa el email" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Ingresa el teléfono" required>
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
