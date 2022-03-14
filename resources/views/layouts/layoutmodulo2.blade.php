<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss bootstrap aside menu, vertical, sidebar nav menu CSS examples" />
    <meta name="description" content="Bootstrap 5 sidebar navigation menu example" />

    <title>Demo - Bootstrap 5 sidebar vertical menu sample. html code example </title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- ======= Icons used for dropdown (you can use your own) ======== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/css2.css')}}" rel="stylesheet">
  </head>
  <body id="body-pd">

    <header class="header" id="header">
      <div class="header_toggle"> <i class="bx bx-menu" id="header-toggle"></i> </div>
      <div class="logo-header" ><img src="{{asset('images/logo_white_xs.png')}}" alt=""> </div>
      <div class="header_img">  </div>
    </header>
    <!-- section-header.// -->

    <div class="l-navbar" id="nav-bar">
      <!-- ============= COMPONENT ============== -->
      <nav class="nav sidebar">
        <div>
          <a href="#" class="nav_logo">
            <div class="nav_logo-icon"><img src="{{asset('images/logo_header_min.png')}}" alt=""></div>

          </a>
          <div class="nav_list">
            @yield('menu')

          </div>
        </div>
        <div>
          <a href="{{route('profile.show')}}" class="nav_link">
            <i class="bx bx-user nav_icon nav_out"></i>
            <span class="nav_name">Perfil</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bxs-file-pdf nav_icon nav_out"></i>
            <span class="nav_name">Documentos</span>
          </a>
          <a href="{{route('logout')}}" class="nav_link">
            <i class="bx bx-log-out nav_icon nav_out"></i>
            <span class="nav_name">SignOut</span>
          </a>
        </div>
      </nav>
      <!-- ============= COMPONENT END// ============== -->
    </div>
    <!--Container Main start-->
    <div class="container">

      <div class="row">
        @yield('leccion')



        <div class="col-xs-12 col-sm-12 col-md-3">
          <div>
            @yield('chat')
          </div>
        </div>
      </div>
    </div><!-- container //  -->
    <!--Container Main end-->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/css2.js')}}"></script>
  </body>
</html>
