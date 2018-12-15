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
    <title>LogUcab | Home</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="js/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="js/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
                            <a href="#home" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <div class="search-and-language-bar pull-right">
                            <ul>
                                <li><a href="{{url('/login')}}"><i class="fa fa-user"></i></a></li>
                                @if ($permissions > 0)
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
                                @if (isset($permissions) && $permissions > 3)
                                    <li><a href="#">Menu</a>
                                        <ul>
                                            <li><a href="{{url('/users')}}">Users Table</a></li>
                                            <li><a href="{{url('/employees')}}">Employees Table</a></li>
                                            <li><a href="{{url('/locations')}}">Locations Table</a></li>
                                            <li><a href="{{url('/franchises')}}">Franchises Table</a></li>
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
        </div>

        <div class="shipping-area">
            <!-- multistep form -->
            @if (isset($message))
                <div class="container" id="alert" style="margin-top: 2%;">
                    <div class="alert alert-success" role="alert">
                        {{$message}}
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
                <input type="text" name="id1" placeholder="Id"
                @if (!empty($_POST))
                    value="{{$_POST['id1']}}"
                @endif
                />
                <input type="text" name="first-name" placeholder="First Name"
                @if (!empty($_POST))
                    value="{{$_POST['first-name']}}"
                @endif
                />
                <input type="text" name="surname" placeholder="Surname"
                @if (!empty($_POST))
                    value="{{$_POST['surname']}}"
                @endif
                />
                <input type="text" name="phone-#" placeholder="+77(777)7777777"
                @if (!empty($_POST))
                    value="{{$_POST['phone-#']}}"
                @endif
                />
                <select name="country" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el pais</option>
                    @foreach ($countries as $country)
                        <option value="{{$country->cod}}">{{$country->nombre}}</option>
                    @endforeach
                </select>
                <select name="state" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el estado</option>
                    @foreach ($states as $state)
                        <option value="{{$state->cod}}">{{$state->nombre}}</option>
                    @endforeach
                </select>
                <textarea name="address" placeholder="Address"></textarea>
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                <h2 class="fs-title">Shipping Information</h2>
                <h3 class="fs-subtitle">How you want to ship</h3>
                <input type="number" name="peso" placeholder="Peso"/>
                <input type="number" name="alto" placeholder="Alto" />
                <input type="number" name="ancho" placeholder="Ancho" />
                <input type="number" name="profundidad" placeholder="Profundidad" />
                <input type="text" name="tipo-paquete" placeholder="Tipo paquete" />
                <select name="tipo" class="form-control" style="margin-bottom: 10px;">
                    <option value="">Seleccione el tipo de paquete</option>
                    @foreach ($types as $type)
                        <option value="{{$type->cod}}">{{$type->nombre}}</option>
                    @endforeach
                </select>
                <input type="text" name="clasificacion" placeholder="Clasificacion" />
                <input type="radio" name="tipo-envio-1"/><label> Terrestres Shipping <span class="price">$4.00</span></label>
                <input type="radio" name="tipo-envio-2"/><label> Aereo Shipping <span class="price">$4.00</span></label>
                <input type="radio" name="tipo-envio-3"/><label> Marino Shipping <span class="price">$4.00</span></label>
                <input type="number" name="precio-kg" placeholder="Precio por kilo" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                <h2 class="fs-title">Payment Information</h2>
                <h3 class="fs-subtitle">We will never sell it</h3>
                <input type="text" name="card-number" placeholder="Card number: xxxxxx-xxxxx-xxxx-xxxx " />
                <input type="text" name="expe-date" placeholder="Expedition Date: e.g. MM/YY" />
                <input type="text" name="expi-date" placeholder="Expiration Date: e.g. MM/YY" />
                <input type="text" name="sec-code" placeholder="Security Code: e.g. xxx" />
                <input type="text" name="name" placeholder="Full name" />
                <input type="text" name="number" placeholder="Cellphone number" />
                <input type="text" name="id2" placeholder="id" />
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
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/shipping-form.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS =====-->
    <script src="js/main.js"></script>

</body>

</html>