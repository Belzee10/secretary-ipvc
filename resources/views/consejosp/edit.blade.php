@php($pagina= 'consejosp')
@extends('templates.main')
@section('title', 'Consejos Populares')
@section('titulo', 'Editar Consejo Popular')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('consejosp.update', $consejop->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $consejop->nombre }}">
            </div>
            <div class="form-group">
                <label for="municipio_id">Municipio</label>
                <select class="form-control" name="municipio_id">
                    @foreach($municipios as $m)
                        <option @if($m->id == $consejop->municipio_id) selected @endif value="{{ $m->id }}">{{ $m->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection