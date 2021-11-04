@extends('adminlte::page')
@section('content')
<title>@section('title', __('Editar Horario'))</title>
<div class="card">
  <div class="card-header p-2">
    <h5>
    <strong>{{ __('Editar Horario') }}:</strong>
    <a>{{$horario->id}}</a>
  </h5>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => ['horarios.update', $horario->id], 'method' => 'patch', 'id' => 'horarioUpdate']) !!}
      @include('clases.hor_editFields')
    {!! Form::close() !!}
  </div>
</div>
@jquery
@toastr_js
@toastr_render
@endsection