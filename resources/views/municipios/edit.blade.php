@php($pagina= 'municipios')
@extends('templates.main')
@section('title', 'Municipios')
@section('titulo', 'Editar Municipio')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('municipios.update',$municipio->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $municipio->nombre }}">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection