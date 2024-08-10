@extends('dashboard.master')

@section('titulo', 'Editar Persona')

@include('layouts.navigation')

<main>
    <div>
        <h1>Editar Persona</h1>
        <form action="{{ route('person.update', $person->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="type">Selecciona una opción</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="Persona natural">Persona natural</option>
                    <option value="Empresa">Empresa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Name">Nombres</label>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $person->Name }}" required>
            </div>
            <div class="form-group">
                <label for="Last_Name">Apellidos</label>
                <input type="text" class="form-control" id="Last_Name" name="Last_Name" value="{{ $person->Last_Name }}" required>
            </div>
            <div class="form-group">
                <label for="Document_Type">Tipo de documento</label>
                <select class="form-control" id="Document_Type" name="Document_Type" required>
                    <option value="cc">Cédula de ciudadanía</option>
                    <option value="nit">NIT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Document_Number">Número de documento</label>
                <input type="text" class="form-control" id="Document_Number" name="Document_Number" value="{{ $person->Document_Number }}" required>
            </div>
            <div class="form-group">
                <label for="Adress">Dirección de residencia</label>
                <input type="text" class="form-control" id="Adress" name="Adress" value="{{ $person->Adress }}" required>
            </div>
            <div class="form-group">
                <label for="Phone">Número de teléfono</label>
                <input type="tel" class="form-control" id="Phone" name="Phone" value="{{ $person->Phone }}" required>
            </div>
            <div class="form-group">
                <label for="Email">Correo electrónico</label>
                <input type="email" class="form-control" id="Email" name="Email" value="{{ $person->Email }}" required>
            </div>

           
            <button type="submit" class="btn btn-primary">Modificar</button>

            
            <a href="{{ route('person.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
</main>

