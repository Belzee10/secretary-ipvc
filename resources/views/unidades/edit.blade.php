@php($pagina = 'unidades')
@extends('templates.main')
@section('title', 'Unidades')
@section('titulo', 'Editar Unidad')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('unidades.update', $unidad->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        {{--{{ method_field('PATCH') }}--}}
        <div class="box-body">
            <div class="form-group">
                <label for="numero">Número</label>
                <input value="{{ $unidad->numero }}" type="text" class="form-control" name="numero">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection