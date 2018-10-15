@php($pagina = 'usuarios')
@extends('templates.main')
@section('title', 'Usuarios')
@section('titulo', 'Datos del Usuario')
@section('contenido')
    <table id="example1" class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>{{$user->apellidos}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>{{$user->user}}</td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>{{$user->rol}}</td>
            </tr>
            @if($user->unidad != null)
            <tr>
                <th>Unidad</th>
                <td>{{$user->unidad}}</td>
            </tr>
            @endif
            <tr>
                <th>Sexo</th>
                <td>
                    @if($user == 'f')
                        Femenino
                    @else
                        Masculino
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary"> Volver al listado</a>
@endsection