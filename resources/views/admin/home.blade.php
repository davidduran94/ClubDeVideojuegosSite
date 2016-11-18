@extends('admin.template')

@section('content')
@section('title') Inicio @stop
@section('subtitle') @stop

<h1>Bienvenido {{Auth::user()->email}}</h1>

<p>Aquí podrá editar el contenido de la página oficial del Club de Desarrollo de Videojuegos ESCOM</p>

@stop