<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
    <title>Panteon Municipal </title>
    <link rel="shortcut icon" href="LogoPresidencia.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jqueryslidemenu.js"></script>
    <script type="text/javascript" src="js/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Nucleo Icons -->
    <link href="{{asset('css/css-dashborad/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/css-dashborad/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- kit icons font awesome -->
    <script src="https://kit.fontawesome.com/0b5b2fc52f.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('css/css-dashborad/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>



<body class="g-sidenav-show  bg-gray-200">
    <header class="header_area">
        <nav class="navbar navbar-expand-lg menu_one support_menu">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="https://pagos.tulancingo.gob.mx/images/citizen/payments/logo.png" srcset="https://pagos.tulancingo.gob.mx/images/citizen/payments/logo2x.png 2x" alt="logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
                <!--Navbar-->
                <nav class="navbar navbar-light navbar-9 white">
                    <!-- Navbar brand -->
                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span
                          class="navbar-toggler-icon"></span></button>
                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-black {{ Route::is('inicio') ? 'active bg-gradient-warning' : '' }} " href="/">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link ">Inicio</span>
                                </a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('login') ? 'active bg-gradient-warning' : '' }}  " href="{{route('login')}}">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Login</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('register') ? 'active bg-gradient-warning' : '' }}  " href="{{route('register')}}">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Register</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('registrotitulares') ? 'active bg-gradient-warning' : '' }}  " href="registrotitulares">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Registro de Titulares</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('registrolotes') ? 'active bg-gradient-warning' : '' }}  " href="registrolotes">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Registro de Lotes</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('busquedatitular') ? 'active bg-gradient-warning' : '' }}  " href="busquedatitular">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Busqueda de propietario</span>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('registrobeneficiarios') ? 'active bg-gradient-warning' : '' }}  " href="registrobeneficiarios">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Registro Beneficiarios</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('registroservicios') ? 'active bg-gradient-warning' : '' }}  " href="registroservicios">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Servicios</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('pagos') ? 'active bg-gradient-warning' : '' }}  " href="pagos">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Pago refrendo</span>
                                </a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link text-black {{ Route::is('reportes') ? 'active bg-gradient-warning' : '' }}  " href="reportes">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Reportes</span>
                                </a>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link text-black" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    </div>
                                    <span class="nav-link">Salir</span>
                                </a>
                            </li>
                            @endguest

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                        <!-- Links -->
                    </div>
                    <!-- Collapsible content -->
                </nav>
                <!--/.Navbar-->
            </div>
    </header>


    <main class="d-flex justify-content-center">
        @yield('content')
    </main>

    </div>
    </div>
    </div>
    <!--   Core JS Files   -->

    <script src="{{asset('js/app.js')}}"></script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/js-dashboard/material-dashboard.min.js?v=3.0.0')}}"></script>
    <style>
        html,
        body {
            background-image: url("FONDO.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }

        /*////////////////// GALERIJA ///////////////////////*/



        .items-wrapper {
            padding-bottom: 40px;
            padding-left: 20px;
        }

        .items-wrapper.clearfloat h2 {
            margin-right: 20px;
            font-family: Helvetica, Arial, Sans-serif;
            background-image: url(voda.jpg);
            background-repeat: no-repeat;
            background-position: left 15px;
            margin: 0;
            padding-top: 20px;
            padding-right: 0;
            padding-bottom: 20px;
            padding-left: 60px;
            color: fff;

        }

        .items-wrapper.clearfloat p {
            margin-right: 20px;
            font-family: Helvetica, Arial, Sans-serif;

            color: fff;

        }

        .item {
            position: relative;
            width: 300px;
            height: 200px;
            padding: 7px;
            background: #d8d8d8;
            float: left;
            display: inline;
            margin-right: 50px;
        }

        .last-item {
            margin-right: 0;
        }

        .description {
            position: absolute;
            bottom: 7px;
            left: 7px;
            width: 224px;
            text-align: center;
            padding: 15px;
            color: #fff;
        }

        .enlarge {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 7px;
            top: 7px;
            background-image: url(portfolio_overlay.png);
            background-repeat: no-repeat;
            background-position: center center;
        }

        .enlarge a {
            display: block;
            width: 100%;
            height: 100%;
            text-indent: -9999px;
        }

        #copyright {
            margin: 30px auto;
            text-align: center;
            background: url(h3_bg.gif) repeat-x left top;
        }

        #copyright p {
            padding-top: 15px;
        }

        .navbar.navbar-9 .navbar-toggler-icon {
            background-image: url('https://mdbcdn.b-cdn.net/img/svg/hamburger6.svg?color=000');

        }

        .bg-gradient-warning {
            background-image: linear-gradient(195deg, #b4ffb7 0%, #b4ffb708 100%);
        }

        .navbar-light {
            background-color: #ffffff0a !important;
            ;
        }

        .navbar {
            box-shadow: 0 2px 12px 0 rgb(0 0 0 / 0%);
        }

        .alert-danger {
            background-image: linear-gradient(195deg, #f1eded17 0%, #f7bfbe 100%);
        }

        .max-height-vh-100 {
            max-height: 220vh !important;
        }

        .etiquetas {
            font-size: 18px;
        }

        .selectAltura {
            height: 35px;
        }

        .chart-container {
            width: 1000px;
            height: 600px
        }
    </style><br><br><br><br><br>
    <footer class="footer navbar-fixed-bottom">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">(づ ◕‿◕ )づ (◠‿◠✿) (●￣(ｴ)￣●) ヽ(=^●ω●^=)丿U・ᴥ・U</div>
                <div>
                    <a href="#"> </a>
                    &middot;
                    <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
</body>

</html>
