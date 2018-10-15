@php($pagina = 'usuarios')
@extends('templates.main')
@section('title', 'Usuarios')
@section('titulo', 'Crear Usuario')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('usuarios.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name="user">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="rep-password">Repite Contraseña</label>
                <input type="password" class="form-control" name="rep-password">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select class="form-control" name="rol">
                    <option value="Secretario">Secretario/a General</option>
                    <option value="Secretaria">Secretario/a </option>
                </select>
            </div>
            <div class="form-group">
                <label for="unidad">Unidad</label>
                <select class="form-control" name="unidad">
                    @foreach($unidades as $u)
                        <option value="{{ $u->numero }}">{{ $u->numero }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unidad">Sexo</label>
                <select class="form-control" name="sexo">
                    <option value="f">Femenino</option>
                    <option value="m">Masculino</option>
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection