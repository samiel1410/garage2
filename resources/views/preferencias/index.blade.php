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
    <nav class="navbar navbar-expand-lg   sticky-top navbar-light bg-light">

  <img src="http://localhost/Garage/resources/views/img/sello2.png"  width="40" height="40" class="d-inline-block align-top" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('campuses.index')}}">Campus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('bars.index')}}">Bar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('menus.index')}}">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('buzons.index')}}">Buzon</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('snacks.index')}}">Snack</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('preferencias.index')}}">Preferencias</a>
      </li>
    </ul>
    
  </div>
</nav>
    @auth
    
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> preferencia </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                <a href="{{ url('home')}}" class="btn btn-secondary">Regresar</a>
                    <a href="{{route('buzons.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
        
    <div class="card-body">

    <table class="table table-striped">
        @if(count($preferencias))
        <thead>
            <tr>
                <th>&nbsp;</th>
                <td>Menu</td>
                                
                                                    <td>Fecha</td>
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
        
            @forelse($preferencias as $preferencia)
            <tr>
                <td>
                    <a href="{{route('preferencias.show',['preferencia'=>$preferencia] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('preferencias.edit',['preferencia'=>$preferencia] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-preferencia-{{$preferencia->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-preferencia-{{$preferencia->id}}" action="{{route('preferencias.destroy',['preferencia'=>$preferencia])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                </td> <td> @foreach((\App\Menu::all() ?? [] ) as $menu)
                                @if($preferencia->menu_id == old('menu_id', $menu->id))                    
                                    {{$menu->nombre}}               
                                @endif                
                            @endforeach</td><td>{{$preferencia->fecha}}</td>
                                                                                                                <td>{{$preferencia->observacion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
            @else
            <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Lista de Preferencias </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                <a href="/Garage/public" class="btn btn-secondary">Regresar</a>
                    <a href="{{route('preferencias.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($preferencias))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                                <td>Fecha</td>
                                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($preferencias as $preferencia)
            <tr>
                <td>
                    <a href="{{route('preferencias.show',['preferencia'=>$preferencia] )}}" class="btn btn-info">Ver</a>
                    
                </td> <td>{{$preferencia->fecha}}</td>
                                                                                                                <td>{{$preferencia->observacion}}</td>
                                                                                                                                
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