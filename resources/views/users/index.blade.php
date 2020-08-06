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
                    <h4> Users </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('users.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($users))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Name</td>
                
                                                <td>Email</td>
                
                                
                                                <td>Password</td>
                
                                                <td>Remember Token</td>
                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>
                    <a href="{{route('users.show',['user'=>$user] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('users.edit',['user'=>$user] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-user-{{$user->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-user-{{$user->id}}" action="{{route('users.destroy',['user'=>$user])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$user->name}}</td>
                                                                <td>{{$user->email}}</td>
                                                                                                <td>{{$user->password}}</td>
                                                                <td>{{$user->remember_token}}</td>
                                                                                                
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