@php($pagina = 'unidades')
@extends('templates.main')
@section('title', 'Grados')
@section('titulo', 'Listado de Grados')
@section('contenido')
    <h3>Unidad: {{ $unidad->numero }}</h3>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Número</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grados as $g)
            <tr>
                <td>{{ $g->numero }}</td>
                <td>
                    <a href="{{ route('grados.edit', $g->id) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('grados.destroy', $g->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('grados.create',$unidad->id) }}" class="btn btn-primary"> Crear</a>
@endsection