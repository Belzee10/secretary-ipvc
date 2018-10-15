@php($pagina= 'directores')
@extends('templates.main')
@section('title', 'Directores')
@section('titulo', 'Crear Director')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('directores.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection