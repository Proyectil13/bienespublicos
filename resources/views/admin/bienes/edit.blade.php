@extends('adminlte::page')

@section('title', 'BienesPublicos')

@section('content_header')
    <h1>Editar Bienes</h1>
@stop

@section('content')

    @if (session('info'))
        <div class= "alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        
    @endif

    <div class="card">
        <div class="card-body">

                {!! Form::model($biene,['route' => ['admin.bienes.update', $biene], 'method' => 'put'])!!}

                    @include('admin.bienes.formulario.form')

                    {!! Form::submit('Actualizar BienPublico', ['class'=> 'btn btn-primary']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop