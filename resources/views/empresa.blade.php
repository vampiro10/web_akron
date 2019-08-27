@extends('layout2')

@section('contenido')
<div class="header-distribuidor text-uppercase">
    <div class="container">
        <nav aria-label="breadcrumb" class="heder-breadcrumb">
            <ol class="breadcrumb">
              	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Empresa</li>
            </ol>
        </nav>
            
	    <div class="row align-items-center heder-title">
	        <div class="col-12 text-center txt-instagram txt-header-d">
	           	<h5>EMPRESA</h5>
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
				<div class="col-md-6" align="center">
					

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="{{asset('assets/img/empresa/empresa4.png')}}" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="{{asset('assets/img/empresa/empresa4.png')}}" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="{{asset('assets/img/empresa/empresa4.png')}}" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>


				</div>
				<div class="col-md-6">
					<H2 class="titulo">AKRON ES LA MARCA DE LUBRICANTES Y
					ESPECIALIDADES AUTOMOTRICES CON EL
					PRODUCTO CORRECTO PARA TU AUTOMÓVIL</H2>
					<p>
						Las marcas automotrices alemanas de mayor prestigio han certificado a Akron Spitzen, siendo
						el único producto en tener las certificaciones Porsche Oil A40, BMW LongLife 04,
						MB, 22951 y VW 505,00/502.00.Esto es desempeño y protección absoluta para el motor
						del automóvil.<br></br>
						
						Ya sea que un automóvil deportivo de última generación, una $UV familiar o la pieza de
						maquinaria más compleja y costosa, en Akron podrás encontrar el lubricante adecuado para
						garantizar Protección Absoluta.
					</p>
				</div>				
			</div>			
		</div>	
	</div>
</div>
<div class="main fondo">
		<div class="container">
			<h2 class="titulo">CERTIFICADOS</h2>
			<div class="row">	
								
					<div class="col-md-6">						
						<p>
							Akron está certificado por las principales armadoras alemanas de automóviles Porsche, BWM, Mercedes Benz y Volkswagen.
						</p>
					</div>
					<div class="col-md-6">
						<p>
							Akron está certificado por las principales armadoras de vehículos de servicio pesado. Volvo, Mercedes Benz y Cummnins.
						</p>
					</div>				
			</div>
		</div>
</div>
<div class="main">
		<div class="container">
			<h2 class="titulo">CÓMO FUNCIONA</h2>
			<div class="row">	
								
					<div class="col-md-6">						
						<p>
							El aceite lubricante es un componente indispensable en el correcto funcionamiento del motor. Es imposible imaginar un motor sin fluido que lubrique sus piezas móviles. <br><br>
							Dentro del motor, el aceite recorrepor un intrincado sistema llegando no solo a los pistones, sino el cigueñal, el árbol de levas y en caso de tenerlo hasta el turbocargador.
						</p>
						<div class="cajita-azul">
							<strong>Un aceite cumple con diferentes funciones en el sistema de lubricación<br></br></strong>
							<i class="fa fa-arrow-right"></i> Lubrica y protege del desgaste<br></br>
							<i class="fa fa-arrow-right"></i> Dispersa el calor<br></br>
							<i class="fa fa-arrow-right"></i> Limpia<br></br>
							<i class="fa fa-arrow-right"></i> Dispersa impurezas derivadas de la combustión evitando la formación de lodos en el depósito o carter<br></br>

						</div>
					</div>
					<div class="col-md-6">
						<img class="img-fluid" src="{{asset('assets/img/empresa/empresa2.png')}}" alt="producto" class="img-fluid">
						<p>
							Animación representativa del recorrido del aceite en un motoro de 4 tiempos utilizando gasolina como combustible. No todos los motores tienen esta forma y/o contienen las partes aquí mostradas.
						</p>

					</div>				
			</div>
		</div>
</div>

<div class="main">
			<div class="container">
				<h2 class="titulo">PREGUNTAS FRECUENTES</h2>			
				<div id="accordion">
					<!-- one-->
					  <div class="acordeon">
					    <div id="headingOne">
					      <h5 class="headerCard">
					        <span class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          ¿Cual es el aceite indicado para el motor de mi auto?
					        </span>
					      </h5>
					    </div>

					    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					      <div class="card-body cardbodyp">
					        La mejor recomendación viene por escrito del fabricante de tu automóvil y el mejor lugar para buscar esta información es en el manual de usuario. Si no tienes el manual de usuario y tu auto tiene menos de 4 años intenta acudir a la página web del fabricante. Normalmente de ahi podrás descargar el manual de usuario. También puedes revisar nuestro buscador de aceite, donde siempre te recomendamos un aceite con la información básica de tu automóvil.
					      </div>
					    </div>
					  </div>
					<!-- end one-->
					  <div class="acordeon">
					    <div  id="headingTwo">
					      <h5 class="headerCard">
					        <span class=" collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          ¿Cada cuanto debo cambiar el aceite de motor?
					        </span>
					      </h5>
					    </div>
					    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      <div class="card-body cardbodyp">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
					      </div>
					    </div>
					  </div>

					<!-- three-->
					  <div class="acordeon">
					    <div id="headingThree">
					      <h5 class="headerCard">
					        <span class="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					          ¿Por que siempre que el técnico me revisa el aceite me dice que le hace falta un litro?
					        </span>
					      </h5>
					    </div>

					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					      <div class="card-body cardbodyp">
					        La mejor recomendación viene por escrito del fabricante de tu automóvil y el mejor lugar para buscar esta información es en el manual de usuario. Si no tienes el manual de usuario y tu auto tiene menos de 4 años intenta acudir a la página web del fabricante. Normalmente de ahi podrás descargar el manual de usuario. También puedes revisar nuestro buscador de aceite, donde siempre te recomendamos un aceite con la información básica de tu automóvil.
					      </div>
					    </div>
					  </div><!-- end one-->
					  <!-- four-->
					  <div class="acordeon">
					    <div id="headingFour">
					      <h5 class="headerCard">
					        <span class="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
					          ¿Es cierto que un aceite viscoso protege mejor?
					        </span>
					      </h5>
					    </div>

					    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					      <div class="card-body cardbodyp">
					        La mejor recomendación viene por escrito del fabricante de tu automóvil y el mejor lugar para buscar esta información es en el manual de usuario. Si no tienes
					      </div>
					    </div>
					  </div><!-- end four-->
					   <!-- five-->
					  <div class="acordeon">
					    <div id="headingFive">
					      <h5 class="headerCard">
					        <span class="" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
					        	Me recomendaron cambiar el anticongelante, nunca habia oido algo así ¿se cambia el anticongelante?  
					        </span>
					      </h5>
					    </div>
					    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
					      <div class="card-body cardbodyp">
					        La mejor recomendación viene por escrito del fabricante de tu automóvil y el mejor lugar para buscar esta información es en el manual de usuario. 
					      </div>
					    </div>
					  </div><!-- end four-->
				</div>
			</div>
</div>
<div class="main">
		<div class="container">			
			<div class="row">
				<div class="col-md-12" align="center">
					<img class="img-fluid" src="{{asset('assets/img/empresa/empresa3.png')}}" alt="producto" class="img-fluid">
				</div>				 
			</div>
		</div>
</div>
<div class="main">
		<div class="container">
			<h2 class="titulo">MITOS Y REALIDADES</h2>
			<div class="row">
				<div class="col-md-3">
					<div class="recuadro">
						<span class="titulomito">MITO<br></span>					
							<span class="textorecuadro">
								"El aceite se puso negro rápidamente y ya no sirve"
							</span>					
					</div>
					<div class="borderecuadro">					
					<span class="titulorealidad">REALIDAD</span><br>
					<span class="textorecontenido">"Un aceite negro revela un aceite haciendo su trabajo. Una de las funciones del aceite es dispersar los subproductos nocivos derivados de la combustión y está es la razón principal por la que se hace negro. Es imposible distinguir visualmente cuando un aceite ya no sirve. La mejo recomendación es  ajustarse a los cambios recomendados por el fabricante. También puedes consultar nuestra tabla de cambios."</span>					
					</div>
					
				</div>	
				<div class="col-md-3">
					<div class="recuadro">
						<span class="titulomito">MITO<br></span>
						<span class="textorecuadro">
						En la agencia me dicen que debo utilizar el aceite de ellos, si no, pierdo la garantía del automóvil.</span>
					</div>
					<div class="borderecuadro">					
						<span class="titulorealidad">REALIDAD</span><br>
							<span class="textorecontenido">Puedes llevar el aceite de tu preferencia a la agencia siempre y cuando cumpla con la especificación API y la viscosidad SAE que recomienda el fabricante. Lee tu manual de usuario para encontrar la recomendación. Exige que te sellen tu bitácora de mantenimiento y no tendrán razón alguna para no cubrirte una garantía en caso de necesitarla. En todo caso, la agencia automotriz podrá hacerte una recomendación, sin embargo, la decisión es siempre tuya.
							</span>					
					</div>					
				</div>	
				<div class="col-md-3">
					<div class="recuadro">
						<span class="titulomito">MITO<br></span>
						<span class="textorecuadro">
						"Un aceite viscoso es mejor"</span>
					</div>
					<div class="borderecuadro">					
						<span class="titulorealidad">REALIDAD</span><br>
							<span class="textorecontenido">La viscosidad aparente, es decir, la que puedes apreciar por medio de tus sentidos, no tiene nada que ver con el tipo de aceite que tu auto necesita o con la protección que el aceite genera.<br>
								El mejor aceite es la especificación que el fabricante recomienda o el que un experto certificado te pueda recomendar.
							</span>					
					</div>	
				</div>	
				<div class="col-md-3">
					<div class="recuadro">
						<span class="titulomito">MITO<br></span>
						<span class="textorecuadro">
						"Lo mejor es usar un aceite para diésel de carga porque duran más."</span>
					</div>
					<div class="borderecuadro">					
						<span class="titulorealidad">REALIDAD</span><br>
							<span class="textorecontenido">El tipo de combustión diésel es por comprensión y la combustión de gasolina es por ignición. Aunque parecidos, los procesos son diferentes al igual que los componentes del motor, también desprenden contaminantes diferentes. Debido a que el aceite es un elemento que interactúa en gran parte de las piezas móviles durante el proceso de la combustión, te recomendamos utilizar el aceite de acuerdo a tu tipo de vehículo.
							</span>					
					</div>	
				</div>	
			</div>
		</div>
</div>
@stop