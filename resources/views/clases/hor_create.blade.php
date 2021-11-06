@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar Horario'))</title>
<div class="card">
  <div class="card-header p-2">
    <h5>
    <strong>{{ __('Crear Horario') }}</strong>
    <a href="{{ url()->previous() }}" class="btn btn-outline-warning btn-sm float-right"><strong>{{ __('Regresar') }}</strong></a>
  </h5>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => ['horarios.store',$id_clase], 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('clases.hor_createFields')
    {!! Form::close() !!}
  </div>
@jquery
@toastr_js
@toastr_render
@endsection