@extends('layout2')



@section('contenido')

<div class="header-industria text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb position-relative">

              	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>

                <li class="breadcrumb-item active" aria-current="page">Industria</li>

            </ol>

        </nav>



	    <div class="row align-items-center header-industria-title position-relative pt-5">

	        <div class="col-12 text-center txt-instagram txt-header-d pt-5 pb-5 pb-sm-0">

	           	<h5>INDUSTRIAS, SOLUCIONES QUE TE MUEVEN</h5>

                <h6 class="text-white">ACEITES, GRASAS Y ADITIVOS PARA TU INDUSTRIA</h6>

	        </div>

	    </div>

    </div>

    <div class="header-industria-img position-relative">

        <img src="{{asset('assets/img/gas-station/header-gas.png')}}" alt="AKRON" class="img-fluid">

    </div>

</div>



<div class="row bg_0c4479 mt-0 mx-0">

    <div class="container bg_0c4479 mt-3 mb-5">

        <div class="row mt-4">

            <div class="col-12 mb-4">

                <h4 class="text-center">INDUSTRIAS</h4>

                <p class="text-white text-center font-weight-light text-container">

                    En <span class="font-weight-bold">AKRON</span> creamos productos que responden a los avances tecnológicos y mantienen en perfectas condiciones la maquinaria de cualquier industria.

                </p>

            </div>

            <div class="col-12">

                <ul id="carouselIndustrias">

                    <li>
	                  
                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_construccion.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">TRANSPORTE</h5>
                            </a>
                        </div>
	                    
                    </li>

                    <li>

                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_minas.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">MINAS</h5>
                            </a>
                        </div>

                    </li>

                    <li>

                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_agricola.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">AGRÍCOLA</h5>
                            </a>
                        </div>

                    </li>

                    <li>

                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_industriales.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">INDUSTRIALES</h5>
                            </a>
                        </div>

                    </li>

                    <li>

                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_alimenticia.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">ALIMENTICIA</h5>
                            </a>
                        </div>

                    </li>

                    <li>

                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_metalmecanica.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">METALMECÁNICA</h5>
                            </a>
                        </div>

                    </li>

                    <li>

                        <div class="border border-white py-3 mx-2">
                        	<a href="{{ url('industrial/transporte') }}">
	                            <img src="{{asset('assets/img/industrial/icon_papel.png')}}" alt="AKRON" class="img-fluid">

	                            <h5 class="text-white mt-3">PAPEL</h5>
                            </a>
                        </div>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>



<div class="container my-5">

    <div class="row">

        <div class="col-md-6">

            <img src="{{asset('assets/img/industrial/industria2.jpg')}}" class="img-fluid" alt="AKRON">

        </div>

        <div class="col-md-6">

            <h3 class="text-body mt-5">ACEITES, GRASAS Y ADITIVOS PARA TU INDUSTRIA</h3>

            <p class="font-weight-light">

                Conoce nuestros productos de alto desempeño diseñados especialmente para cumplir con tus estándares.

            </p>

            <a href="{{ url('industrial/productos') }}" class="btn btn-custom-orange"><span class="px-4">VER PRODUCTOS</span></a>

        </div>

    </div>

</div>



<div class="banner_pacom position-relative my-5">

    <div class="container py-5">

        <div class="row mt-5">

            <div class="col-12 mt-5 position-relative pacom-text">

                <h3 class="text-center mb-4">PACOM</h3>

                <p class="text-white text-center text-container">

                    En Mexicana de Lubricantes S.A. de C.V. conocemos la importancia que tiene el mantenimiento preventivo de tu maquinaria o equipo de transporte, por ello nuestro compromiso es brindarte soluciones a todas y cada una de tus necesidades, por este motivo ofrecemos el Programa de Análisis Continuo de Mantenimiento: PACOM.

                </p>

                <div class="text-center mt-4">

                    <a href="#" class="btn btn-custom-orange"><span class="px-4">VER MÁS</span></a>

              	</div>

            </div>

        </div>

    </div>

</div>



<div class="container mt-3 mb-5">

    <div class="row mt-4">

        <div class="col-12 mb-4">

            <h4 class="text-body">VER CATÁLOGOS</h4>

        </div>

        <div class="col-12">

            <ul id="carouselCatalogos">

                <li>

                    <div class="text-left mx-4">

                        <img src="{{asset('assets/img/industrial/catalogo/cover_agricola.jpg')}}" alt="AKRON" class="img-fluid">

                        <h5 class="mt-3">

                            AGRÍCOLA

                            <small class="font-weight-light d-block">LUBRICANTES PARA LA INDUSTRIA AGRÍCOLA</small>

                        </h5>

                        <small class="mb-2">Aceites de alto desempeño para equipos y maquinaria agrícola.</small>

                        <a href="#" class="color-orange" download>DESCARGAR ></a>

                    </div>

                </li>

                <li>

                    <div class="text-left mx-4">

                        <img src="{{asset('assets/img/industrial/catalogo/cover_alimenticio.jpg')}}" alt="AKRON" class="img-fluid">

                        <h5 class="mt-3">

                            ALIMENTICIO

                            <small class="font-weight-light d-block">LUBRICANTES GRADO ALIMENTICIO</small>

                        </h5>

                        <small class="mb-2">Aceites, lubricantes aditivos no tóxicos, elaborados con materias primas y aditivos especializados.</small>

                        <a href="#" class="color-orange" download>DESCARGAR ></a>

                    </div>

                </li>

                <li>

                    <div class="text-left mx-4">

                        <img src="{{asset('assets/img/industrial/catalogo/cover_compresores.jpg')}}" alt="AKRON" class="img-fluid">

                        <h5 class="mt-3">

                            COMPRESORES

                            <small class="font-weight-light d-block">LUBRICANTES PARA COMPRESORES</small>

                        </h5>

                        <small class="mb-2">Aceites para compresores, elaborados con materias primas y aditivos especializados.</small>

                        <a href="#" class="color-orange" download>DESCARGAR ></a>

                    </div>

                </li>

                <li>

                    <div class="text-left mx-4">

                        <img src="{{asset('assets/img/industrial/catalogo/cover_diesel.jpg')}}" alt="AKRON" class="img-fluid">

                        <h5 class="mt-3">

                            DIESEL

                            <small class="font-weight-light d-block">LUBRICANTES PARA UNIDADES DIESEL</small>

                        </h5>

                        <small class="mb-2">Lubricantes para motores de alta velocidad, diseñados para cumplir con las normas de emisión de gases, óptimo para aplicaciones con combustible diesel.</small>

                        <a href="#" class="color-orange" download>DESCARGAR ></a>

                    </div>

                </li>

            </ul>

        </div>

    </div>

