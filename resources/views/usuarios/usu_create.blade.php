@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar usuario'))</title>
 @include('usuarios.usu_menu')
  <div class="card-body">
    @include('global.generarPassword')
    {!! Form::open(['route' => 'usuarios.store', 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('usuarios.usu_createFields')
    {!! Form::close() !!}
  </div>
@endsection