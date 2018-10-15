@php($pagina= 'directores')
@extends('templates.main')
@section('title', 'Directores')
@section('titulo', 'Listado de Directores')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($directores as $d)
            <tr>
                <td>{{ $d->nombre }}</td>
                <td>
                    <a href="{{ route('directores.edit', $d) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('directores.destroy', $d->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('directores.create') }}" class="btn btn-primary"> Crear</a>
@endsection