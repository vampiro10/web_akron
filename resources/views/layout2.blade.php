    <!DOCTYPE html>
    <html lang="en">
    
        <!-- Mirrored from demo.bootstrapious.com/hub/1-4-0/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Aug 2018 14:52:41 GMT -->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Akron </title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="all,follow">
            <!-- Bootstrap CSS-->
            <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrapv4.1.1/css/bootstrap.min.css') }}">

            <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/css/bootstrap-slider.min.css') }}">
            <!-- Font Awesome CSS-->
            <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
            <!-- Bootstrap Select-->
            <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
            <!-- Price Slider Stylesheets -->
            <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.css') }}">
            <!-- Custom font icons-->
            <link rel="stylesheet" href="{{ asset('assets/css/custom-fonticons.css') }}">
            <!-- Google fonts - Oswald-->
            <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet">
            <!-- owl carousel-->
            <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carouselv2.3.4/assets/owl.carousel.css') }} ">
            <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carouselv2.3.4/assets/owl.theme.default.css') }}">
            <!-- theme stylesheet-->
            <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}" id="theme-stylesheet">
            <!-- Custom stylesheet - for your changes-->

            <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

            <!-- Custom stylesheet - for your changes-->
            <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
            <!-- Favicon-->
            <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
            <!-- Modernizr-->
            <script src="{{ asset('assets/js/modernizr.custom.79639.js') }} "></script>
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
            <script src="{{ asset('assets/js/jquery.flexisel.js') }}"></script>
            <!-- Tweaks for older IEs--><!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            @yield('styles')
        </head>
            
        <body>
            @php function activeMenu($url) {  return request()->is($url) ? 'active' : ''; } @endphp
            <!-- navbar-->
            <header class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="search-area">
                <div class="search-area-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn"><i class="icon-close"></i></div>
                    <form action="#">
                    <div class="form-group">
                        <input type="search" name="search" id="search" placeholder="¿Qué estás buscando?">
                        <button type="submit" class="submit"><i class="icon-search"></i></button>
                    </div>
                    </form>
                </div>
                </div>

                <div class="container justify-content-end">
                    <div class=" right-col d-flex align-items-lg-center flex-column flex-lg-row">
                        <!-- Search Button-->
                        <div class="search"><i class="icon-search"></i></div>

                        <!-- User Not Logged - link to login page-->
                        <div class="user dropdown show">
                            <a id="userdetails" href="{{ route('micuenta') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-profile"></i> REGISTRARSE/ LOGIN
                            </a>
                            <a href="cart.html" class="text-primary view-user">View Cart</a>
                            <div aria-labelledby="userdetails" class="dropdown-menu ">
                            <div class="row">
                                <div class="col-md-4  product-col ">
                                    <div class="row mb-3 justify-content-md-center"><strong class="text-dark">¿Aun no tienes cuenta?</strong></div>
                                    <div class="row "> <p class="text-dark" >¡Registrate ahora! es facil y rapido y podras realizar tus compras más rapido </p></div>
                                    <div class="col-md-12">
                                        {{-- <button type="button" href="{{ route('crear-cuenta') }}" class="btn btn-outline-danger btn-block">Crear cuenta</button> --}}

                                        <a class="btn btn-outline-danger btn-block" href="{{ route('crear-cuenta') }}" >Crear cuenta</a>
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="col-md-12">
                                        <div class="row mb-3"><strong class="text-dark">Iniciar sesión</strong></div>
                                        <form>

                                            <div class="form-row text-dark">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4 ">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                    <a href="#" class="badge badge-light mt-3">Olvide mi contraseña</a>
                                                    
                                                </div>
                                                </div>

                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="form-check text-dark">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 offset-md-4 pr-0">
                                                        <button type="submit" class="btn btn-outline-danger float-md-right ">Iniciar sesión</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Español <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a> 

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Ingles</a>
                            </div>
                        </div>

                        <!-- Cart Dropdown-->
                        <div id="cart" class="cart dropdown show"><a id="cartdetails" href="{{ route('carrito') }}"  aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
                            <div class="cart-no">1</div></a><a href="cart.html" class="text-primary view-cart">View Cart</a>
                            <div aria-labelledby="cartdetails" class="dropdown-menu">
                            <!-- cart item-->
                            <div class="dropdown-item cart-product">
                                <div class="d-flex align-items-center">
                                <div class="img"><img src="" alt="..." class="img-fluid"></div>
                                <div class="details d-flex justify-content-between">
                                    <div class="text"> <a href="#"><strong>Heather Gray Hoodie</strong></a><small>Quantity: 1 </small><span class="price">$75.00 </span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                                </div>
                                </div>
                            </div>
                            <!-- total price-->
                            <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">$75.00</strong></div>
                            <!-- call to actions-->
                            <div class="dropdown-item CTA d-flex"><a href="cart.html" class="btn btn-template wide">View Cart</a><a href="checkout1.html" class="btn btn-template wide">Checkout</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="container">  
                <!-- Navbar Header  --><a href="{{ route('home') }}" class="navbar-brand"><img src="{{asset('assets/img/logo_akron.png')}}" alt="..."></a>
                <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <!-- Navbar Collapse -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    
                    <ul class="navbar-nav mx-0 justify-content-end">
                        
                        <li class="nav-item "><a href="{{ route('home') }}" class="nav-link {{ activeMenu('/')}}">Inicio</a>
                        <!-- Megamenu Productos-->
                        <li  id="dp" class="nav-item dropdown "><a href="{{ route('productos.index') }}" disabled="disabled" class="nav-link {{ activeMenu('productos')}}">Productos</a>
                            <div id="products" class="dropdown-menu megamenu">
                            <div class="row">
                                <div class="col-md-4 product-col ">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="row text-uppercase"><h4>Akron </h4> </div>
                                        <div class="row"><h5 class="green text-uppercase">Greenroad</h5></div>
                                        <div class="row">
                                        <p>El primer aditivo ecológico para gasolina y diesel. Reduce emisiones contaminantes y ahora hasta un 10% de combustible.</p>
                                        </div>
                                        
                                        <a class="btn btn-success" href="{{ route('greenroad') }}" >Conocer más <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 "> 
                                    <img id="mt-19em" class="img-fluid" src="{{asset('assets/img/greenroad/green.png')}}" alt="green road">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4 product-col text-uppercase">
                                <div class="col-md-12">Categorías de Productos 
                                    <ul class="list-unstyled">
                                    <li><a href="#">- Automoviles y camionetas</a></li>
                                    <li><a href="#">- Motocicletas</a></li>
                                    <li><a href="#">- Marino creativo </a></li>
                                    <li><a href="#">- Carga y transporte </a></li>
                                    <li><a href="#">- Industrial</a></li>
                                    </ul>
                                </div>
                                </div>
                                <div class="col-md-4 text-uppercase">
                                <div class="col-md-12 ">Tipos de productos
                                    <ul class="list-unstyled">
                                    <li><a href="#">- Aceites </a></li>
                                    <li><a href="#">- Aditivos de combustible</a></li>
                                    <li><a href="#">- Anticongelantes </a></li>
                                    <li><a href="#">- Cuidado exterior </a></li>
                                    <li><a href="#">- Diesel </a></li>
                                    <li><a href="#">- Engranes y transmisores  </a></li>
                                    <li><a href="#">- Especialidades automotrices </a></li>
                                    <li><a href="#">- Especialidades diesel </a></li>
                                    <li><a href="#">- Grasas lubricantes </a></li>
                                    <li><a href="#">- Transmisiones </a></li>
                                    </ul>
                                </div>
                                </div>
                                
                            </div>
                            </div>
                        </li>
                        <!-- /Megamenu end Productos-->

                        <li class="nav-item "><a href="{{ route('gasolinera') }}" class="nav-link {{ activeMenu('gasolinera')}}">Gasolinera</a>

                        <!-- Megamenu Servicios-->
                        <li id="dp" class="nav-item dropdown "><a href="{{ route('servicios') }}" disabled="disabled" class="nav-link {{ activeMenu('servicios')}}">Servicios</a>
                            <div id="service" class="dropdown-menu megamenu ">
                            <div class="row">
                                <div class="col-md-6 product-col ">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="row text-uppercase"><h4>Akron </h4></div>
                                        <div class="row"><h5 class="green text-uppercase">Greenroad</h5></div>
                                        <div class="row">
                                        <p>El primer aditivo ecológico para gasolina y diesel. Reduce emisiones contaminantes y ahora hasta un 10% de combustible.</p>
                                        </div>
                                        <a class="btn btn-success" href="{{ route('greenroad') }}" >Conocer más <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 "> 
                                    <img id="mt-19em" class="img-fluid" src="{{asset('assets/img/greenroad/green.png')}}" alt="green road">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 text-uppercase">
                                <div class="col-md-12 ">Nuestros servicios
                                    <ul class="list-unstyled">
                                    <li><a href="#">- Zona akron</a></li>
                                    <li><a href="#">- Pitlub</a></li>
                                    </ul>
                                </div>
                                </div>
                                
                            </div>
                            </div>
                        </li>
                        <!-- /Megamenu end Servicios-->

                        <!-- Megamenu industrial-->
                        <li id="dp" class="nav-item dropdown "><a href="{{ route('industrial') }}" disabled="disabled" class="nav-link {{ activeMenu('industrial')}}">Industria</a>
                            <div id="industria" class="dropdown-menu megamenu ">
                            <div class="row">
                                <div class="col-md-4 product-col ">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="row text-uppercase"><h4>Akron </h4></div>
                                        <div class="row"><h5 class="green text-uppercase">Greenroad</h5></div>
                                        <div class="row">
                                        <p>El primer aditivo ecológico para gasolina y diesel. Reduce emisiones contaminantes y ahora hasta un 10% de combustible.</p>
                                        </div>
                                        <a class="btn btn-success" href="{{ route('greenroad') }}" >Conocer más <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 "> 
                                    <img id="mt-19em" class="img-fluid" src="{{asset('assets/img/greenroad/green.png')}}" alt="green road">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4 product-col text-uppercase">
                                    <div class="col-md-12 ">Industria
                                        <ul class="list-unstyled">
                                        <li><a href="#">- Productos</a></li>
                                        <li><a href="#">- Industrias</a></li>
                                        <li><a href="#">- Pacom </a></li>
                                        <li><a href="#">- Catálogos </a></li>
                                        <li><a href="#">- Contacto</a></li>
                                        <li><a href="#">- Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 text-uppercase">
                                    <div class="col-md-12  ">Productos
                                        <ul class="list-unstyled">
                                        <li><a href="#">- Transporte </a></li>
                                        <li><a href="#">- Minas</a></li>
                                        <li><a href="#">- Agrícola </a></li>
                                        <li><a href="#">- Industriales </a></li>
                                        <li><a href="#">- Construcción </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </li>
                        <!-- /Megamenu end industrial-->

                        <!-- Multi level dropdown    -->
                        <li class="nav-item "><a href="{{ route('distribuidor') }}" class="nav-link {{ activeMenu('distribuidor')}}">Distribuidores</a>
                        <!-- Multi level dropdown end-->

                        <!-- Megamenu actitud-->
                        <li id="dp" class="nav-item dropdown "><a href="{{ route('actitud') }}" disabled="disabled" class="nav-link {{ activeMenu('actitud')}}">Actitud absoluta</a>
                            <div id="actitud" class="dropdown-menu megamenu">
                            <div class="row">
                                <div class="col-md-6 product-col ">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="row text-uppercase"><h4>Akron </h4></div>
                                        <div class="row"><h5 class="green text-uppercase">Greenroad</h5></div>
                                        <div class="row">
                                        <p class="text-white">El primer aditivo ecológico para gasolina y diesel. Reduce emisiones contaminantes y ahora hasta un 10% de combustible.</p>
                                        </div>
                                        
                                        <a class="btn btn-success" href="{{ route('greenroad') }}" >Conocer más <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 "> 
                                    <img id="mt-19em" class="img-fluid" src="{{asset('assets/img/greenroad/green.png')}}" alt="green road">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 text-uppercase">
                                <div class="col-md-12 ">Embajadores 
                                    <ul class="list-unstyled">
                                    <li><a href="#">- Erick Ruiz</a></li>
                                    <li><a href="#">- Rogelio López</a></li>
                                    <li><a href="#">- Carlos Ortiz</a></li>
                                    <li><a href="#">- Jaime Munguía</a></li>
                                    </ul>
                                </div>
                                </div>
                                
                            </div>
                            </div>
                        </li>
                        <!-- /Megamenu end actitud-->
                        
                    </ul>
                    
                    
                </div>
                </div>
            </nav>
            </header>
                @yield('contenido')
            <!-- Footer-->
            <footer class="main-footer">
            <!-- Main Block -->
            <div class="main-block">
            <div class="container">
                <div class="row">
                <div class="info col-md-3">
                    <span>¿QUIÉNES SOMOS?</span>
                    <ul class="social-menu list-inline">
                    <li class=""><a href="#" target="_blank" title="">- AUTOMÓVILES Y CAMIONETAS</a></li>
                    <li class=""><a href="#" target="_blank" title="">- MOTOCICLETAS</a></li>
                    <li class=""><a href="#" target="_blank" title="">- MARINO CREATIVO</a></li>
                    <li class=""><a href="#" target="_blank" title="">- CARGA Y TRANSPORTE</a></li>
                    <li class=""><a href="#" target="_blank" title="">- INDUSTRIAL</a></li>
                    </ul>
                </div>
                <div class="site-links col-md-3">
                    <span>POLÍTICAS</span>
                    <ul class="list-unstyled">
                    <li> <a href="#">- AVISO DE PRIVACIDAD</a></li>
                    <li> <a href="#">- ENVÍOS Y DEVOLUCIÓN</a></li>
                    <li> <a href="#">- TERMINOS Y CONDICIONES</a></li>
                    <li> <a href="#">- PREGUNTAS FRECUENTES</a></li>
                    

                    </ul>
                </div>
                <div class="site-links col-md-3">
                    <span>INFORMACIÓN</span>
                    <ul class="list-unstyled">
                    <li> <a href="#">- ZONA AKRON</a></li>
                    <li> <a href="{{route('donde-comprar')}}">- DONDE COMPRAR</a></li>
                    <li> <a href="{{route('blog')}}">- BLOG</a></li>
                    <li> <a href="{{route('empresa')}}">- EMPRESA</a></li>
                    <li> <a href="#">- CONTACTO</a></li>
                    </ul>
                </div>
                <div class="newsletter col-md-3">
                    <img class="img-fluid" src="{{ asset('assets/img/logo_akron.png') }} " alt="">
                    <ul class="list-unstyled icons-social">
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/FB.png') }} " alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/instagram.png') }} " alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/tw.png') }} " alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/youtube.png') }} " alt=""></a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
            <div class="copyrights">
            <div class="container">
                <div class="row d-flex align-items-center">
                <div class="text col-md-12 col-sm-12 col-xs-12 ">
                    <p>COPYRIGHT &copy; {{ date("Y") }} MEXICANA DE LUBRICANTES S.A. DE C.V. ALL RIGHTS RESERVED.  <a href=""><span>AVISO DE PRIVACIDAD</span></a> | <a href=""><span>POLÍTICAS, TERMINOS Y CONDICIONES</span></a> | <a href="{{ route('mapa-sitio') }}"><span>MAPA DE SITIO</span></a> </p>
                </div>
                </div>
            </div>
            </div>
        </footer>
        <!-- JavaScript files-->
        {{-- <script src="{{ asset('assets/vendor/jqueryv3.3.1/jquery.min.js') }} "> </script> --}}
        <script src="{{ asset('assets/vendor/popper.js/umd/popper.min.js') }} "> </script>
        <script src="{{ asset('assets/vendor/bootstrapv4.1.1/js/bootstrap.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-slider/js/bootstrap-slider.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-slider/js/bootstrap-slider-custom.js') }} "></script>
        <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.js') }} "> </script>
        <script src="{{ asset('assets/vendor/owl.carouselv2.3.4/owl.carousel.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/jquery-countdown/jquery.countdown.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-spinner/dist/bootstrap-spinner.min.js') }} "></script>
        <script src="{{ asset('assets/vendor/bootstrap-spinner/dist/mousehold.min.js') }} "></script>  
        <!-- Main Template File-->
        <script src="{{ asset('assets/js/front.js') }} "></script>
        @yield('scripts')
        </body>
    </html>