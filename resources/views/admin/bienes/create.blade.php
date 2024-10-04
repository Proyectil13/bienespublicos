@extends('adminlte::page')

@section('title', 'BienesPublicos')

@section('content_header')
    <h1>Crear nuevo Bien publico</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

                {!! Form::open(['route' => 'admin.bienes.store']) !!}

                <div class="form-group">

                    {!! Form::label('id', 'Bien Publico') !!}
                    {!! Form::text('id', null, ['class' => 'form-control', 'placeholder' => 'ingrese el numero del bien publico']) !!}

                    @error('id')
                        <span class="text-danger">{{$message}}</span>                        
                    @enderror

                </div>

                <div class="form-group">

                    {!! Form::label('item', 'Item') !!}
                    {!! Form::text('item', null, ['class' => 'form-control', 'placeholder' => 'ingrese el numero del ITEM']) !!}

                    @error('item')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                    {!! Form::submit('Crear BienPublico', ['class'=> 'btn btn-primary']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@stop

