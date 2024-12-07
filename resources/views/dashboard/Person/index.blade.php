@extends('dashboard.master')

@section('titulo', 'Person')

@include('layouts.navigation')

@section('contenido')
<main>
    <div class="container py-4">
        <h1>Listado de Personas</h1>
        <br>
        <a href="{{ route('person.create') }}" class="btn btn-success">Nuevo Registro</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID Persona</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo de Documento</th>
                    <th>Número de Documento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($person as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->type }}</td>
                    <td>{{ $person->Name }}</td>
                    <td>{{ $person->Last_Name }}</td>
                    <td>{{ $person->Document_Type }}</td>
                    <td>{{ $person->Document_Number }}</td>
                    <td>{{ $person->Adress }}</td>
                    <td>{{ $person->Phone }}</td>
                    <td>{{ $person->Email }}</td>
                    <td>
                        <a href="{{ route('person.edit', $person->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('person.destroy', $person->id) }}" method="post" style="display:inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
