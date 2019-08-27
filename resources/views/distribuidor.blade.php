@extends('layout2')



@section('contenido')

<div class="header-distribuidor text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb" class="heder-breadcrumb">

            <ol class="breadcrumb">

              	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Sé Distribuidor</li>

            </ol>

        </nav>

            

	    <div class="row align-items-center heder-title">

	        <div class="col-12 text-center txt-instagram txt-header-d">

	           	<h5>¡ÚNETE COMO DISTRIBUIDOR!</h5>

	        </div>

	    </div>

    </div>

    <div class="header-svg header-svg-distribuidor">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 22" preserveAspectRatio="none">

	        <polygon class="fill_black" points="0,5 50,20 0,10 0,5"/>

	        <polygon class="fill_black" points="100,5 50,20 100,10 100,5"/>

	        <polygon class="fill_white" points="0,10 55,21 0,21 0,10"/>

	        <polygon class="fill_white" points="100,10 45,21 100,21 100,10"/>

        </svg>

    </div>

</div>

<div class="main">

	<div class="main-title">

		<div class="container">

			<div class="row">

				<div class="col-md-12 titulo-distribucion">

					<h3>110millones de litros distribuidos al año</h3>

					<p>ventajas competitivas y oportunidadd de negocio</p>

				</div>

			</div>

		</div>

	</div>

	<div class="main-ventajas">

		<div class="container">

			<div class="row">

				<div class="col-lg-4 distribuidor-ventajas">

					<ul>

						<li>Presencia de la marca a nivel nacional.</li>

						<li>Manejar niveles de stock adecuados y diseñados de acuerdo a las necesidades de la distribución ya que la compañía al contar con 2 plantas maneja tiempos logísticos de respuesta muy cortos.</li>

						<li>Gran Equipo humano con amplía experiencia en el ramo que respalda el seguimiento técnico para el servicio posventa.</li>

						<li>Márgenes para el distribuidor en productos de alta diferenciación y competitividad en precios en productos de baja diferenciación.</li>

						<li>Contar con la asesoría y el Know How de la empresa líder en el mercado nacional que participa en todos los canales de distribución que existen en la República Mexicana.</li>

					</ul>

				</div>

				<div class="col-lg-4 dist-middle-img">

					<img src="{{asset('assets/img/distribuidores-images/dist-middle-img.png')}}" alt="">

				</div>

				<div class="col-lg-4 distribuidor-ventajas">

					<ul>

						<li>Formar parte de una red de distribución que actualmente cuenta con una participación de mercado del 18%. (2da posición).</li>

						<li>Amplia gama de productos de última generación que permite participar en cualquier nicho del mercado de lubricantes, grases y adictivos.</li>

						<li>Laboratorios con cortos tiempos de respuesta en análisis de aceites en servicio que permite ofrecer sistemas integrales de lubricación a los clientes.</li>

						<li>Compañía de lubricantes y adictivos en Méxicos que cuenta con la experiencia y metodología de la venta y seguimiento a estaciones de servicio.</li>

						<li>Ofrecer una gama de productos diferenciados diseñados para nichos específicos de mercado y que actualmente no los tiene ninguna otra marca.</li>

					</ul>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="distribuidor-banner">

	<div class="container">

		<div class="row align-items-center">

			<div class="col-md-7 db-titulo">

				<h3>Negocios entre líderes</h3>

				<p class="db-titulo-mensaje">¿Te interesa trabajar con nosotros? ¡únete a la comunidad akron!</p>

			</div>

			<div class="col-md-5 db-enlaces">

				<a href="{{ url('dist-microsite/distribuidor') }}" class="distribuidor-banner-btn">QUIERO SER DISTRIBUIDOR</a>

				<a href="{{ url('dist-microsite/refaccionario') }}" class="distribuidor-banner-btn">QUIERO VENDER AKRON</a>

			</div>

		</div>

	</div>

</div>

@stop