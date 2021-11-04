@extends('adminlte::page')
@section('content')
<title>@section('title', __('Detalles de Pago').' '.$pagos->ef)</title>
<div class="card {{ config('app.color_card_primario') }} card-outline card-tabs position-relative bg-white">
  <div class="card-header p-1 border-botton {{ config('app.color_bg_primario') }}">
<h5>
  <strong>{{ __('Detalles del registro') }}:</strong>
    <a href="{{ route('pagos.edit', $pagos->id) }}" class="text-black">{{ $pagos->id }}</a>
</h5>
  </div>
<div class="ribbon-wrapper">
    <div class="ribbon {{ config('app.color_bg_primario') }}">
      <small>{{ $pagos->id }}</small>
    </div>
</div>
 <div class="card-body">
    @include('pagos.pago_showFields')
</div>
</div>
@endsection
