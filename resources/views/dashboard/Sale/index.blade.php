@extends('dashboard.master')

@section('titulo', 'Detalles de Ventas')

@include('layouts.navigation')

<main>
    <div class="container mt-4">
        <h1 class="text-center">Listado de Ventas</h1>
        <div class="text-right mb-3">
            <a href="{{ route('Sale.create') }}" class="btn btn-success">Nuevo Registro</a>
        </div>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Usuario</th>
                    <th>Tipo de Recibo</th>
                    <th>Serie del Recibo</th>
                    <th>Número del Recibo</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->Client_id }}</td>
                    <td>{{ $sale->User_id }}</td>
                    <td>{{ $sale->receipt_type }}</td>
                    <td>{{ $sale->receipt_series }}</td>
                    <td>{{ $sale->receipt_number }}</td>
                    <td>{{ $sale->tax }}</td>
                    <td>{{ $sale->total }}</td>
                    <td>{{ $sale->status }}</td>
                    <td>
                        <a href="{{ route('Sale.edit', $sale->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('Sale.destroy', $sale->id) }}" method="post">
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
