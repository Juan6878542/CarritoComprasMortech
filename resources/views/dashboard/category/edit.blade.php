@extends('dashboard.master')
@section('titulo','Nueva Categoria')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Categoria</h1>
    <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" placeholder="Ingresa el Nombre de la Categoría">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1" {{ $category->state == 1? 'selected' : ''}}>Activo</option>
                    <option value="0" {{ $category->state == 0? 'selected' : ''}}>Inactivo</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ url('dashboard/category') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>