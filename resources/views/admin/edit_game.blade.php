@extends('admin.template')

@section('title_page') Editar Videojuego @stop

@section('content')
@section('title') CDVE @stop
@section('subtitle') Editar Videojuego @stop

{!! Form::open(['route' => ['game.update', $game], 'method' => 'PUT', 'files' => true]) !!}
        
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', $game->titulo, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('autor', 'Autor') !!}
            {!! Form::text('autor', $game->autor, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::textarea('description', $game->descripcion, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', $game->link, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'Imágen') !!}
            {!! Form::file('image', ['required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@stop