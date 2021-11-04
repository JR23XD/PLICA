@extends('adminlte::page')
@section('content')
@toastr_css
<title>@section('title', __('Lista Facturas'))</title>
@include('facturas.factura_menu_index')
<div class="card-body">
  {!! Form::model(Request::all(), ['route' => 'facturas.index', 'method' => 'GET']) !!}
  @include('global.buscador.buscador', ['ruta_recarga' => route('facturas.index')])
  {!! Form::close() !!}
    @include('facturas.factura_table')
    @include('global.paginador.paginador', ['paginar' => $facturas])
  </div>

@jquery
@toastr_js
@toastr_render

@endsection   



  
