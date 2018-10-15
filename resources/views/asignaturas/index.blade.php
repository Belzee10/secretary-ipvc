@php($pagina= 'asignaturas')
@extends('templates.main')
@section('title', 'Asignaturas')
@section('titulo', 'Listado de Asignaturas')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Grado</th>
            <th>Cantidad de turnos</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($asignaturas as $a)
            <tr>
                <td>{{ $a->nombre }}</td>
                <td>{{ $a->grado }}</td>
                <td>{{ $a->cantidad_turnos }}</td>

                <td>
                    <a href="{{ route('asignaturas.edit', $a) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('asignaturas.destroy', $a->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('asignaturas.create') }}" class="btn btn-primary"> Crear</a>
@endsection