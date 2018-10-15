@php($pagina= 'cursos')
@extends('templates.main')
@section('title', 'Cursos')
@section('titulo', 'Editar Curso')
@section('contenido')
    <form role="form" class="mid-width" action="{{ route('cursos.update', $curso->id) }}" method="POST">
        {{ csrf_field() }}
        {{	method_field('PUT')	}}
        <div class="box-body">            
            <div class="form-group">
                <label for="grado">Ano inicio</label>  
                <select class="form-control" name="anno_inicio" id="anno_inicio">
                    @foreach($annos as $a)
                        <option @if($a == $curso->anno_inicio) selected @endif value="{{$a}}">{{$a}}</option>
                    @endforeach
                </select>
            </div>            
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection