@php($pagina= 'asignaturas')
@extends('templates.main')
@section('title', 'Asignaturas')
@section('titulo', 'Editar Asignatura')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('asignaturas.update', $asignatura->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="{{ $asignatura->nombre }}" type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="grado">Grado</label>  
                <select class="form-control" name="grado" id="grado">
                    <option @if ($asignatura->grado == 10) selected @endif value="10">10</option>
                    <option @if ($asignatura->grado == 11) selected @endif value="11">11</option>
                    <option @if ($asignatura->grado == 12) selected @endif value="12">12</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad_turnos">Cantidad de turnos</label>
                <input value='{{ $asignatura->cantidad_turnos }}' type="number" class="form-control" name="cantidad_turnos">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection