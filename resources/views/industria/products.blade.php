@extends('layout2')



@section('contenido')

<div class="header-industria header-industria-productos text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb position-relative">

              	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>

                <li class="breadcrumb-item"><a href="{{route('industrial')}}">Industria</a></li>

                <li class="breadcrumb-item active" aria-current="page">Productos</li>

            </ol>

        </nav>



	    <div class="row align-items-center header-industria-title position-relative pt-4">

	        <div class="col-12 text-center txt-instagram txt-header-d pt-5">

	           	<h5>PRODUCTOS</h5>

	        </div>

	    </div>

    </div>

    <div class="header-industria-img position-relative">

        <img src="{{asset('assets/img/header/header_responsive.png')}}" alt="AKRON" class="img-fluid">

    </div>

</div>



<div class="row mt-0 mx-0">

    <div class="container mt-4 mb-5">

        <div class="row mt-4">

            <div class="col-12 mb-4">

                <h4 class="color-inh text-center">ACEITES, GRASAS Y ADITIVOS PARA TU INDUSTRIA</h4>

                <p class="text-center font-weight-light text-container">

                    Conoce nuestros productos de alto desempeño diseñados especialmente para cumplir con tus estándares.

                </p>

            </div>

        </div>

        <div class="row mt-4 justify-content-center">

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_construccion.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">TRANSPORTE</h5>

                    </a>

                </div>

            </div>

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_minas.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">MINAS</h5>

                    </a>

                </div>

            </div>

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_agricola.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">AGRÍCOLA</h5>

                    </a>

                </div>

            </div>

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_industriales.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">INDUSTRIALES</h5>

                    </a>

                </div>

            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_alimenticia.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">ALIMENTICIA</h5>

                    </a>

                </div>

            </div>

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_metalmecanica.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">METALMECÁNICA</h5>

                    </a>

                </div>

            </div>

            <div class="col-sm-5 col-md-3 mb-4">

                <div class="pt-3 pb-4 bg_b3b3b2 text-center">

                    <a href="{{ url('industrial/transporte') }}" class="text-decoration-none">

                        <img src="{{asset('assets/img/industrial/icon_papel.png')}}" alt="AKRON" class="img-fluid">

                        <h5 class="text-white mt-3">PAPEL</h5>

                    </a>

                </div>

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

