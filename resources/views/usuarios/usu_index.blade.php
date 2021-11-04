@extends('adminlte::page')
@section('content')
<title>@section('title', __('Lista de Usuarios'))</title>
@include('usuarios.usu_menu')
<div class="card-body">
  {!! Form::model(Request::all(), ['route' => 'usuarios.index', 'method' => 'GET']) !!}
  @include('global.buscador.buscador', ['ruta_recarga' => route('usuarios.index')])
  {!! Form::close() !!}
  @include('usuarios.usu_table')
  @include('global.paginador.paginador', ['paginar'=>$usuario])
</div>
    @jquery
    @toastr_js
    @toastr_render
@endsection
