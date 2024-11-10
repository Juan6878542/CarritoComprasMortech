@extends('dashboard.master')

@section('titulo', 'Listado de Ventas')

@include('layouts.navigation')

<main>
    <div class="container mt-4">
        <h1 class="mb-4">Detalles de Ventas</h1>
        <a href="{{ route('sales_details.create') }}" class="btn btn-success mb-3">Nuevo Registro</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto ID</th>
                    <th>Cliente ID</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales_details as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->sale_id }}</td>
                    <td>{{ $sale->article_id }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->price }}</td>
                    <td>{{ $sale->sale_date }}</td>
                    <td>
                        <a href="{{ route('sales_details.edit', $sale->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('sales_details.destroy', $sale->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
