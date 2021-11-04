@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar pago'))</title>
      @include('pagos.pago_menu_index')
  <div class="card-body">
    {!! Form::open(['route' => 'pagos.store', 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('pagos.pago_createFields')
    {!! Form::close() !!}
  </div>
@endsection