</div>



<div class="container mb-5">

    <div class="row mb-4">

        <div class="col-12">

            <h4 class="text-body">VISITA NUESTRO BLOG</h4>

        </div>

    </div>

    <div class="row">

        <div class="col-sm-4 mb-4">

            <img src="{{asset('assets/img/industrial/blog/blog1.jpg')}}" alt="AKRON" class="img-fluid">

            <span><i class="fa fa-tags"></i> AKRON GREENROAD</span>

            <h5 class="mt-2 mb-3">2017, ENTRE LOS TRES AÑOS MÁS CALIENTES DE LA HISTORIA</h5>

            <small>Ares Design, un famoso taller italiano, se ha inspirado en las primeras competiciones de motocicletas celebradas en Gra...</small>

            <hr>

            <div class="d-flex">

                <div class="mr-auto">

                    <small>Septiembre 01, 2018</small>

                </div>

                <a href="{{ url('detalle') }}" class="color-orange">LEER ARTÍCULO > </a>

            </div>

        </div>

        <div class="col-sm-4 mb-4">

            <img src="{{asset('assets/img/industrial/blog/blog2.jpg')}}" alt="AKRON" class="img-fluid">

            <span><i class="fa fa-tags"></i> AKRON GREENROAD</span>

            <h5 class="mt-2 mb-3">OCÉANO VS PLÁSTICO: UNA BATALLA QUE NOS CONCIERNE TODOS</h5>

            <small>Ares Design, un famoso taller italiano, se ha inspirado en las primeras competiciones de motocicletas celebradas en Gra...</small>

            <hr>

            <div class="d-flex">

                <div class="mr-auto">

                    <small>Septiembre 01, 2018</small>

                </div>

                <a href="{{ url('detalle') }}" class="color-orange">LEER ARTÍCULO > </a>

            </div>

        </div>

        <div class="col-sm-4 mb-4">

            <img src="{{asset('assets/img/industrial/blog/blog3.jpg')}}" alt="AKRON" class="img-fluid">

            <span><i class="fa fa-tags"></i> AKRON GREENROAD</span>

            <h5 class="mt-2 mb-3">MUERE EL ÚLTIMO MACHO DE RINOCERONTE BLANCOs</h5>

            <small>Ares Design, un famoso taller italiano, se ha inspirado en las primeras competiciones de motocicletas celebradas en Gra...</small>

            <hr>

            <div class="d-flex">

                <div class="mr-auto">

                    <small>Septiembre 01, 2018</small>

                </div>

                <a href="{{ url('detalle') }}" class="color-orange">LEER ARTÍCULO > </a>

            </div>

        </div>

    </div>

    <div class="row mt-5">

        <div class="col-12">

            <div class="text-center">

                <a href="{{ url('blog') }}" class="btn btn-custom-orange"><span class="px-4">VER TODOS LOS ARTÍCULOS</span></a>

            </div>

        </div>

    </div>

</div>



<div class="industria-info-banner">

	<div class="container">

		<div class="row align-items-center py-5">

			<div class="col-md-7">

				<h2 class="mt-3">¿MÁS INFORMACIÓN?</h2>

                <h6 class="text-white mb-3">Contáctanos para ofrecerte un mejor servicio y darte asesoría personalizada.</h6>

            </div>

			<div class="col-md-5">

				<a href="{{ url('industrial/contacto') }}" class="distribuidor-banner-btn">CONTACTAR</a>

			</div>

		</div>

	</div>

</div>



@stop



@section('scripts')

    <script type="text/javascript">

        $(window).load(function() {

            $("#carouselIndustrias").flexisel({

                visibleItems: 4,

                itemsToScroll: 1,

                autoPlay: {

                    enable: true,

                    interval: 5000,

                    pauseOnHover: true

                }

            });



            $("#carouselCatalogos").flexisel({

                visibleItems: 4,

                itemsToScroll: 1,

                autoPlay: {

                    enable: true,

                    interval: 5000,

                    pauseOnHover: true

                }

            });

        });

    </script>

@endsection

