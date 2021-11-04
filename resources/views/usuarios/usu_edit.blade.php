@extends('adminlte::page')
@section('content')
<title>@section('title', __('Editar usuario'))</title>
<div class="card">
  <div class="card-header p-2">
    <h5>
    <strong>{{ __('Editar Registro') }}:</strong>
    <a href="{{ route('usuarios.show', $usuario->id) }}">{{$usuario->id}}</a>
  </h5>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => ['usuarios.update', $usuario->id], 'method' => 'patch', 'id' => 'usuarioUpdate']) !!}
      @include('usuarios.usu_editFields')
    {!! Form::close() !!}
  </div>
</div>
@jquery
@toastr_js
@toastr_render
@endsection
