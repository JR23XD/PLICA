@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar factura'))</title>
      @include('facturas.factura_menu_index')
  <div class="card-body">
    {!! Form::open(['route' => 'facturas.store', 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('facturas.factura_createFields')
    {!! Form::close() !!}
  </div>
</div>
@endsection
