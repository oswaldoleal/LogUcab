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
    <link rel="shortcut icon" type="image/ico" href="/img/favicon.png" />

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
                                @if (empty($permissions))
                                <li><a href="{{url('/login')}}"><i class="fa fa-user" title="Login" ></i></a></li>
                                @endif
                                @if (!empty($permissions))
                                <li><a href="{{url('/logout')}}"><i class="fa" title="Logout"></i>X</a></li>
                                @endif
                                <li class="search-box"><i class="fa fa-search"></i></li>
                                <li class="select-language">
                                    <select name="#" id="#">
                                    <option selected value="End">SPA</option>
                                    <option value="End">ENG</option>
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
                                <li><a href="about.html">about</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                @if (isset($permissions) && in_array(4,$permissions))
                                    <li><a href="#">Menu</a>
                                        <ul>
                                            <li><a href="{{url('/shipments')}}">Shipments Table</a></li>
                                            @if (in_array(1,$permissions))
                                            <li><a href="{{url('/ship')}}">Ship Package</a></li>
                                            <li><a href="{{url('/users')}}">Users Table</a></li>
                                            <li><a href="{{url('/clients')}}">Clients Table</a></li>
                                            <li><a href="{{url('/employees')}}">Employees Table</a></li>
                                            <li><a href="{{url('/packages')}}">Packages Table</a></li>
                                            <li><a href="{{url('/locations')}}">Locations Table</a></li>
                                            <li><a href="{{url('/franchises')}}">Franchises Table</a></li>
                                            <li><a href="{{url('/routes')}}">Routes Table</a></li>
                                            <li><a href="{{url('/roles')}}">Roles Table</a></li>
                                            <li><a href="{{url('/vehicles')}}">Vehicles Table</a></li>
                                            <li><a href="{{url('/zones')}}">Zones Table</a></li>
                                            <li><a href="{{url('/airports')}}">Airports Table</a></li>
                                            <li><a href="{{url('/ports')}}">Ports Table</a></li>
                                            <li><a href="{{url('/services')}}">Services Table</a></li>
                                            <li><a href="{{url('/workshops')}}">Workshops Table</a></li>
                                            <li><a href="{{url('/payroll')}}">Payroll Invoice</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                                @if (isset($permissions) && in_array(1,$permissions))
                                    <li><a href="#">Reports</a>
                                        <ul>
                                            @if (in_array(3,$permissions))
                                            <li><a href="{{url('/logs')}}">Logs</a></li>
                                            @endif
                                            <li><a href="{{url('/report/omsrp')}}">Office with most sended & received packages</a></li>
                                            <li><a href="{{url('/report/mlur')}}">Most & Least used routes</a></li>
                                            <li><a href="{{url('/report/port-franchises')}}">Airports & Harbors Franchises</a></li>
                                            <li><a href="{{url('/report/avg-weight')}}">Average Package Weight by Franchise</a></li>
                                            <li><a href="{{url('/report/airplanes')}}">Detailed Aircraft List</a></li>
                                            <li><a href="{{url('/report/frequent')}}">Frequent Clients List</a></li>
                                            <li><a href="{{url('/report/most-send')}}">Clients Who Send the Most by Office</a></li>
                                            <li><a href="{{url('/report/daily-average')}}">Average of Daily Packages by Office</a></li>
                                            <li><a href="{{url('/report/best-month')}}">Month with Most Shipments</a></li>
                                            <li><a href="{{url('/report/avg-stay')}}">Average Package Stay by Zone</a></li>
                                            <li><a href="{{url('/report/international')}}">International Franchises</a></li>
                                            <li><a href="{{url('/report/pack-period')}}">Package Information by Period</a></li>
                                            <li><a href="{{url('/report/offices-location')}}">Franchises Detailed Location</a></li>
                                            <li><a href="{{url('/report/biggest-office')}}">Biggest Office</a></li>
                                            <li><a href="{{url('/report/employee-detail-date')}}">Employee Detailed by Date</a></li>
                                            <li><a href="{{url('/report/active-employees')}}">Active Employees List</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if (isset($permissions) && in_array(1,$permissions))
                                    <li><a href="#">+ Reports</a>
                                        <ul>
                                            <li><a href="{{url('/report/most-used-transport')}}">Most Used Transport</a><li>
                                            <li><a href="{{url('/report/services')}}">Services by Office</a><li>
                                            <li><a href="{{url('/report/workshop')}}">Workshops by Zone</a><li>
                                            <li><a href="{{url('/report/most-transit-office')}}">Office with Most Package Transit</a><li>
                                            <li><a href="{{url('/report/package-alert')}}">Package Alert</a></li>
                                            <li><a href="{{url('/report/most-expensive')}}">Most Expensive Office</a></li>
                                            <li><a href="{{url('/report/workshop-expenses')}}">Workshop Expenses by Office</a></li>
                                            <li><a href="{{url('/report/maintenance-history')}}">Maintenance History</a></li>
                                            <li><a href="{{url('/report/weekly-payroll')}}">Weekly Payroll by Office</a></li>
                                            <li><a href="{{url('/report/employees-schedule')}}">Employees Schedule</a></li>
                                            <li><a href="{{url('/report/fleet-detail')}}">Fleet Details</a></li>
                                            <li><a href="{{url('/report/percentage')}}">Transport Use Percentage</a></li>
                                            <li><a href="{{url('/report/income-expense')}}">Income and Expenses by Office</a></li>
                                            <li><a href="{{url('/report/ie-date')}}">Income and Expenses by Date</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if (isset($permissions) && in_array(3,$permissions))
                                    <li><a href="{{url('/attendance')}}">Attendance</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->

    <div class="container" id="cont1">
            @if (isset($message))
                <div class="container" id="alert" style="margin-top: 2%;">
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="{{url('/employees/add')}}">
                @csrf
                <input type="hidden" name="add" value="@if (isset($add))add @endif">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nombre*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="firstName" placeholder="Nombre" class="form-control" autofocus required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_nombre}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Apellido*</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lastName" placeholder="Apellido" class="form-control" autofocus required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_apellido}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">Cedula*</label>
                    <div class="col-sm-9">
                        <input type="number" id="cedula" name="cedula" placeholder="Cedula" class="form-control" required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_cedula}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email" required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_email_personal}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="profesion" class="col-sm-3 control-label">Profesion*</label>
                    <div class="col-sm-9">
                        <input type="text" id="profesion" name="profesion" placeholder="Profesion" class="form-control" required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_profesion}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="nivelAcademico" class="col-sm-3 control-label">Nivel Academico*</label>
                    <div class="col-sm-9">
                    <select name="academico" class="form-control" style="margin-bottom: 10px;" required>
                        <option value="">Seleccione el Nivel Academico</option>
                        <option value="Basica">Basica</option>
                        <option value="Media">Media</option>
                        <option value="Superior">Superior</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numeroHijos" class="col-sm-3 control-label">Numero de Hijos*</label>
                    <div class="col-sm-9">
                        <input type="number" id="hijos" name="hijos" placeholder="Numero de hijos" class="form-control" required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_num_hijos}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="civil" class="col-sm-3 control-label">Estado civil*</label>
                    <div class="col-sm-9">
                        <select name="civil" class="form-control" style="margin-bottom: 10px;" required>
                            <option value="">Seleccione el estado civil</option>
                            <option value="Soltero/a">Soltero</option>
                            <option value="Casado/a">Casado</option>
                            <option value="Viudo/a">Viudo</option>
                            <option value="Divorciado/a">Divorciado</option>
                            <option value="Conyugue">Conyugue</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Fecha de Nacimiento*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="fnac"required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_f_nacimiento}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="ingreDate" class="col-sm-3 control-label">Fecha de Ingreso*</label>
                    <div class="col-sm-9">
                        <input type="date" id="ingrehDate" class="form-control" name="fing" required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_f_ingreso}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="sucursal" class="col-sm-3 control-label">Sucursal*</label>
                    <div class="col-sm-9">
                        <select name="sucursal" class="form-control" style="margin-bottom: 10px;" required>
                            <option value="">Seleccione una sucursal</option>
                            @foreach ($franchises as $franchise)
                                <option 
                                @if (isset($employee) && $franchise->cod == $employee[0]->emp_sucursal)
                                selected 
                                @endif
                                value="{{$franchise->cod}}">{{$franchise->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">Pais*</label>
                    <div class="col-sm-9">
                        <select name="country" class="form-control" style="margin-bottom: 10px;" required>
                            <option value="">Seleccione el pais</option>
                            @foreach ($countries as $country)
                                <option 
                                @if (isset($employee) && $country->cod == $employee[0]->emp_lugar)
                                selected 
                                @endif
                                value="{{$country->cod}}">{{$country->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="estado" class="col-sm-3 control-label">Estado*</label>
                    <div class="col-sm-9">
                        <select name="state" class="form-control" style="margin-bottom: 10px;" required>
                            <option value="">Seleccione el estado</option>
                            @foreach ($states as $state)
                                <option 
                                @if (isset($employee) && $state->cod == $employee[0]->emp_lugar)
                                selected 
                                @endif
                                value="{{$state->cod}}">{{$state->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Telefono* </label>
                    <div class="col-sm-9">
                        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Telefono" class="form-control" required
                        @if (isset($phone))
                            value="{{$phone[0]->tel_numero}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                        <label for="Base" class="col-sm-3 control-label">Monto Base* </label>
                    <div class="col-sm-9">
                        <input type="number" id="base" name="base" placeholder="Salario Diario en Bolivares" class="form-control" required
                        @if (isset($employee))
                            value="{{$employee[0]->emp_monto_base}}"
                        @endif
                        >
                    </div>
                </div>
                <div class="form-group">
                        <label for="lugar" class="col-sm-3 control-label">Zona de Residencia* </label>
                    <div class="col-sm-9">
                        <input type="text" id="direcc" name="direcc" placeholder="Zona de Residencia" class="form-control" required
                        @if (isset($location))
                            value="{{$location[0]->lug_nombre}}"
                        @endif
                        > 
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