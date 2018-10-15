@php($pagina = 'grupos')
@extends('templates.main')
@section('title', 'Grupos')
@section('titulo', 'Listado de Grupos')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Número</th>
            <th>Grados</th>
            <th>Unidad</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grupos as $g)
            <tr>
                <td>{{ $g->numero }}</td>
                <td>{{ $g->grado->numero }}</td>
                <td>{{ $g->grado->unidad->numero }}</td>
                <td>
                    <a href="{{ route('grupos.edit', $g->id) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('grupos.destroy', $g->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('grupos.create') }}" class="btn btn-primary"> Crear</a>
@endsection