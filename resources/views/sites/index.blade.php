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
                    <h4> Sites </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('sites.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($sites))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Numero</td>
                
                                                <td>Dimensión</td>
                
                                                <td>Ubicación</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($sites as $site)
            <tr>
                <td>
                    <a href="{{route('sites.show',['site'=>$site] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('sites.edit',['site'=>$site] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-site-{{$site->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-site-{{$site->id}}" action="{{route('sites.destroy',['site'=>$site])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$site->numero}}</td>
                                                                <td>{{$site->dimensión}}</td>
                                                                <td>{{$site->ubicación}}</td>
                                                                                                                                
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