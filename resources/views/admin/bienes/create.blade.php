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

                <div class="form-group">

                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Descripcion']) !!}

                    @error('descripcion')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                <div class="form-group">
                    
                    {!! Form::label('clasi_bien', 'Clasificacion del Bien') !!}
                    {!! Form::text('clasi_bien', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Clasificacion del bien']) !!}

                    @error('clasi_bien')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                <div class="form-group">
                    
                    {!! Form::label('marca', 'Marca') !!}
                    {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Clasificacion del bien']) !!}

                    @error('marca')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                <div class="form-group">
                    
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Clasificacion del bien']) !!}

                    @error('modelo')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                <div class="form-group">
                    
                    {!! Form::label('serial', 'Serial') !!}
                    {!! Form::text('serial', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Clasificacion del bien']) !!}

                    @error('serial')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                <div class="form-group">
                    
                    {!! Form::label('color', 'Color') !!}
                    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Clasificacion del bien']) !!}

                    @error('color')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>

                <div class="form-group">
                    
                    {!! Form::label('costo_bs', 'Costo_Bs') !!}
                    {!! Form::number('costo_bs', null, ['class' => 'form-control','step'=>'any','placeholder' => 'ingrese la Clasificacion del bien']) !!}

                    @error('costo_bs')
                    <span class="text-danger">{{$message}}</span>                        
                    @enderror


                </div>





                    {!! Form::submit('Crear BienPublico', ['class'=> 'btn btn-primary']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@stop

