<div>
    <!DOCTYPE html>
    <html lang="es">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @livewireStyles
        <!-- no cache -->
            <meta http-equiv="Expires" content="0">
            <meta http-equiv="Last-Modified" content="0">
            <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
            <meta http-equiv="Pragma" content="no-cache">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('favicon.ico')}}">

        <title>LaU Susfinanzas @isset($user)
           - {{strtolower($user['name'])}}
        @endisset</title>

        <!-- Bootstrap core CSS -->
        <link href="https://libros.susfinanzas.com.co/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="https://libros.susfinanzas.com.co/bootstrap-3.3.7/dist/css/bootstrap-responsive.min.css" rel="stylesheet"> -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="https://libros.susfinanzas.com.co/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- datetimepicker -->
        <link href="https://libros.susfinanzas.com.co/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

        <link href="{{asset('css/landing_page.css')}}" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="https://libros.susfinanzas.com.co/bootstrap-3.3.7/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="https://libros.susfinanzas.com.co/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>
            <script language="Javascript">
          function inhabilitar(){
            alert ("Esta función no está habilitada.");
            return false;
          }
            document.oncontextmenu = inhabilitar;
        </script>
           
      </head>

      <body>

        <div class="container-fluid">
          <div class="row">

            <!-- header -->
            <header>
              <div>
                <nav class="navbar navbar-default" role="navigation">
                  <div>
                    <a href="#"><img src="{{asset('landing/manos.png')}}" width="100%"></a>
                  </div>
            @isset($user)
                  <div id="menu-container" class="bg-azul">
                    <div class="container">
                      <div id="navbar" class="navbar-toggleable-xs collapse navbar-collapse navbar-ex1-collapse">
                          @isset($padre)
                        <div class="col-lg-6">
                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                               <input type="button" class="btn btn-primary color-blanco" value="{{$user['name']}}">
                            </li>
                          </ul>
                        </div>
                        @endisset
                        <div class="col-lg-6">
                          <ul class="nav navbar-nav float-right">
                            <li class="dropdown">
                                <input type="button" class="btn btn-warning" value="UNIRSE AL EQUIPO" onclick="window.location.href='#unirse'">
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endisset
                </nav>

              </div>
            </header>


            <div style="padding-top: 40px;">
              <h3 class="text-center">BIENVENIDO AL EQUIPO </h3>
              <div class="col-xs-12 col-lg-offset-2 col-lg-8">
                <h3 class="text-center">Únete como Asesor Financiero a una compañía con más de 20 años de experiencia en el sector Jurídico y Financiero, con más de 7 años ayudando a las familias colombianas en la reducción del plazo de los Créditos de Vivienda y leasing habitacional.</h3>
              </div>
              @isset($user)
              <div class="col-xs-12" style="padding-bottom: 50px">
                <div class="col-xs-12 col-md-12 col-lg-1 float-right text-right" style="align-self-start;">
                        <a href="https://api.whatsapp.com/send?phone=57{{$user['telefono']}}&text=Hola!%20Deseo%20más%20información%20para%20unirme%20como%20Asesor%20a%20SusFinanzas,%20mi%20nombre%20es%20" target="_blank">
                        <img src="{{asset('landing/whatsapp.png')}}" alt="WhatsApp" width="70px">
                        </a>
                </div>
              </div>
              @endisset

            </div>

            <div class="text-center">
              <video class="video-width" controls poster="{{asset('landing/videopuyo.png')}}">
                  <source src="{{asset('dropbox/recursos/gerencia.mp4')}}" type="video/mp4">
              </video>
              <h3 class="text-center color-azul"><b>Carlos Ernesto Puyo Villoria</b><br><small><span class="color-gris">Presidente y Socio Fundador</span></small></h3>
            </div>
            <div class="bg-azul" style="padding-right: 15%; padding-bottom: 10px; padding-left: 15%; padding-top: 30px;">
              <h3 class="text-center color-blanco">BUSCAMOS ASESORES COMERCIALES</h3>
              <h3 class="text-center color-blanco">Gana comisiones y genera ingresos de tus ventas, tu trabajo en equipo y liderazgo. Aprende a través de nuestra plataforma virtual cómo asesorar efectivamente a tus clientes y cómo desarrollar tu propio equipo comercial con el respaldo de SusFinanzas.</h3>
            </div>
            @isset($user)
            <div class="col-xs-12 bg-azul" style="padding-bottom: 50px; padding-top: 0px;">
                <div class="col-xs-12 col-md-12 col-lg-1 float-right text-right" style="align-self-start;">
                    <a href="https://api.whatsapp.com/send?phone=57{{$user['telefono']}}&text=Hola!%20Deseo%20más%20información%20para%20unirme%20como%20Asesor%20a%20SusFinanzas,%20mi%20nombre%20es%20" target="_blank">
                        <img src="{{asset('landing/whatsapp.png')}}" alt="WhatsApp" width="70px">
                        </a>
                </div>
              </div>
            @endisset


            <div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center float-left svg-padding">
                <img src="{{asset('landing/Imagen1.svg')}}" width="30%">
                <h3 class="color-azul">SOMOS UNA FAMILIA</h3>
                <h3>Sé parte de la familia nacional, recibe la capacitación, apoyo y acompañamiento para alcanzar tus objetivos.</h3>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center float-left svg-padding">
                <img src="{{asset('landing/Imagen2.svg')}}" width="30%">
                <h3 class="color-azul">VIVIMOS EN FELICIDAD</h3>
                <h3>Celebramos tus logros, disfrutamos en eventos de formación, liderazgo y recreación nacionales e internacionales.</h3>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center float-left svg-padding">
                <img src="{{asset('landing/Imagen3.svg')}}" width="30%">
                <h3 class="color-azul">SERVICIO CON AMOR</h3>
                <h3>Existimos para ayudar, nuestro objetivo es brindar un servicio de asesoría y gestión de la mayor calidad a nuestros clientes.</h3>
              </div>
            </div>

            <div class="text-center">
              <video class="video-width" controls poster="{{asset('landing/videojorge.png')}}">
                  <source src="{{asset('dropbox/recursos/comercial.mp4')}}" type="video/mp4">
              </video>
              <h3 class="text-center color-azul"><b>Jorge Wilson Salazar Mejia</b><br><small><span class="color-gris">Vicepresidente Comercial y Socio Fundador</span></small></h3>
            </div>

            <div style="clear: both"></div>
            @isset($user)
            <div class="col-xs-12" style="background-color: #005da9; margin-top: 100px; padding-top: 20px;">
              <h3 class="text-center color-blanco" id="unirse" >REGÍSTRATE E INICIA TU ENTRENAMIENTO</h3>
              <div class="col-xs-12 col-md-6">
                <br>
                <h3 class="color-blanco">Para mayor información por favor contactar a:</h3>
                <h3 class="color-blanco">{{$user['name']}}<br>@if($user['emailcorp']!=''){{$user['emailcorp']}}@susfinanzas.com.co<br>@endif{{$user['telefono']}}</h3>
                <h3 class="color-blanco">Regístrate y únete al equipo, bienvenido a la familia!</h3>
              </div>
            
               <div class="col-xs-12 col-md-6">

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}" >
                            @csrf
                            
                            <input type="hidden" value="{{$user['id_users']}}" name="padre">

                            <div class="form-group">
                                <label for="InputNombreC" class="color-blanco">Nombre completo:</label>
                                <input type="text" class="form-control" id="InputNombreC" placeholder="Nombre completo" name="name">
                              </div>

                              <div class="form-group">
                                <label for="InputCelular" class="color-blanco">Celular o Whatsapp:</label>
                                <input type="text" class="form-control" id="InputCelular" placeholder="Celular" name="celular">
                              </div>

                              <div class="form-group">
                                <label for="InputCorreo" class="color-blanco">Correo Electronico:</label>
                                <input type="email" class="form-control" id="InputCorreo" placeholder="Correo Electronico" name="email">
                              </div>

                              <div class="form-group">
                                <label for="InputCedula" class="color-blanco" >Cedula:</label>
                                <input type="text" class="form-control" id="InputCedula" placeholder="Numero celular" name="cedula">
                              </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            

                                            <div class="ml-2">
                                                <p>
                                                    <x-jet-checkbox name="terms" id="terms"/>
                                                {!! __('Acepto a los :terms_of_service y :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="link underline text-sm text-gray-600 hover:text-gray-900" style="color: rgb(134, 221, 250)">'.__('Terminos de servicio').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="link underline text-sm text-gray-600 hover:text-gray-900" style="color: rgb(134, 221, 250)">'.__('Politicas de privacidad').'</a>',
                                                ]) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color: rgb(231, 206, 61)">
                                    {{ __('Se encuentra registrado?') }}
                                </a>

                                <button type="submit" class="btn btn-warning">
                                    {{ ('Registrar') }}
                                </button>


                            </div>
                        </form>



              </div>
             
            </div>
             @endisset
          </div>
        </div>

        <!-- Footer -->
        <footer class="navbar navbar-default" style="background-color:#727374;"> <!-- navbar-fixed-bottom -->
          <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                            <p class="navbar-text"></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <p class="navbar-text float-right"><span class="color-blanco">© SusFinanzas - by</span> <a id="correo" href="mailto:ganoderico@hotmail.com" class="navbar-link" style="color:yellow;"><b>vibo</b></a>.</p>
                        </div>
                    </div>
          </div>
        </footer>
        <!-- /Footer -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://libros.susfinanzas.com.co/jquery/jquery-1.12.4.min.js" type="text/javascript"></script>

        <script>window.jQuery || document.write('<script src="https://libros.susfinanzas.com.co/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="https://libros.susfinanzas.com.co/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="https://libros.susfinanzas.com.co/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
        <!-- filestyle -->
        <script type="text/javascript" src="https://libros.susfinanzas.com.co/bootstrap-filestyle-1.2.1/src/bootstrap-filestyle.min.js"> </script>


        @livewireScripts
      </body>
    </html>

    </div>
