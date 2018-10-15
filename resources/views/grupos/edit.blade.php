@php($pagina = 'grupos')
@extends('templates.main')
@section('title', 'Grupos')
@section('titulo', 'Editar Grupo')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('grupos.update',$grupo->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" value="{{ $grupo->numero }}">
            </div>
            <div class="form-group">
                <label for="grado_id">Grados</label>
                <select class="form-control" name="grado_id">
                    @foreach($grados as $g)
                        <option @if($grupo->grado_id == $g->id) selected @endif value="{{ $g->id }}"> Unidad: {{ $g->unidad->numero }} Grado: {{ $g->numero }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection