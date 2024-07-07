@extends('dashboard.master')
@section('titulo','Person')
@include('layouts/navigation')
<main>
    <div>
    <h1>Listado de Personas</h1>
    <br>
    <a href="{{url('dashboard/person/create')}}" class="btn btn-success">Nuevo Registro</a> 
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo persona</th>
                <th>Numero de documento</th>
                <th>Tipo de documento</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $person)
            <tr>
                <td scope="row">{{$person->Name}}</td>
                <td>{{$person->Last_Name}}</td>
                <td>{{$person->type}}</td>
                <td>{{$person->Document_Number}}</td>
                <td>{{$person->Document_Type?_('cedula') : _('nit')}}</td>
                <td>{{$person->Adress}}</td>
                <td>{{$person->Email}}</td>
                <td>{{$person->Phone}}</td>
                <td><a href="{{url('dashboard/person/'.$person->Name.'/edit')}}" class="bi bi-pencil-fill"></></td>
                <td>
                 <form action= "{{ url('dashboard/person/'.$person->Name) }}" method="post">
                     @method("DELETE")
                     @csrf
                     <button class="bi bi-eraser-fill" type="submit"></button>
                 </form>
            </td>
        </tr>
        <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


    </div>

</main>
@section('contenido')
