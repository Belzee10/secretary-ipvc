@php($pagina = 'grupos')
@extends('templates.main')
@section('title', 'Grupos')
@section('titulo', 'Crear Grupo')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('grupos.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero">
            </div>
            <div class="form-group">
                <label for="grado_id">Grados</label>
                <select class="form-control" name="grado_id">
                    @foreach($grados as $g)
                        <option value="{{ $g->id }}"> Unidad: {{ $g->unidad->numero }} Grado: {{ $g->numero }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection