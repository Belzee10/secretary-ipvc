@php($pagina= 'consejosp')
@extends('templates.main')
@section('title', 'Consejos Populares')
@section('titulo', 'Listado de los Consejos Populares')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Municipio</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($consejosp as $cp)
            <tr>
                <td>{{ $cp->nombre }}</td>
                <td>{{ $cp->municipio->nombre }}</td>
                <td>
                    <a href="{{ route('consejosp.edit', $cp) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                    <a href="{{ route('consejosp.destroy', $cp->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('consejosp.create') }}" class="btn btn-primary"> Crear</a>
@endsection