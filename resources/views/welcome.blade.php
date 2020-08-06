<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
          
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background="http://localhost/Garage/resources/views/img/fondo8.jpeg" style="width:100%;height:100vh;background-size:cover;background-position:center;">
    <nav class="navbar navbar-expand-lg   sticky-top navbar-light bg-light">

  <img src="http://localhost/Garage/resources/views/img/sello2.png"  width="40" height="40" class="d-inline-block align-top" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    
      <li class="nav-item">
        <a class="nav-link" href="{{route('buzons.index')}}">Buzon</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('preferencias.index')}}">Preferencias</a>
      </li>
      <li> <form class="form-inline my-2 my-lg-0">
    @if (Route::has('login'))
                <div class="top-right links" >
              
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
    </form></li>
    </ul>
    
  </div>
</nav>
<br> <br> 
<div class="content" >
                <div class="title m-b-md font-weight-bold">
                    Bar Espel
                </div>

                <div class="container">
  <div class="row">
    <div class="col " style="background-color: rgb(238, 238, 238);"> lor Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nobis cumque in ipsam voluptatibus placeat omnis debitis veniam, magni obcaecati voluptas quidem fugiat impedit quis molestiae soluta perspiciatis, eum velit.</div>
    <div class="col">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/Garage/resources/views/img/belisario.jpg" class="d-block w-75" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Garage/resources/views/img/matriz.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    
    
    
    </div>
  </div>
</div>
<br><br>
                <div class="container" style="background-color: rgb(238, 238, 238);">
  <div class="row">
    <div class="col display-3 font-weight-bold">Menus</div>
    <div class="col display-3 font-weight-bold">Snacks</div>
    <div class="w-100"></div>
    <div class="col card"><div class="table-responsive">
  <table class="table" > 
  <thead class="table-primary" >
                        <tr>                           
                            <td>CAMPUS</td>
                            <td>BAR</td>
                            <td>NOMBRE</td>                            
                            <td>PRECIO</td>

                        </tr>

                    </thead>
                    <tbody class="table-success">
                    @foreach($menus as $menu)
                    <tr>                          
                         <td><p class="card-text">{{$menu->bar->campus->nombre}} </p></td>  
                         <td><p class="card-text">{{$menu->bar->nombre}} </p></td>  
                         <td><p class="card-text">{{$menu->nombre}}</p></td>  
                         <td><p class="card-text">{{$menu->precio}}$</p></td> 
                         <br>
                                    
                            
                     </tr>
                     @endforeach
                     </tbody>
  </table>
</div></div>
    <div class="col card"><div class="table-responsive">
  <table class="table">
  <thead class="table-primary">
                        <tr>                           
                            
                           
                            <td>NOMBRE</td>                            
                            <td>PRECIO</td>

                        </tr>

                    </thead>
                    <tbody class="table-success">
                    @foreach($snacks as $snack)
                    <tr>    
                                          
                         <td><p class="card-text">{{$snack->nombre}} </p></td>  
                         <td><p class="card-text">{{$snack->precio}}$</p></td> 
                         <br>
  
                     </tr>
                     @endforeach
                     </tbody>
  </table>
</div></div>
  </div>
</div>

        
        
           
            
        </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
