@php($pagina = 'usuarios')
@extends('templates.main')
@section('title', 'Usuarios')
@section('titulo', 'Listado de Usuarios')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>apellidos</th>
            <th>Usuario</th>
            <th>rol</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $u)
            <tr>
                <td>{{ $u->name }}</td>
                <td>{{ $u->apellidos }}</td>
                <td>{{ $u->user }}</td>
                <td>{{ $u->rol }}</td>
                <td>
                    <a href="{{ route('usuarios.show', $u->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a> |
                    <a href="{{ route('usuarios.edit', $u->id) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('usuarios.destroy', $u->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary"> Crear</a>
@endsection