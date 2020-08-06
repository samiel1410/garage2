@extends('layouts.app')
@section('content')
<body background="http://localhost/Garage/resources/views/img/fondo2.jpg" style="width:100%;height:100vh;background-size:cover;background-position:center;">
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if (Route::has('login'))
    @auth
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Buzons </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                <a href="{{ url('home')}}" class="btn btn-secondary">Regresar</a>
                    <a href="{{route('buzons.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($buzons))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                <td>Bar</td>
                                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($buzons as $buzon)
            <tr>
                <td>
                    <a href="{{route('buzons.show',['buzon'=>$buzon] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('buzons.edit',['buzon'=>$buzon] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-buzon-{{$buzon->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-buzon-{{$buzon->id}}" action="{{route('buzons.destroy',['buzon'=>$buzon])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td><td>  @foreach((\App\Bar::all() ?? [] ) as $bar)
                    @if($buzon->bar_id == old('bar_id', $bar->id))                    
                     {{$bar->nombre}}               
                    @endif                
                @endforeach</td>
                                                                                                                <td>{{$buzon->descripcion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
            @else
            <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Lista de Buzones </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                <a href="/Garage/public" class="btn btn-secondary">Regresar</a>
                    <a href="{{route('buzons.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($buzons))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($buzons as $buzon)
            <tr>
                <td>
                    <a href="{{route('buzons.show',['buzon'=>$buzon] )}}" class="btn btn-info">Ver</a>
                    
                </td>
                                                                                                                <td>{{$buzon->descripcion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
            @endauth 
                    @endif     
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection