@extends('layout')

@section('contenido')


	<div class="slider-container rev_slider_wrapper" style="height: 700px;">
		<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 700}">
			<ul>
				<li data-transition="fade"> {{--Marca --}}
					<img src="assets/img/img_home/img/slides/marca.jpg"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#home-intro"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Ir</a>
					
				</li>
				<li data-transition="fade"> {{--Servicio --}}
					<img src="assets/img/img_home/img/slides/servicio.jpg"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#home-intro"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Ir</a>
					
				</li>
				<li data-transition="fade"> {{--Chivas --}}
					<img src="assets/img/img_home/img/slides/gchivas.jpg"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#home-intro"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Ir</a>
					
				</li>
				<li data-transition="fade"> {{--Aceites --}}
					<img src="assets/img/img_home/img/slides/aceites.jpg"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#home-intro"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Ir</a>
					
				</li>
				<li data-transition="fade"> {{--Greenroad --}}
					<img src="assets/img/img_home/img/slides/greenroad.jpg"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#home-intro"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Ir</a>
					
				</li>
				<li data-transition="fade"> {{--Motorcycle --}}
					<img src="assets/img/img_home/img/slides/motorcycle.jpg"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#home-intro"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Ir</a>
					
				</li>

			</ul>
		</div>
	</div>
	
	<div class="container">
		<div class="row mt-xl mb-xl">
			<div class="col-md-3">
				<a href="http://extranet.vetterol.com" target="blank_"><img class="img-responsive mt-xl appear-animation" src="assets/img/img_home/img/slides/akron_banner_mexicana_de_lubricantes.png" alt="" data-appear-animation="fadeInLeft"></a>
			</div>
			<div class="col-md-9">
				<h2 class="mt-xl">Mexicana de <strong>Lubricantes</strong></h2>
				<p>
					Es una empresa 100% mexicana, líder en venta de lubricantes automotrices e industriales, aditivos y grasas, con avanzada tecnología de producción, instalaciones certificadas, una amplia línea de productos de la más alta calidad y un equipo humano profesional, comprometido a superar las expectativas de los mercados más exigentes.
			</div>
		</div>
	</div>

	<section class="section section-default">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2> <strong>Vetterol</strong></h2>
					<p>
						Es una empresa 100% mexicana, líder en venta de lubricantes automotrices e industriales, aditivos y grasas, con avanzada tecnología de producción, instalaciones certificadas, una amplia línea de productos de la más alta calidad y un equipo humano profesional, comprometido a superar las expectativas de los mercados más exigentes.
				</div>
				<div class="col-md-3">
					<a href="http://extranet.vetterol.com" target="blank_"><img class="hidden-xs img-responsive appear-animation" style="margin-top: -100px;" src="assets/img/img_home/img/slides/akron_baner_vetterol.png" alt="" data-appear-animation="fadeInRight"></a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-default-scale-lighten m-none">
		<div class="container-fluid sample-item-container">
	
			<div class="row center">
				<div class="col-md-12 pb-xlg">
					<h4 id="font_black" class="mt-xl mb-none font-weight-bold text-uppercase ml-sm">CERTIFICADOS POR:</h4>
					<p class="mb-xl ml-sm">Las más prestigiadas marcas certifican a AKRON</p>
				</div>
	
			</div>
	
			<div id="award" class="row">
				<ul class="sample-item-list sample-item-list-loaded" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
	
					<li class="col-sm-6 col-md-3 isotope-item">
						<div class="sample-item sample-item-home pl-md pr-md">
							<a href="#" target="_blank">
								<span class="sample-item-image-wrapper">
									<span class="sample-item-image" data-original="assets/img/img_home/img/slides/500x370img.png" data-plugin-lazyload data-plugin-options="{'appearEffect': 'animated fadeIn'}"></span>
									<i class="fa fa-spinner fa-spin fa-fw"></i>
								</span>
								<span class="sample-item-description">
									<h5>Porsche</h5>
								</span>
							</a>
						</div>
					</li>
	
					<li class="col-sm-6 col-md-3 isotope-item">
						<div class="sample-item sample-item-home pl-md pr-md">
							<a href="#" target="_blank">
								<span class="sample-item-image-wrapper">
									<span class="sample-item-image" data-original="assets/img/img_home/img/slides/mercedes.jpg" data-plugin-lazyload data-plugin-options="{'appearEffect': 'animated fadeIn'}"></span>
									<i class="fa fa-spinner fa-spin fa-fw"></i>
								</span>
								<span class="sample-item-description">
									<h5>Mercedes</h5>
								</span>
							</a>
						</div>
					</li>
	
					<li class="col-sm-6 col-md-3 isotope-item">
						<div class="sample-item sample-item-home pl-md pr-md">
							<a href="#" target="_blank">
								<span class="sample-item-image-wrapper">
									<span class="sample-item-image" data-original="assets/img/img_home/img/slides/sensor_bmw.jpg" data-plugin-lazyload data-plugin-options="{'appearEffect': 'animated fadeIn'}"></span>
									<i class="fa fa-spinner fa-spin fa-fw"></i>
								</span>
								<span class="sample-item-description">
									<h5>Home Corporate Version 1</h5>
								</span>
							</a>
						</div>
					</li>
	
					<li class="col-sm-6 col-md-3 isotope-item">
						<div class="sample-item sample-item-home pl-md pr-md">
							<a href="#" target="_blank">
								<span class="sample-item-image-wrapper">
									<span class="sample-item-image" data-original="assets/img/img_home/img/slides/vw-logo.jpg" data-plugin-lazyload data-plugin-options="{'appearEffect': 'animated fadeIn'}"></span>
									<i class="fa fa-spinner fa-spin fa-fw"></i>
								</span>
								<span class="sample-item-description">
									<h5>Home Corporate Version 2</h5>
								</span>
							</a>
						</div>
					</li>
	
				</ul>
			</div>
		</div>
	</section>

	<section class="section section-background section-text-light section-center mt-xl mb-none" style="background-image: url('assets/img/img_home/img/parallax.jpg'); background-position: 50% -100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs"></i><br><strong>What Client’s Say</strong></h2>
					<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-none" data-plugin-options="{'items': 1, 'loop': false}">
						<div>
							<div class="col-md-12">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
									<blockquote>
										<p>Outstanding about everything : - Support is fast and perfect : I got answers to every questions I asked. - Code quality is up to date, modern, structured, clear, easy to understand. - Responsive IS responsive (any screen size, smartphone & tablet. - Design is pure and esthetic. - Okler provide update. Thank you Okler team for all of this ! Keep going !</p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong>Gothvel</strong></p>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="col-md-12">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
									<blockquote>
										<p>This theme is totally customizable, clean with all the options you could want. Don't want full screen layout? With one word added to the code the entire site becomes boxed version... The customer support is absolutely unsurpassed. Can not recommend this enough.</p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong>katefischer510</strong></p>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="col-md-12">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
									<blockquote>
										<p>The code is extremely well organized, the help information and support is terrific and the options provided by the template are about the most thorough I've found - what more could you ask for?</p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong>sibelius</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@stop
		