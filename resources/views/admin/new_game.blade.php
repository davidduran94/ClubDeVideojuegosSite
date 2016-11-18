@extends('admin.template')

@section('title_page') Crear Videojuego @stop

@section('content')
@section('title') CDVE @stop
@section('subtitle') Insertar nuevo Videojuego @stop

@if(Session::has('flash_message'))
        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif

<!--<form class="form-group" action="{{route('game.store')}}" method="POST" enctype="multipart/form-data" >

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="autor" class="form-control">
    </div> 

    <div class="form-group">
        <label for="description">Descripción</label>
        <input type="text" name="description" class="form-control">
    </div>  

    <div class="form-group">
        <label for="link">Link de descarga</label>
        <input type="text" name="link" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Imágen</label>
        <input type="file" name="image" class="form-control">
    </div>  

    <input type="submit" class="btn btn-info" value="Registrar">


</form>-->

{!! Form::open(['route' => 'game.store', 'method' => 'POST', 'files' => true]) !!}
        
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('autor', 'Autor') !!}
            {!! Form::text('autor', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'Imágen') !!}
            {!! Form::file('image', ['required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}




@stop