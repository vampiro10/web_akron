<!DOCTYPE html>
<html class="dark">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Akron - Inicio</title>	

		<meta name="keywords" content="Akron akron aceite automoviles" />
		<meta name="description" content="Akron aceites ">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrapv3.3.7/css/bootstrap.min.css') }} ">
		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }} ">
		<link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }} ">
		<link rel="stylesheet" href="{{ asset('assets/vendor/owl.carouselv2.1.6/assets/owl.carousel.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carouselv2.1.6/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/home/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/home/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/home/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/home/theme-shop.css') }}">
    

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/rs-plugin/css/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/circle-flip-slideshow/css/component.css') }}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">

		<!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/home/custom.css') }}">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
		@php function activeMenu($url) {  return request()->is($url) ? 'active' : ''; } @endphp
		<div class="body">
			<header  id="header" class="header-full-width" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="{{ route('home') }}">
										<img alt="Akron" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="assets/img/logo_akron_bco222x108.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											
											<li>
												<a href="tel:+3331340500"><span class="ws-nowrap"><i class="fa fa-phone"></i> (33) 3134-0500</span></a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown {{ activeMenu('/')}}">
														<a class="dropdown-toggle" href="index.html">
															Productos
														</a>
														<ul class="dropdown-menu">
															
															<li class="dropdown-submenu">
																<a href="#">Automoviles y camionetas</a>
																<ul class="dropdown-menu">
																	<li><a href="#" data-thumb-preview="assets/img/img_home/img/slides/aceite500x370.png">Aceites</a></li>
																	<li><a href="index-classic-color.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-color.jpg">Aditivos de combustible</a></li>
																	<li><a href="index-classic-light.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-light.jpg">Especialidades automotrices</a></li>
																	<li><a href="index-classic-video.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-video.jpg">Cuidado exterior</a></li>
																	<li><a href="index-classic-video-light.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-video-light.jpg">Transmisiones</a></li>
																	<li><a href="index-classic-video-light.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-video-light.jpg">Anticongelantes</a></li>
																</ul>
															</li>
															<li>
																<a href="#">
																	Motocicletas
																</a>
															</li>
															<li>
																<a href="#">
																	Marino recreativo
																</a>
															</li>
															<li class="dropdown-submenu">
																<a href="index-corporate.html">Carga y transporte </a>
																<ul class="dropdown-menu">
																	<li><a href="index-corporate.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-video-light.jpg">Diesel</a></li>
																	<li><a href="index-corporate-2.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-video-light.jpg">Engranes y transmisiones</a></li>
																	<li><a href="index-corporate-3.html" data-thumb-preview="assets/img/img_home/img/previews/preview-classic-video-light.jpg">Especialidades diesel</a></li>
																	
																</ul>
															</li>
															<li>
																<a href="#">
																	Grasas lubricantes
																</a>
															</li>
															<li>
																<a href="#">
																	Actitud absoluta 
																</a>
															</li>
														</ul>
													</li>
													<li class="">
														<a href="{{ route('ecommerce') }}">
															E-commerce
														</a>
													</li>
													<li class="{{ activeMenu('greenroad')}}">
														<a href="{{ route('greenroad') }}">
															Greenroad
														</a>
														</li>
													<li class="{{ activeMenu('industrial')}}">
                                                        <a href="{{ route('industrial') }}">
															Industria
														</a>
													</li>
													<li class="{{ activeMenu('tecnologia')}}">
														<a href="{{ route('tecnologia') }}">
															Tecnología
														</a>
													</li>
													<li class="{{ activeMenu('zona')}}">
														<a href="{{ route('zona') }}">
															Zona akron 
														</a>
													</li>
													<li class="{{ activeMenu('empresa')}}">
														<a href="{{ route('empresa') }}">
															Conócenos
														</a>
													</li>
													<li class="{{ activeMenu('distribuidor')}}">
														<a class="text-center" href="{{ route('distribuidor') }}">
                                                            Quiero ser <br> distribuidor
														</a>
													</li>
													<li class="{{ activeMenu('donde-comprar')}}">
														<a href="{{ route('donde-comprar') }}">
															Dónde comprar 
														</a>
													</li>
													<li class="{{ activeMenu('blog')}}">
														<a href="{{ route('blog') }}">
															Blog
														</a>
													</li>
													<li class="{{ activeMenu('contacto')}}">
														<a href="{{ route('contacto') }}">
															Contacto
														</a>
													</li>
													
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </header>
            <div role="main" class="main">

                @yield('contenido')

            </div>
        	<footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-ribbon">
                            <span>Estar en contacto</span>
                        </div>
                        <div class="col-md-3">
                            <div class="newsletter">
                                <h4>Newsletter</h4>
                                <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
            
                                <div class="alert alert-success hidden" id="newsletterSuccess">
                                    <strong>Success!</strong> You've been added to our email list.
                                </div>
            
                                <div class="alert alert-danger hidden" id="newsletterError"></div>
            
                                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">Go!</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Latest Tweets</h4>
                            <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
                                <p>Please wait...</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4>Contact Us</h4>
                                <ul class="contact">
                                    <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                                    <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                                    <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h4>Follow Us</h4>
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-7">
                                <p>© Copyright {{  date("Y") }}. All Rights Reserved.</p>
                            </div>
                            <div class="col-md-4">
                                <nav id="sub-menu">
                                    <ul>
                                        <li><a href="page-faq.html">FAQ's</a></li>
                                        <li><a href="sitemap.html">Sitemap</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    
        <!-- Vendor -->
        <script src="{{ asset('assets/vendor/jqueryv3.1.1/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.cookie/jquery-cookie.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrapv3.3.7/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/owl.carouselv2.1.6/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/vide/vide.min.js') }}"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        
        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
        <script src="{{ asset('assets/js/views/view.home.js') }}"></script>
        
        <!-- Theme Custom -->
        {{-- <script src="{{ asset('js/custom.js') }}"></script> para customizar js actualmente no existe codigo 02/03/19  --}}
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('assets/js/theme.init.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6lTuQUp8VCTXHJ1bTuZWK-JUyuPzLndI"></script>


        <script>
        
			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Plaza de las Américas 1, Villa de Guadalupe, Villa Gustavo A. Madero, 07050 Ciudad de México, CDMX",
				html: "<strong>México</strong><br>",
				icon: {
					image: "assets/img/img_home/img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
            }];
            
			// Map Initial Location
			var initLatitude = 19.419444;
			var initLongitude = -99.145556;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 5
			};

			var map = $('#googlemaps').gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>    

        <!-- Examples -->
        {{-- <script src="js/examples/examples.demos.js"></script> --}}

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
            -->
    
    </body>
</html>