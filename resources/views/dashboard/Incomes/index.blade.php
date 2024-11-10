@extends('dashboard.master')
@section('titulo', 'Lista de Ingresos')
@include('layouts.navigation')
@section('contenido')
<div class="container py-4">
    <h1>Lista de Ingresos</h1>
    <br>
    <a href="{{ route('income.create') }}" class="btn btn-success">Nuevo Registro</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID del Proveedor</th>
                <th>ID del Usuario</th>
                <th>Tipo de Recibo</th>
                <th>Serie del Recibo</th>
                <th>Número del Recibo</th>
                <th>Fecha</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incomes as $income)
            <tr>
                <td>{{ $income->id }}</td>
                <td>{{ $income->Provider_id }}</td>
                <td>{{ $income->User_id }}</td>
                <td>{{ $income->receipt_type }}</td>
                <td>{{ $income->receipt_series }}</td>
                <td>{{ $income->receipt_number }}</td>
                <td>{{ $income->date }}</td>
                <td>{{ $income->tax }}</td>
                <td>{{ $income->total }}</td>
                <td>{{ $income->status }}</td>
                <td>
                    <a href="{{ route('income.edit', $income->id) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{ route('income.destroy', $income->id) }}" method="post">
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
@endsection

