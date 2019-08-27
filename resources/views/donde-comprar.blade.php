@extends('layout2')

@section('contenido')
<div class="header-distribuidor text-uppercase">
    <div class="container">
        <nav aria-label="breadcrumb" class="heder-breadcrumb">
            <ol class="breadcrumb">
              	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dónde Comprar</li>
            </ol>
        </nav>
            
	    <div class="row align-items-center heder-title">
	        <div class="col-12 text-center txt-instagram txt-header-d">
	           	<h5>DÓNDE COMPRAR</h5>
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
	<div class="main-title margin-form">
		<form>
			<div class="row margin-in">
			 		<div class="col-md-3">							
						<div class="form-group">
							<label class="etiquetas">TIPO DE DISTRIBUIDOR</label>
								<select class="form-control" id="exampleFormControlSelect1">
								    <option>Distribuidor Ejecutivo Nacional</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								    <option>5</option>
								</select>
						</div>	
					 </div>
					 <div class="col-md-3">
							<div class="form-group">
							<label class="etiquetas">ESTADO</label>
								<select class="form-control" id="exampleFormControlSelect1">
								    <option>Todos</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								    <option>5</option>
								</select>
						</div>
					 </div>
					 <div class="col-md-1 botonmapa">
					 	<div class="estiloboton2">
					 		<i class="fa fa-list" aria-hidden="true"></i>
					 	</div>
					 </div>
					 <div class="col-md-1 botonmapa">
					 	<div class="estiloboton">
							<i class="fa fa-map-marker etiquetas" aria-hidden="true"></i>
						</div>
					 </div>
					
					 <div class="col-md-4 botonmapa">
							<button type="submit" class="btn boton">CARTA ACLARATORIA GHS-SGA</button>
					</div>
			</div>
		</form>
		<hr>
	</div>
</div>
<div class="main">
	<div class="main-title margin-form">
		
			<div class="row margin-in">
			 		<div class="col-md-4">							
						<h3 class="tituloDir">LUBRICANTE TAPATÍOS</h3>
						Guadalajara, Jalisco<br>
						Domicilio: Av. Lázaro Cárdenas No. 689-B, Zona Industrial<br>
						Teléfono:333-145-1537<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					 </div>
					 <div class="col-md-4">
						<h3 class="tituloDir">DISTRIBUIDOR DE GRASAS Y ACEITES AKRON, S.A. DE C.V.</h3>
						Autlán de Navarro, Jalisco<br>
						Domicilio: Borbón No. 267, Col. Centro<br>
						Teléfono:317-382-1587<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>					 
					 <div class="col-md-4">
					 	<h3 class="tituloDir">COMELUB, S.A DE C.V.</h3>
						Lagos de Moreno, Jalisco<br>
						Domicilio: 5 de Mayo Esq Blvd Orozco y Jimenez, Centro<br>
						Teléfono: 474 7425299<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>
					<!-- Segundo grupo-->
					<div class="col-md-4 sup">							
						<h3 class="tituloDir">LUBRICANTE DE LOS ALTOS, S.A. DE C.V.</h3>
						Tepatitlán, Jalisco<br>
						Domicilio: Cecilio Navarro No. 17, Col. Centro<br>
						Teléfono:378-781-1898<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					 </div>
					 <div class="col-md-4 sup">
						<h3 class="tituloDir">DISTRIBUIDOR DE GRASAS Y ACEITES AKRON, S.A. DE C.V.</h3>
						Ciudad Guzman, Jalisco<br>
						Domicilio: F, Col. Centro<br>
						Teléfono:341-414-6241<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>					 
					 <div class="col-md-4 sup">
					 	<h3 class="tituloDir">CAROLINA ACEVES MADRILLAN</h3>
						Guadalajara, Jalisco<br>
						Domicilio: Carretera a los Altos #270, Centro<br>
						Teléfono: 01-33-1200-3232<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>
					<!-- Tercer grupo-->
					<div class="col-md-4 sup">							
						<h3 class="tituloDir">AMADO H. SIERRA Y HERMANO, S.A. DE C.V.</h3>
						Puerto Vallarta, Jalisco<br>
						Domicilio: Carretera a Las Palmas No.235 Bodega No. 3, Col.<br> Las Juntas<br>
						Teléfono:322-223-2437<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					 </div>
					 <div class="col-md-4 sup">
						<h3 class="tituloDir">COMELUB, S.A. DE C.V.</h3>
						Zapopan, Jalisco<br>
						Domicilio: Av. Vallarta No 5543-A, Santa Maria del Pueblito<br>
						Teléfono:33165571019<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>					 
					 <div class="col-md-4 sup">
					 	<h3 class="tituloDir">AMADO H. SIERRA</h3>
						Cd.Guzmán, Jalisco<br>
						Domicilio: Félix Torres Milanés No. 84, Centro<br>
						Teléfono: 01 341 414-62-42, fax: 01 341 41 05 952<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>
					<!-- utlimo bloque-->	
					<div class="col-md-4 sup">
					 	<h3 class="tituloDir">DISTRIBUMEZ</h3>
						Guadalajara, Jalisco<br>
						Domicilio: Calle Guamachil 1548, Col. Del Fresno<br>
						Teléfono: 333-619-88-13<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>
					<div class="col-md-4 sup">
					 	<h3 class="tituloDir">COMELUB, S.A DE C.V.</h3>
						Ocotlán, Jalisco<br>
						Domicilio: Av Francisco Zarco #1059, Colonia Lindavista<br>
						Teléfono: 3929227584<br>
						<a href="#"><span class="vermapa">VER MAPA ></span></a>
					</div>	
									 
			</div>		
		
	</div>

</div>




@stop