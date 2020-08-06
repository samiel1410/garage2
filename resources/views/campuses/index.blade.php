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
@extends('layouts.app')
@section('content')
<body background="http://localhost/Garage/resources/views/img/fondo2.jpg" style="width:100%;height:100vh;background-size:cover;background-position:center;">
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
                    <h4> Campuses </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('campuses.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
        
    <div class="card-body">

    <table class="table table-striped">
        @if(count($campuses))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Nombre</td>
                
                                                <td>Direccion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($campuses as $campus)
            <tr>
                <td>
                    <a href="{{route('campuses.show',['campus'=>$campus] )}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.5 12a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0z"></path><path fill-rule="evenodd" d="M12 3.5c-3.432 0-6.125 1.534-8.054 3.24C2.02 8.445.814 10.352.33 11.202a1.6 1.6 0 000 1.598c.484.85 1.69 2.758 3.616 4.46C5.876 18.966 8.568 20.5 12 20.5c3.432 0 6.125-1.534 8.054-3.24 1.926-1.704 3.132-3.611 3.616-4.461a1.6 1.6 0 000-1.598c-.484-.85-1.69-2.757-3.616-4.46C18.124 5.034 15.432 3.5 12 3.5zM1.633 11.945c.441-.774 1.551-2.528 3.307-4.08C6.69 6.314 9.045 5 12 5c2.955 0 5.309 1.315 7.06 2.864 1.756 1.553 2.866 3.307 3.307 4.08a.111.111 0 01.017.056.111.111 0 01-.017.056c-.441.774-1.551 2.527-3.307 4.08C17.31 17.685 14.955 19 12 19c-2.955 0-5.309-1.315-7.06-2.864-1.756-1.553-2.866-3.306-3.307-4.08A.11.11 0 011.616 12a.11.11 0 01.017-.055z"></path></svg></a>
                    <a href="{{route('campuses.edit',['campus'=>$campus] )}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg></a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-campus-{{$campus->id}}').submit();" class="btn btn-danger">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
                    </a>
                    <form id="delete-campus-{{$campus->id}}" action="{{route('campuses.destroy',['campus'=>$campus])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$campus->nombre}}</td>
                                                                <td>{{$campus->direccion}}</td>
                                                                                                                                
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