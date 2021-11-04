@extends('adminlte::page')
@section('content')
@toastr_css
<title>@section('title', __('Registros de Pagos'))</title>
@include('pagos.pago_menu_index')
  <div class="card-body">
    {!! Form::model(Request::all(), ['route' => 'pagos.index', 'method' => 'GET']) !!}
  @include('global.buscador.buscador', ['ruta_recarga' => route('pagos.index')])
  {!! Form::close() !!}
    @include('pagos.pago_table')
    @include('global.paginador.paginador', ['paginar' => $pagos])
  </div>
</div>

@jquery
@toastr_js
@toastr_render

@endsection  



