@php($pagina= 'cursos')
@extends('templates.main')
@section('title', 'Cursos')
@section('titulo', 'Listado de Cursos')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Ano inicio</th>
            <th>Ano fin</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cursos as $c)
            <tr>
                <td>{{ $c->anno_inicio }}</td>
                <td>{{ $c->anno_fin }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $c) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('cursos.destroy', $c->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary"> Crear</a>
@endsection