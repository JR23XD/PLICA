@extends('adminlte::page')
@section('content')
<title>@section('title', __('Registrar clase'))</title>
 @include('clases.clas_menu')
  <div class="card-body">
    {!! Form::open(['route' => 'clases.store', 'onsubmit' => 'return checarBotonSubmit("btnsubmit")']) !!}
      @include('clases.clas_createFields')
    {!! Form::close() !!}
  </div>
  @jquery
@toastr_js
@toastr_render
@endsection