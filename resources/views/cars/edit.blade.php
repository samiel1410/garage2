@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Editar Car </h3>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('cars.update',['car'=>$car->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        

                                        <div class="form-group">
            <label for="Modelo">Modelo</label>
                    <input class="form-control String"  type="text"  name="Modelo" id="Modelo" value="{{old('Modelo',$car->Modelo)}}"
                                    required="required"
                        >
                    @if($errors->has('Modelo'))
            <p class="text-danger">{{$errors->first('Modelo')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="Cilindraje">Cilindraje</label>
                    <input class="form-control String"  type="text"  name="Cilindraje" id="Cilindraje" value="{{old('Cilindraje',$car->Cilindraje)}}"
                                    required="required"
                        >
                    @if($errors->has('Cilindraje'))
            <p class="text-danger">{{$errors->first('Cilindraje')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="Año">Año</label>
                    <input class="form-control Date"  type="date"  name="Año" id="Año" value="{{old('Año',$car->Año)}}"
                                    required="required"
                        >
                    @if($errors->has('Año'))
            <p class="text-danger">{{$errors->first('Año')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="Color">Color</label>
                    <input class="form-control String"  type="text"  name="Color" id="Color" value="{{old('Color',$car->Color)}}"
                                    required="required"
                        >
                    @if($errors->has('Color'))
            <p class="text-danger">{{$errors->first('Color')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="Precio">Precio</label>
                    <input class="form-control Float"  type="text"  name="Precio" id="Precio" value="{{old('Precio',$car->Precio)}}"
                                    required="required"
                        >
                    @if($errors->has('Precio'))
            <p class="text-danger">{{$errors->first('Precio')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('cars.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection