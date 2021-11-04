@extends('adminlte::page')
@section('content')
<h4>Bienvenido {{ auth()->user()->name }} </h4>
@endsection
