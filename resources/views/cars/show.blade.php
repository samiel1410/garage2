@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4>Ver Car</h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:15px"> 
                    <a href="{{route('cars.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>

    <div class="card-body">
                                        <div class="form-group">
            <label class="col-form-label" for="value">Modelo</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$car->Modelo}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Cilindraje</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$car->Cilindraje}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Año</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$car->Año}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Color</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$car->Color}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Precio</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$car->Precio}}">
        </div>
                                                                    </div>

    </div>

    <div class="card mb-4">

        
    </div>
</div>
@endsection