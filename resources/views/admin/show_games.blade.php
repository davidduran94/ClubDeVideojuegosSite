@extends('admin.template')

@section('title_page') Mostrar Videojuegos @stop

@section('content')
@section('title') CDVE @stop
@section('subtitle') Mostrar Videojuegos @stop

<div class="container">
    <table class="table table-striped" style="text-align:justify">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($game as $vg)
            <tr>
                <td width="10%">{{$vg->titulo}}</td>
                <td width="20%">{{$vg->autor}}</td>
                <td width="30%">{{$vg->descripcion}}</td>
                <td><img src="{{$vg->imagen}}" alt="" width="150" height="150"></td>
                <td>
                    <a href="{{route('game.edit', $vg->id)}}" class="btn btn-default">Editar</a>
                    {!!Form::open(['route' => ['game.destroy', $vg], 'method' => 'delete'])!!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-default']) !!}
                    {!!Form::close()!!}
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
</div>

@stop