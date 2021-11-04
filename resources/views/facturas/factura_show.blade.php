@extends('adminlte::page')
@section('content')
<title>@section('title', __('Detalles Facturas').' '.$facturas->fdf)</title>
<div class="card {{ config('app.color_card_primario') }} card-outline card-tabs position-relative bg-white">
  <div class="card-header p-1 border-botton {{ config('app.color_bg_primario') }}">
<h5>
  <strong>{{ __('Detalles del registro') }}:</strong>
    <a href="{{ route('facturas.edit', $facturas->id) }}" class="text-black">{{ $facturas->id }}</a>
</h5>
  </div>
<div class="ribbon-wrapper">
    <div class="ribbon {{ config('app.color_bg_primario') }}">
      <small>{{ $facturas->id }}</small>
    </div>
</div>
 <div class="card-body">
    @include('facturas.factura_showFields')
</div>
</div>
@endsection
