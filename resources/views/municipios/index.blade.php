@php($pagina= 'municipios')
@extends('templates.main')
@section('title', 'Municipios')
@section('titulo', 'Listado de Municipios')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($municipios as $m)
            <tr>
                <td>{{ $m->nombre }}</td>
                <td>
                    <a href="{{ route('municipios.edit', $m) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('municipios.destroy', $m->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('municipios.create') }}" class="btn btn-primary"> Crear</a>
@endsection