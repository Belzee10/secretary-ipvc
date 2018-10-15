@php($pagina = 'unidades')
@extends('templates.main')
@section('title', 'Unidades')
@section('titulo', 'Crear Unidad')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('unidades.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection