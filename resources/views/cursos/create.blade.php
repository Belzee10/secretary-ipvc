@php($pagina= 'cursos')
@extends('templates.main')
@section('title', 'Cursos')
@section('titulo', 'Crear Curso')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('cursos.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="anno_inicio">Ano inicio</label>
                <select name="anno_inicio" id="anno_inicio" class="form-control">
                    @foreach($annos as $a)
                        <option value="{{$a}}">{{$a}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection