@extends('layout2')



@section('contenido')



<section class="fondo-greenroad">
  <div class="figura-banner">
	  <img src="{{ asset('assets/img/banner-greenroad.png') }}" alt="">
  </div>
  <div class="container">
    	<iframe src="https://www.youtube.com/embed/9dVKiQWlRfg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</section>
<section class="section-green">
  <div class="container text-center">
  	<div class="cuadro-s-g">
	    <h2>AKRON <span>GREENROAD</span></h2> 	
	    <h5>EL PRIMER ADITIVO ECOLÓGICO PARA GASOLINA Y DIESEL. REDUCE EMISIONES CONTAMINENTES Y AHORRA HASTA UN 10% DE COMBUSTIBLE.</h5><br />
	    <p>
	    	En AKRON estamos conscientes de la continua alteración en el entorno donde vivimos, sabemos que en los últimos tiempos hay gran deterioro, cambios ecológicos y climáticos a nivel global, por lo que esto define una necesidad de desarrollar nuevos productos amigables al medio ambiente y así contribuir al cuidado del mismo.
	    </p>
    </div>
    <img src="{{ asset('assets/img/icons-greenroad.jpg') }}" alt="">
  </div>
</section>
<section class="produ-des-zona mt-5">

  <div class="container">

    <div class="row">
      <div class="col-md-12 pt-4 text-center num-clase">
        <h5 class="txt-gde-zona">CON GREENROAD SE HAN DEJADO DE EMITIR</h5>
        <img src="{{ asset('assets/img/numeros.jpg') }}" alt="">
        <p>KG CO2 DESDE EL 1 DE JUNIO DE 2015*</p>
        <p>*Basado en un tanque de 50L de gasolina de un automóvil.</p>
      </div>
    </div>

  </div>

</section>
<section class="">

  <div class="container">

    <div class="row">
      <div class="col-md-4 pt-4">
        <h5 class="txt-gde-zona txt-negrita">¿QUÉ ES?</h5>
        <p>Recientemente hemos desarrollado un nuevo producto determinado GREENROAD, mismo que nace de la alianza de AKRON y BIO FRIENDLY Y CORPORATION. Este producto ayuda a la significativa reducción de la contaminación de hidrocarburos que son arrojados al ambiente por los vehículos. Al empatar ambas tecnologías se creó un SUPERADITIVO con capacidades de ahorro de combustible y disminución de emisiones de manera significativa, entre otras cosas.</p>
      </div>
      <div class="col-md-4 pt-4">
        <img src="{{ asset('assets/img/botes-green.jpg') }}" alt="">
      </div>
      <div class="col-md-4 pt-4">
        <h5 class="txt-gde-zona txt-negrita">¿DE DÓNDE NACE?</h5>
        <p>
        	En AKRON somos conscientes de que un lubricante no es un producto biodegradable, y para contribuir con el cuidado del medio ambiente decidimos buscar las alternativas que la tecnología ha brindado, para incorporarlas a las nuevas líneas de productos, buscando que reduzcan o desaparezcan sus propiedades contaminantes y, en el mejor de los casos, que colaboren a reducir la contaminación generada por mecanismos en los que dichos productos pudieran tener injerencia. 
        </p>
      </div>
    </div>

  </div>

</section>
<div class="greenroad-banner pt-5 pb-5">

	<div class="container">

		<div class="row align-items-center">

			<div class="col-md-7 db-titulo">

				<h3>Compra o distribuye <span class="caja-txt-home-green-n">Akron </span> <span class="caja-txt-home-green">Greenroad</span></h3>

				<p class="db-titulo-mensaje">Compra el producto o únete a nuestro equipo de trabajo</p>

			</div>

			<div class="col-md-5 db-enlaces">

				<a href="{{ route('donde-comprar') }}" class="distribuidor-banner-btn distribuidor-banner-btn-green">¿DÓNDE ENCUENTRO GREEN ROAD?</a>

				<a href="{{ route('distribuidor') }}" class="distribuidor-banner-btn distribuidor-banner-btn-green">QUIERO SER DISTRIBUIDOR</a>

			</div>

		</div>

	</div>

</div>
<section class="">

  <div class="container">

    <div class="row">
      <div class="col-md-6 pt-4">
        <h5 class="txt-gde-zona txt-negrita">INFORMACIÓN TÉCNICA</h5>
        <hr>
        <div class="row text-left">
	        <div class="info col-xs-12 col-md-12 desplega-cont">
	          <span class="desple-footer">+</span>
	          <span class="desplega-footer">-</span>
	          <span class="txt-copy">¿Cómo funciona?</span>
	          <hr>
	          <ul class="ul-custom mt-4">
                <li class="font-weight-light">Genera una limpieza profunda en el sistema</li>
                <li class="font-weight-light">Recupera la potencia del motor</li>
                <li class="font-weight-light">Alarga la vida útil del catalizador</li>
              </ul>
	        </div>
	        <div class="site-links col-xs-12 col-md-12 desplega-cont">
	          <span class="desple-footer">+</span>
	          <span class="desplega-footer">-</span>
	          <span class="txt-copy">Beneficios</span>
	          <hr>
	        </div>
	        <div class="site-links col-xs-12 col-md-12 desplega-cont">
	          <span class="desple-footer">+</span>
	          <span class="desplega-footer">-</span>
	          <span class="txt-copy">Ficha técnica</span>
	          <hr>
	        </div>
	        <div class="site-links col-xs-12 col-md-12 desplega-cont">
	          <span class="desple-footer">+</span>
	          <span class="desplega-footer">-</span>
	          <span class="txt-copy">Pruebas notariadas Greenroad</span>
	          <hr>
	        </div>
	    </div>
      </div>
      <div class="col-md-6 pt-4">
        <h5 class="txt-gde-zona txt-negrita">HOY NO CIRCULA</h5>
        <img class="img-fluid" src="{{ asset('assets/img/cuadro-green.jpg') }}" alt="">
      </div>
    </div>

  </div>

</section>
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

                <a href="{{route('detalle')}}" class="color-verde">LEER ARTÍCULO > </a>

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

                <a href="{{route('detalle')}}" class="color-verde">LEER ARTÍCULO > </a>

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

                <a href="{{route('detalle')}}" class="color-verde">LEER ARTÍCULO > </a>

            </div>

        </div>

    </div>

    <div class="row mt-5">

        <div class="col-12">

            <div class="text-center">

                <a href="{{route('blog')}}" class="btn btn-custom-verde"><span class="px-4">VER TODOS LOS ARTÍCULOS</span></a>

            </div>

        </div>

    </div>

</div>

@stop