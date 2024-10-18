@extends('adminlte::page')

@section('title', 'BienesPublicos')

@section('content_header')
    <h1>Crear nuevo Bien publico</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

                {!! Form::open(['route' => 'admin.bienes.store']) !!}

                
                    @include('admin.bienes.formulario.form')

                    {!! Form::submit('Crear BienPublico', ['class'=> 'btn btn-primary']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@stop

