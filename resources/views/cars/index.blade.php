@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Cars </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('cars.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($cars))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Modelo</td>
                
                                                <td>Cilindraje</td>
                
                                                <td>Año</td>
                
                                                <td>Color</td>
                
                                                <td>Precio</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($cars as $car)
            <tr>
                <td>
                    <a href="{{route('cars.show',['car'=>$car] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('cars.edit',['car'=>$car] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-car-{{$car->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-car-{{$car->id}}" action="{{route('cars.destroy',['car'=>$car])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$car->Modelo}}</td>
                                                                <td>{{$car->Cilindraje}}</td>
                                                                <td>{{$car->Año}}</td>
                                                                <td>{{$car->Color}}</td>
                                                                <td>{{$car->Precio}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection