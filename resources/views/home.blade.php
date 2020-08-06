
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body background="http://localhost/Garage/resources/views/img/fondo2.jpg" style="width:100%;height:100vh;background-size:cover;background-position:center;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class=""></div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="container" >
  <br><br><br>
  <div style="background-color: rgba(247, 251, 225, 0.8)">
  <div class="text-center row row-cols-3" >
    <div class="col"><b>CAMPUS</b> <div class="col"><a href="{{route('campuses.index')}}"><img src="http://localhost/Garage/resources/views/img/campus.png" width="45%" alt="campus" /></a></div></div>
    <div class="col"> <b>BARES</b> <div class="col"><a href="{{route('bars.index')}}"><img src="http://localhost/Garage/resources/views/img/bar.png" width="45%" alt="bar" /></a></div></div>
    <div class="col"> <b>MENUS </b><div class="col"><a href="{{route('menus.index')}}"><img src="http://localhost/Garage/resources/views/img/menu.png" width="45%" alt="menu" /></a></div></div>
    <div class="col"><b>SNACK </b><div class="col"><a href="{{route('snacks.index')}}"><img src="http://localhost/Garage/resources/views/img/snack.png" width="45%" alt="snack" /></a></div></div>
    <div class="col"><b>BUZON  </b><div class="col"><a href="{{route('buzons.index')}}"><img src="http://localhost/Garage/resources/views/img/buzon.png" width="45%" alt="buzon" /></a></div></div>
    <div class="col"> <b>PREFERENCIAS</b><div class="col"><a href="{{route('preferencias.index')}}"><img src="http://localhost/Garage/resources/views/img/preferencias.png" width="45%" alt="preferencias" /></a></div></div>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


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




    
</body>

</html>



