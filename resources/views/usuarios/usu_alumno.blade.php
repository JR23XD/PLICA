@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar alumno'))</title>
 @include('usuarios.usu_menu')
  <div class="card-body">
    {!! Form::open(['route' => 'alumnos.store', 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('usuarios.usu_alumnoFields')
    {!! Form::close() !!}
  </div>
  @jquery
@toastr_js
@toastr_render
@endsection