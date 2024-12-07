@extends('dashboard.master')
@section('titulo','Categorías')

@section('contenido')

@include('layouts/navigation')

<div class="container py-4">
    <h1>Listado de Categorías</h1>
    <br>
    <a href="{{url('dashboard/category/create')}}" class="btn btn-success">Nueva Categoría</a> 
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $category)
            <tr>
                <td scope="row">{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->state ? 'activo' : 'inactivo'}}</td>
                <td><a href="{{url('dashboard/category/'.$category->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                <td>
                    <form action="{{ url('dashboard/category/'.$category->id) }}" method="POST">
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
