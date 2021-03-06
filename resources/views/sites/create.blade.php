@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Crear Site </h3>
        </div>
        <div class="card-body">

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul @endif <form action="{{route('sites.store')}}" method="POST" novalidate>
        @csrf
        
                                        <div class="form-group">
            <label for="numero">Numero</label>
                        <input class="form-control Integer"  type="number"  name="numero" id="numero" value="{{old('numero')}}"                         required="required"
                        >
                        @if($errors->has('numero'))
            <p class="text-danger">{{$errors->first('numero')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="dimensión">Dimensión</label>
                        <input class="form-control Integer"  type="number"  name="dimensión" id="dimensión" value="{{old('dimensión')}}"                         required="required"
                        >
                        @if($errors->has('dimensión'))
            <p class="text-danger">{{$errors->first('dimensión')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="ubicación">Ubicación</label>
                        <textarea class="form-control" name="ubicación" id="ubicación" cols="30" rows="10">{{old('ubicación')}}</textarea>
                        @if($errors->has('ubicación'))
            <p class="text-danger">{{$errors->first('ubicación')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('sites.index')}}" class="btn btn-primary">Regresar</a>
        </div>
        </form>
        </div>
    </div>
</div>
@endsection