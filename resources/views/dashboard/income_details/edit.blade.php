@extends('dashboard.master')

@section('titulo', 'Editar Detalle de Ingreso')

@include('layouts.navigation')

<main>
    <div>
        <h1>Editar Detalle de Ingreso</h1>
        <br>
        <form action="{{ route('income_details.update', $incomeDetail->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="income_id">Income ID:</label>
                <input type="text" class="form-control" id="income_id" name="income_id" value="{{ $incomeDetail->income_id }}" required>
            </div>
            <div class="form-group">
                <label for="article_id">Article ID:</label>
                <input type="text" class="form-control" id="article_id" name="article_id" value="{{ $incomeDetail->article_id }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $incomeDetail->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $incomeDetail->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</main>
