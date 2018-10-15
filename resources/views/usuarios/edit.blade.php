@php($pagina = 'usuarios')
@extends('templates.main')
@section('title', 'Usuarios')
@section('titulo', 'Editar Usuario')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('usuarios.update',$user->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name="user" value="{{ $user->user }}">
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
                <input type="text" class="form-control" name="apellidos" value="{{ $user->apellidos }}">
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select class="form-control" name="rol">
                    <option @if($user->rol == 'Secretario') selected @endif value="Secretario">Secretario/a General</option>
                    <option @if($user->rol == 'Secretaria') selected @endif value="Secretaria">Secretario/a </option>
                </select>
            </div>
            <div class="form-group">
                <label for="unidad">Unidad</label>
                <select class="form-control" name="unidad">
                    @foreach($unidades as $u)
                        <option @if($u->numero == $user->unidad) selected @endif value="{{ $u->numero }}">{{ $u->numero }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unidad">Sexo</label>
                <select class="form-control" name="sexo">
                    <option @if($user == 'f') selected @endif value="f">Femenino</option>
                    <option @if($user == 'm') selected @endif value="m">Masculino</option>
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection