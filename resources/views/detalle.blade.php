@extends('layout2')



@section('contenido')

<div class="header-distribuidor text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb" class="heder-breadcrumb">

            <ol class="breadcrumb">

              	<li class="breadcrumb-item"><a href="{{route('home')}}">INICIO/</a></li>

              	<li class="breadcrumb-item"><a href="{{route('blog')}}">BLOG/</a></li>

                <li class="breadcrumb-item active" aria-current="page">KALASHNIKOV: DE LAS ARMAS AL DISEÑO DE UN AUTO ELÉCTRICO</li>

            </ol>

        </nav>

            

	    <div class="row align-items-center heder-title">

	        <div class="col-12 text-center txt-instagram txt-header-d">

	           	<h5>KALASHNIKOV: DE LAS ARMAS AL DISEÑO DE UN AUTO ELÉCTRICO</h5>

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

					<div class="col-md-8">										
								<img class="img-fluid" src="{{asset('assets/img/banner-blog.jpg')}}" alt="">
								<h6 class="titulo txt-detalle"><i class="fa fa-tags tagicon"></i> AUTOMOTRIZ</h6>
								<h6 class="titulo txt-detalle"><i class="fa fa-user tagicon"></i> Admin</h6>
								<h6 class="titulo txt-detalle"><i class="fa fa-calendar tagicon"></i> Septiembre 18,2018</h6>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

								   Aenean sodales, nisi nec accumsan pulvinar, nisl lacus commodo

								   justo, eget feugiat sem risus id ex. In tempus tempor nisi et 

								   feugiat. Pellentesque blandit tellus et placerat facilisis. 

								   Vivamus a odio libero. 

								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

								   Aenean sodales, nisi nec accumsan pulvinar, nisl lacus commodo

								   justo, eget feugiat sem risus id ex. In tempus tempor nisi et 

								   feugiat. Pellentesque blandit tellus et placerat facilisis. 

								   Vivamus a odio libero. 

								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

								   Aenean sodales, nisi nec accumsan pulvinar, nisl lacus commodo

								   justo, eget feugiat sem risus id ex. In tempus tempor nisi et 

								   feugiat. Pellentesque blandit tellus et placerat facilisis. 

								   Vivamus a odio libero. 

								</p>
								<img class="img-fluid" src="{{asset('assets/img/KalaINT.png')}}" alt="">


						<!-- PAGINADOR -->

						<br></br>

						<div class="col-md-12 text-right alinea-compartir">
							<h3>COMPARTIR ARTÍCULO</h3>
							<img class="" src="{{asset('assets/img/ico-facebook.png')}}" alt="">
							<img class="" src="{{asset('assets/img/ico-twitter.png')}}" alt="">
						</div>

						<!--FIN PAGINADOR -->

					</div>					

					<div class="col-md-4">

						<div class="cajitas">

							<h2 class="text-body">CATEGORÍAS</h2>

							<hr>

							<span class="tags">

								Etiqueta

							</span>

							<span class="tags">

								Etiqueta

							</span>

							<span class="tags">

								Etiqueta

							</span>

							<span class="tags">

								Etiqueta

							</span>

						</div>

						<div class="cajitas">

							<h2 class="text-body">NEWSLETTER</h2>

							<hr>

							CORREO ELECTRÓNICO

							<form class="form-inline">							 

								<input type="email" id="email">

								<button class="btn-blog" type="submit" >Enviar</button>

							</form>							

						</div>

						<div class="cajitas">

							<h2 class="text-body">REDES SOCIALES</h2>

							<hr>

							 widget de twitter

							

						</div>						

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

@stop