@php($pagina= 'asignaturas')
@extends('templates.main')
@section('title', 'Asignaturas')
@section('titulo', 'Crear Asignatura')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('asignaturas.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="numero">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="grado">Grado</label>
                <select name="grado" id="grado" class='form-control'>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad_turnos">Cantidad de turnos</label>
                <input type="number" class="form-control" name="cantidad_turnos">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection