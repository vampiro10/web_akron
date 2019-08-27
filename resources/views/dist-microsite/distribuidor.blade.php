@extends('layout2')



@section('contenido')

<div class="header-distribuidor text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb" class="heder-breadcrumb">

            <ol class="breadcrumb">

              	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>

                <li class="breadcrumb-item"><a href="{{route('home')}}">Se Distribuidor</a></li>

                <li class="breadcrumb-item active" aria-current="page">Distribuidor</li>

            </ol>

        </nav>

            

	    <div class="row align-items-center heder-title">

	        <div class="col-12 text-center txt-instagram txt-header-d">

	           	<h5>DISTRIBUIDOR</h5>

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

	<div class="container">

		<div class="row justify-content-center text-center">

			<div class="col-md-10 dist-mensaje">

				<p>Un distribuidor es quien vende a los que venden, con condiciones comerciales diferentes. Requiere de una inversión mayor, de una infraestructura y estructura específica de personal, capital del trabajo, vehículos, oficina y bodega, etc.</p>

			</div>

		</div>

	</div>

</div>

<div class="form-dist">

	<div class="container bgs-gray">

		<div class="row align-items-center row-dist">

			<div class="col-md-6 col-lg-3 g-form">

				<h4 class="form-dist-title">SELECCIONA TU UBICACIÓN Y AREA DE EXPERIENCIA</h4>

			</div>

			<div class="col-md-6 col-lg-3 g-form">

				<label class="dist-label">nacional</label>

				<label class="dist-slc-cont">

					<select class="dist-slc">

						<option value="">Buscar...</option>

						<option value="">Option 1</option>

						<option value="">Option 2</option>

						<option value="">Option 3</option>

					</select>

				</label>

			</div>

			<div class="col-md-6 col-lg-3 g-form">

				<label class="dist-label">internacional</label>

				<label class="dist-slc-cont">

					<select class="dist-slc">

						<option value="">Buscar...</option>

						<option value="">Option 1</option>

						<option value="">Option 2</option>

						<option value="">Option 3</option>

					</select>

				</label>

			</div>

			<div class="col-md-6 col-lg-3 g-form">

				<label class="dist-label">área de experiencia</label>

				<label class="dist-slc-cont">

					<select class="dist-slc">

						<option value="">Buscar...</option>

						<option value="">Option 1</option>

						<option value="">Option 2</option>

						<option value="">Option 3</option>

					</select>

				</label>

			</div>

		</div>

	</div>

	<div class="container cont-dist-ta">

		<div class="row">

			<div class="col-md-6 col-lg-3 cont-dist">

				<label class="dist-label">nombre*</label>

				<input type="text" class="dist-form">

			</div>

			<div class="col-md-6 col-lg-3 cont-dist">

				<label class="dist-label">correo electrónico*</label>

				<input type="text" class="dist-form">

			</div>

			<div class="col-md-6 col-lg-3 cont-dist">

				<label class="dist-label">teléfono*</label>

				<input type="text" class="dist-form">

			</div>

			<div class="col-md-6 col-lg-3 cont-dist">

				<label class="dist-label">empresa*</label>

				<input type="text" class="dist-form">

			</div>

			<div class="col-md-12 cont-dist">

				<label class="dist-label">mensaje</label>

				<textarea class="dist-form dist-ta"></textarea>

			</div>

			<div class="col-md-6 d-flex justify-content-start form-footer">

			</div>

			<div class="col-md-6 d-flex justify-content-end form-footer">

				<button class="dist-btn">Enviar</button>

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