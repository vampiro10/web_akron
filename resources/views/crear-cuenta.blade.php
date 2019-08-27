@extends('layout2')

@section('contenido')

<div class="header-crear-cuenta text-uppercase">
    <div class="container">
        <nav aria-label="breadcrumb" class="heder-breadcrumb">
            <ol class="breadcrumb">
              	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CREAR CUENTA</li>
            </ol>
        </nav>
            
	    <div class="row align-items-center heder-title">
	        <div class="col-12 text-center txt-instagram txt-header-d">
	           	<h5>CREAR CUENTA</h5>
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
							    <label class="etiquetas">NOMBRE*</label>
							    <input type="text" class="form-control" id="nombre">
					 </div>
					 <div class="col-md-3">
							    <label class="etiquetas">APELLIDOS*</label>
							    <input type="text" class="form-control" id="apellidos">
					 </div>
					 <div class="col-md-3">
							    <label class="etiquetas">EMAIL*</label>
							    <input type="text" class="form-control" id="email">
					 </div>
					 <div class="col-md-3">
							    <label class="etiquetas">TELÉFONO*</label>
							    <input type="number" class="form-control" id="telefono">
					</div>
			</div>
			<div class="row margin-in">
			 		<div class="col-md-12">
						<label class="etiquetas">DIRECCIÓN*</label>  			 
			      			<input type="text" class="form-control" id="direccion">
					 </div>				 
			</div>
			<div class="row margin-in">
				<div class="col-md-3">
					<label class="etiquetas">LOCALIDAD/CIUDAD*</label>
						<input type="text" class="form-control" id="localidad">
				 </div>
				 <div class="col-md-3">
					<label class="etiquetas">ESTADO*</label>
						<input type="text" class="form-control" id="estado">
				 </div>
				 <div class="col-md-3">
					<label class="etiquetas">PAÍS*</label>
						<input type="text" class="form-control" id="pais">
				 </div>
				 <div class="col-md-3">
					<label class="etiquetas">CÓDIGO POSTAL*</label>
						<input type="text" class="form-control" id="codpostal">
				 </div>
			</div>
			<div class="row margin-in">
				<div class="col-md-6">
					Aqui captcha
				</div>
				<div class="col-md-6" align="right">
					<button type="submit" class="btn boton col-md-4">CREAR CUENTA</button>
				</div>				
			</div>
		</form>
	</div>
</div>
		
@stop