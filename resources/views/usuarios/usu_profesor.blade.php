@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar profesor'))</title>
 @include('usuarios.usu_menu')
  <div class="card-body">
    {!! Form::open(['route' => 'profesores.store', 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('usuarios.usu_profesorFields')
    {!! Form::close() !!}
  </div>
@endsection