@extends('adminlte::page')
@section('content')
<title>@section('title', __('Editar factura'))</title>
<div class="card">
  <div class="card-header p-2">
    <h4><strong>{{ __('Editar registro') }}: </strong>
      <a href="{{ route('facturas.show', $facturas->id) }}"><small>{{$facturas->id}}</small></a></h4>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => ['facturas.update', $facturas->id], 'method' => 'patch', 'id' => 'facturatoUpdate']) !!}
      @include('facturas.factura_editFields')
    {!! Form::close() !!}
  </div>
  @endsection
  
      