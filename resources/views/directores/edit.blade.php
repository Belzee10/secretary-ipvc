@php($pagina= 'directores')
@extends('templates.main')
@section('title', 'Directores')
@section('titulo', 'Editar Director')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('directores.update', $director->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="{{ $director->nombre }}" type="text" class="form-control" name="nombre">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection