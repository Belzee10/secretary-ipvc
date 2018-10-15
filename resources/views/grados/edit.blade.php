@php($pagina = 'unidades')
@extends('templates.main')
@section('title', 'Grados')
@section('titulo', 'Editar Grado')
@section('contenido')
    <h3>Unidad: {{ $unidad->numero }}</h3>
    <form role="form" class="mid-width" action="{{ route('grados.update', $grado->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        {{--{{ method_field('PATCH') }}--}}
        <div class="box-body">
            <div class="form-group">
                <label for="numero">Número</label>
                <input value="{{ $grado->numero }}" type="text" class="form-control" name="numero">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection