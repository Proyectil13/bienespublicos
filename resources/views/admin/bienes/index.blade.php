@extends('adminlte::page')

@section('title', 'BienesPublicos')

@section('content_header')
    <h1>Lista de Bienes Publicos</h1>
@stop

@section('content')


    @if (session('info'))
    <div class= "alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif
         
    <div class = "card">
        <div class = "card-header">
            <a class="btn btn-primary btn-sm" href="{{route('admin.bienes.create')}}">Agregar Bien</a>

        </div>

        <div class ="card-body">
            <table class = "table table-striped">

            <thead>
                <tr>
                    <th>Bien Publico</th>
                    <th>item</th>
                    <th>Descripcion</th>
                    <th>clasi_bien</th>
                    <th>marca</th>
                    <th>modelo</th>
                    <th>serial</th>
                    <th>color</th>
                    <th>costo_bs</th>
                    <th>estado</th>
                    <th>responsable</th>
                    <th>piso</th>
                    <th>area</th>
                    <th colspan ="2"></th>
                </tr>

            </thead>

            <tbody>
                @foreach ($bienes as $biene )

                    <tr>
                        <td>{{$biene->id}}</td>
                        <td>{{$biene->item}}</td>
                        <td>{{$biene->descripcion}}</td>
                        <td>{{$biene->clasi_bien}}</td>
                        <td>{{$biene->marca}}</td>
                        <td>{{$biene->modelo}}</td>
                        <td>{{$biene->serial}}</td>
                        <td>{{$biene->color}}</td>
                        <td>{{$biene->costo_bs}}</td>
                        <td>{{$biene->estado}}</td>
                        <td>{{$biene->responsable}}</td>
                        <td>{{$biene->piso}}</td>
                        <td>{{$biene->area}}</td>
                        <td width="10px">
                            <a class= "btn btn-primary btn-sm" href="{{route('admin.bienes.edit', $biene->id)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.bienes.destroy', $biene->id)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type ="submit" class="btn btn-danger btn-sm">Eliminar</button>

                            </form>
                        </td>
                        
                        
                    </tr>
                    
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
@stop

