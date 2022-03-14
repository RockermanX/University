<!DOCTYPE html>
<html lang="en">
<head>

    @yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    @livewireStyles
</head>
<body>

    <div class="container-fluid">

        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 2rem;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="{{asset('images/logo_white_xs.png')}}" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Universidad virtual
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('admodulo')}}">Modulos</a></li>
                        <li><a class="dropdown-item" href="{{route('adcertif')}}">Certificados</a></li>
                        <li><a class="dropdown-item" href="{{route('adpoliticas')}}">Politicas</a></li>
                        <li><a class="dropdown-item" href="{{route('adhabeas')}}">Habeas</a></li>
                        <li><a class="dropdown-item" href="{{route('adcontrato')}}">Contrato</a></li>
                        </ul>
                    </li>
                      @yield('navitem')
                    </ul>
                  </div>
                </div>
              </nav>

        </div>

        <div class="container-sm">
            <div class="row">
                @yield('content')


            </div>
        </div>


    </div>
    @yield('scripts')


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
