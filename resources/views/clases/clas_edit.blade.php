@extends('adminlte::page')
@section('content')
<title>@section('title', __('Editar Clase'))</title>
<div class="card">
  <div class="card-header p-2">
    <h5>
    <strong>{{ __('Editar Registro') }}:</strong>
    <a href="{{ route('clases.show', $clase->id) }}">{{$clase->nom}}</a>
  </h5>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => ['clases.update', $clase->id], 'method' => 'patch', 'id' => 'claseUpdate']) !!}
      @include('clases.clas_editFields')
    {!! Form::close() !!}
  </div>
</div>
@jquery
@toastr_js
@toastr_render
@endsection