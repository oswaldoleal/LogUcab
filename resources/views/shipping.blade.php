<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />

    <!--====== TITLE TAG ======-->
    <title>LogUcab | Shipping</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/stellarnav.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!--====== MAIN STYLESHEETS ======-->
    <link href="/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <script src="/js/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="/js/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="/js/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home-one">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

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
        </div>

        <div class="shipping-area">
            <!-- multistep form -->
            @if (isset($message))
                <div class="container" id="alert" style="margin-top: 2%;">
                    <div class="alert alert-success" role="alert">
                        {{$message}} @if (isset($invoice)) <a href="{{url('/print/'.$invoice[1])}}" target="_blank">{{$invoice[0]}}</a> @endif
                    </div>
                </div>
            @endif
            <form id="msform" method="POST" action="{{url('/ship')}}">
                @csrf
                <!-- progressbar -->
                <ul id="progressbar">
                <li class="active">Billing</li>
                <li>Shipping</li>
                <li>Payment</li>
                <li>Finalize</li>
                
                </ul>
                <!-- fieldsets -->
                <fieldset>
                <h2 class="fs-title">Billing Information</h2>
                <h3 class="fs-subtitle">To whom you ship</h3>
                <input type="text" name="receiverID" placeholder="Receiver Id"
                @if (!empty($_POST))
                    value="{{$_POST['receiverID']}}"
                @endif
                />
                <input type="text" name="receiverName" placeholder="Receiver First Name"
                @if (!empty($_POST))
                    value="{{$_POST['receiverName']}}"
                @endif
                />
                <input type="text" name="senderID" placeholder="Sender Id"
                @if (!empty($_POST))
                    value="{{$_POST['senderID']}}"
                @endif
                />
                <input type="text" name="senderName" placeholder="Sender First Name"
                @if (!empty($_POST))
                    value="{{$_POST['senderName']}}"
                @endif
                />
                <input type="text" name="surname" placeholder="Surname"
                @if (!empty($_POST))
                    value="{{$_POST['surname']}}"
                @endif
                />
                <input type="text" name="date" placeholder="Birthday"
                @if (!empty($_POST))
                    value="{{$_POST['date']}}"
                @endif
                />
                <select name="civil" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el estado civil</option>
                    <option value="Soltero/a">Soltero</option>
                    <option value="Casado/a">Casado</option>
                    <option value="Viudo/a">Viudo</option>
                    <option value="Divorciado/a">Divorciado</option>
                    <option value="Conyugue">Conyugue</option>
                </select>
                <input type="text" name="company" placeholder="Company"
                @if (!empty($_POST))
                    value="{{$_POST['company']}}"
                @endif
                />
                <input type="text" name="phone-#" placeholder="+77(777)7777777"
                @if (!empty($_POST))
                    value="{{$_POST['phone-#']}}"
                @endif
                />
                <input type="text" name="email" placeholder="email@domain.com"
                @if (!empty($_POST))
                    value="{{$_POST['email']}}"
                @endif
                />
                <select name="country" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el pais</option>
                    @foreach ($countries as $country)
                        <option 
                        @if (!empty($_POST) && $country->cod == $_POST['country'])
                        selected 
                        @endif
                        value="{{$country->cod}}">{{$country->nombre}}</option>
                    @endforeach
                </select>
                <select name="state" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el estado</option>
                    @foreach ($states as $state)
                        <option 
                        @if (!empty($_POST) && $state->cod == $_POST['state'])
                        selected 
                        @endif
                        value="{{$state->cod}}">{{$state->nombre}}</option>
                    @endforeach
                </select>
                <textarea name="address" placeholder="Address">@if (!empty($_POST)){{$_POST['address']}}@endif</textarea>
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                <h2 class="fs-title">Shipping Information</h2>
                <h3 class="fs-subtitle">How you want to ship</h3>
                <select name="origen" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el origen</option>
                    @foreach ($franchises as $franchise)
                        <option 
                        @if (!empty($_POST) && $franchise->cod == $_POST['origen'])
                        selected 
                        @endif
                        value="{{$franchise->cod}}">{{$franchise->nombre}}</option>
                    @endforeach
                </select>
                <select name="destino" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el destino</option>
                    @foreach ($franchises as $franchise)
                        <option 
                        @if (!empty($_POST) && $franchise->cod == $_POST['destino'])
                        selected 
                        @endif
                        value="{{$franchise->cod}}">{{$franchise->nombre}}</option>
                    @endforeach
                </select>
                <input type="number" name="peso" placeholder="Peso"
                @if (!empty($_POST))
                    value="{{$_POST['peso']}}"
                @endif
                />
                <input type="number" name="alto" placeholder="Alto" 
                @if (!empty($_POST))
                    value="{{$_POST['alto']}}"
                @endif
                />
                <input type="number" name="ancho" placeholder="Ancho" 
                @if (!empty($_POST))
                    value="{{$_POST['ancho']}}"
                @endif
                />
                <input type="number" name="profundidad" placeholder="Profundidad" 
                @if (!empty($_POST))
                    value="{{$_POST['profundidad']}}"
                @endif
                />
                <select name="tipo" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el tipo de paquete</option>
                    @foreach ($types as $type)
                        <option 
                        @if (!empty($_POST) && $type->cod == $_POST['tipo'])
                        selected 
                        @endif
                        value="{{$type->cod}}">{{$type->nombre}}</option>
                    @endforeach
                </select>
                <input type="radio" name="tipo-envio" value="1"/><label>Terrestre</label>
                <input type="radio" name="tipo-envio" value="3"/><label>Aereo</label>
                <input type="radio" name="tipo-envio" value="2"/><label>Marino</label>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                <h2 class="fs-title">Payment Information</h2>
                <h3 class="fs-subtitle">We will never sell it</h3>
                <input type="radio" name="tipo-pago" value="Debito"/><label>Debito</label>
                <input type="radio" name="tipo-pago" value="Credito"/><label>Credito</label>
                <input type="radio" name="tipo-pago" value="Efectivo"/><label>Efectivo</label>
                <input type="radio" name="tipo-pago" value="Cheque"/><label>Cheque</label>
                <input type="radio" name="tipo-pago" value="N"/><label>Pago en destino</label>
                <input type="text" name="card-number" placeholder="Card number/Check number" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                <h2 class="fs-title">Finalize Order</h2>
                <h3 class="fs-subtitle">May the force be with you</h3>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" class="action-button" value="Submit" />
                </fieldset>
            </form>
        </div>

        <!--====== SCRIPTS JS ======-->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/shipping-form.js"></script>

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