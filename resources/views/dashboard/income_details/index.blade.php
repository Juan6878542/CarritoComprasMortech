@extends('dashboard.master')

@section('titulo', 'income_details')

@include('layouts.navigation')

<main>
    <div>
        <h1>Listado de Detalles de Ingresos</h1>
        <br>
        <a href="{{route('income_details.create') }}" class="btn btn-success">Nuevo Registro</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ingreso ID</th>
                    <th>Articulo ID</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($income_details as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->income_id }}</td>
                    <td>{{ $detail->article_id }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ $detail->price }}</td>
                    <td>
                        <a href="{{ route('income_details.edit', $detail->id) }}"  class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('income_details.destroy', $detail->id) }}" method="post" style="display:inline;">
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
