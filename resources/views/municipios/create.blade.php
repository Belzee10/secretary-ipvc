@php($pagina= 'municipios')
@extends('templates.main')
@section('title', 'Municipios')
@section('titulo', 'Crear Municipio')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('municipios.store') }}" method="POST">
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