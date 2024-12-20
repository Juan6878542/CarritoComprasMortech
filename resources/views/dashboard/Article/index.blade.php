@extends('dashboard.master')

@section('titulo', 'Artículos')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <h1>Listado de Artículos</h1>
    <br>
    <a href="{{ url('dashboard/article/create') }}" class="btn btn-success"> Nuevo artículo</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id Producto</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio de Venta</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Categoría</th>
                <th>Fecha Creación</th>
                <th>Fecha Actualización</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($article as $article)
            <tr>
                <td scope="row">{{ $article->id }}</td>
                <td>{{ $article->code }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ $article->Sale_Price }}</td>
                <td>{{ $article->stock }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->State ? 'activo' : 'inactivo' }}</td>
                <td>{{ $article->category->name }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
                <td>
                    <a href="{{ url('dashboard/article/' . $article->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{ url('dashboard/article/' . $article->id) }}" method="POST">
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
