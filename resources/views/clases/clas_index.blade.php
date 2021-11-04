@extends('adminlte::page')
@section('content')
<title>@section('title', __('Lista de Clases'))</title>

@include('clases.clas_menu')
 <div class="card-body">
    {!! Form::model(Request::all(), ['route' => 'clases.index', 'method' => 'GET']) !!}
    @include('global.buscador.buscador', ['ruta_recarga' => route('clases.index')])
    {!! Form::close() !!}
     @include('clases.clas_table')
     @include('global.paginador.paginador', ['paginar'=>$clase])
 </div>
    @jquery
    @toastr_js
    @toastr_render
@endsection  
