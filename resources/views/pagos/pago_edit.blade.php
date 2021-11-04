@extends('adminlte::page')
@section('content')
<title>@section('title', __('Editar pago'))</title>
<div class="card">
  <div class="card-header p-2">
    <h4><strong>{{ __('Editar pago') }}: </strong>
      <a href="{{ route('pagos.show', $pagos->id) }}"><small>{{$pagos->id}}</small></a></h4>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => ['pagos.update', $pagos->id], 'method' => 'patch', 'id' => 'pagoUpdate']) !!}
      @include('pagos.pago_editFields')
    {!! Form::close() !!}
  </div>
  @endsection
  
      