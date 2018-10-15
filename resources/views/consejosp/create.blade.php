@php($pagina= 'consejosp')
@extends('templates.main')
@section('title', 'Consejos Populares')
@section('titulo', 'Crear Consejo Popular')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('consejosp.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="municipio_id">Municipio</label>
                <select class="form-control" name="municipio_id">
                    @foreach($municipios as $m)
                        <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection