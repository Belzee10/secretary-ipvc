@php($pagina = 'unidades')
@extends('templates.main')
@section('title', 'Unidades')
@section('titulo', 'Listado de Unidades')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $u)
                <tr>
                    <td>{{ $u->numero }}</td>
                    <td>
                        <a href="{{ route('grados.index', $u->id) }}"><span class="glyphicon glyphicon-align-center"></span></a> |
                        <a href="{{ route('unidades.edit', $u->id) }}"><span class="glyphicon glyphicon-edit"></span></a> |
                        <a href="{{ route('unidades.destroy', $u->id) }}" onclick="return confirm('Seguro deseas eliminar?')"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('unidades.create') }}" class="btn btn-primary"> Crear</a>
@endsection