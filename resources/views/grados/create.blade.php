@php($pagina = 'unidades')
@extends('templates.main')
@section('title', 'Grados')
@section('titulo', 'Crear Grado')
@section('contenido')
    <h3>Unidad: {{ $unidad->numero }}</h3>
    <form role="form" class="mid-width" action="{{ route('grados.store',$unidad->id) }}" method="POST">
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