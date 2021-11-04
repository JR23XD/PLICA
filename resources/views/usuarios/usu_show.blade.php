@extends('adminlte::page')
@section('content')
<title>@section('title', __('Detalles usuario') . ' ' . $usuario->name)</title>
<div class="card {{ config('app.color_card_primario') }} card-outline card-tabs position-relative bg-white">
  <div class="card-header p-2 border-botton {{ config('app.color_bg_primario') }}">
    <h5>
      <strong>{{ __('Detalles del registro') }}:</strong>
      <a href="{{ route('usuarios.edit', $usuario->id) }}"
         class="text-black">{{ $usuario->name }}</a>
    </h5>
  </div>
  <div class="ribbon-wrapper">
    <div class="ribbon {{ config('app.color_bg_primario') }}">
      <small>{{ $usuario->id }}</small>
    </div>
  </div>
  <div class="card-body">
    @include('usuarios.usu_showFields')
  </div>
</div>
@endsection
