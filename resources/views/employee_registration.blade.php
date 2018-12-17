<!doctype html>

<html class="no-js" lang="en">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />

    <!--====== TITLE TAG ======-->
    <title>LogUcab | Employee Registration</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/stellarnav.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/js/DataTables-1.10.18/css/dataTables.bootstrap.min.css"/>
    <script type="text/javascript" src="/js/DataTables-1.10.18/css/datatables.min.js"></script>
    <script src="/js/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="/js/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="/js/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>

    <!--====== MAIN STYLESHEETS ======-->
    <link href="/style.css" rel="stylesheet">
    <link href="/regform.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body class="home-one">
    <!--- PRELOADER -->
    <!-- <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div> -->

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{url('/')}}" class="navbar-brand"><img src="/img/logo.png" alt="logo"></a>
                        </div>
                        <div class="search-and-language-bar pull-right">
                            <ul>
                                <li><a href="{{url('/login')}}"><i class="fa fa-user" @if ($permissions > 0) title="Login" @endif></i></a></li>
                                @if ($permissions > 0)
                                <li><a href="{{url('/logout')}}"><i class="fa" title="Logout"></i>X</a></li> 
                                <!-- falta linkear el logout aqui -->
                                @endif
                                <li class="search-box"><i class="fa fa-search"></i></li>
                                <li class="select-language">
                                    <select name="#" id="#">
                                    <option selected value="End">ENG</option>
                                    <option value="ARA">ARA</option>
                                    <option value="CHI">CHI</option>
                                </select>
                                </li>
                            </ul>
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="{{url('/')}}">home</a></li>
                                @if(isset($permissions) && $permissions > 3)
                                    <li><a href="#">Clients</a>
                                        <ul>
                                            <li><a href="{{url('/clients')}}">Clients Table</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if(isset($permissions) && $permissions > 3)
                                    <li><a href="#">Employees</a>
                                        <ul>
                                            <li><a href="{{url('/employees')}}">Employees Table</a></li>
                                            <li><a href="{{url('/employeeReg')}}">EMployee Registrartion</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if(isset($permissions) && $permissions > 3)
                                    <li><a href="#">Franchises</a>
                                        <ul>
                                            <li><a href="{{url('/franchises')}}">Franchises Table</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if(isset($permissions) && $permissions > 3)
                                    <li><a href="#">Users & Rol</a>
                                        <ul>
                                            <li><a href="{{url('/users')}}">Users Table</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if(isset($permissions) && $permissions > 3)
                                    <li><a href="#">Routes & Transportation</a>
                                        <ul>
                                            <li><a href="{{url('/routes')}}">Routes Table</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if(isset($permissions) && $permissions > 3)
                                    <li><a href="#">Shipping</a>
                                        <ul>
                                            <li><a href="{{url('/ship')}}">Ship Package</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->

    <div class="container" id="cont1">
            <form class="form-horizontal" role="form" method="POST" action="{{url('/employees/add')}}">
                @csrf
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nombre*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="firstName" placeholder="Nombre" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Apellido*</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lastName" placeholder="Apellido" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">Cedula*</label>
                    <div class="col-sm-9">
                        <input type="number" id="cedula" name="cedula" placeholder="Cedula" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="profesion" class="col-sm-3 control-label">Profesion*</label>
                    <div class="col-sm-9">
                        <input type="text" id="profesion" name="profesion" placeholder="Profesion" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nivelAcademico" class="col-sm-3 control-label">Nivel Academico*</label>
                    <div class="col-sm-9">
                        <input type="text" id="academico" name="academico" placeholder="Nivel Academico" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numeroHijos" class="col-sm-3 control-label">Numero de Hijos*</label>
                    <div class="col-sm-9">
                        <input type="number" id="hijos" name="hijos" placeholder="Numero de hijos" class="form-control" required>
                    </div>
                </div>
                <select name="civil" class="form-control" style="margin-bottom: 10px;" required>
                    <option value="">Seleccione el estado civil</option>
                    <option value="Soltero/a">Soltero</option>
                    <option value="Casado/a">Casado</option>
                    <option value="Viudo/a">Viudo</option>
                    <option value="Divorciado/a">Divorciado</option>
                    <option value="Conyugue">Conyugue</option>
                </select>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Fecha de Nacimiento*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="fnac"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ingreDate" class="col-sm-3 control-label">Fecha de Ingreso*</label>
                    <div class="col-sm-9">
                        <input type="date" id="ingrehDate" class="form-control" name="fing" required>
                    </div>
                </div>
                <select name="sucursal" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione una sucursal</option>
                    @foreach ($franchises as $franchise)
                        <option 
                        @if (!empty($_POST) && $franchise->cod == $_POST['sucursal'])
                        selected 
                        @endif
                        value="{{$franchise->cod}}">{{$franchise->nombre}}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Telefono* </label>
                    <div class="col-sm-9">
                        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Telefono" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Base" class="col-sm-3 control-label">Monto Base* </label>
                    <div class="col-sm-9">
                        <input type="number" id="base" name="base" placeholder="Salario Diario en Bolivares" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                        <label for="lugar" class="col-sm-3 control-label">Zona de Residencia* </label>
                    <div class="col-sm-9">
                        <input type="text" id="direcc" name="direcc" placeholder="Zona de Residencia" class="form-control" required> 
                    </div>
                </div>
                 <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Obligatorio</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->

              <!--====== SCRIPTS JS ======-->
    <!-- <script src="/js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="/js/vendor/jquery.easing.1.3.js"></script>
    <script src="/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/vendor/jquery.appear.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/stellarnav.min.js"></script>
    <script src="/js/contact-form.js"></script>
    <script src="/js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS =====-->
    <script src="/js/main.js"></script>
    
</body>

</html>

<!--=====  DATA TABLE =====-->
<script>  
   
</script> 