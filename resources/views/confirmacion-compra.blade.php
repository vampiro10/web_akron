@extends('layout2')

@section('contenido')

<div class="header-crear-cuenta text-uppercase">
    <div class="container">
        <nav aria-label="breadcrumb" class="heder-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CONFIRMACION DE COMPRA</li>
            </ol>
        </nav>
            
   <div class="row align-items-center heder-title">
       <div class="col-12 text-center txt-instagram txt-header-d">
          <h5>CONFIRMACIÓN DE COMPRA</h5>
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
        <div class="col-md-12">
          <h2 class="tituloDir">¡SU PEDIDO DE HA REALIZADO CORRECTAMENTE!</h2><br>

          GRACIAS POR COMPRAR CON NOSOTROS. UNA COPIA DEL DETALLE DE SU COMPRA HA SIDO ENVIADA A <strong>CORREO@HOTMAIL.COM</strong><br>
          SU NUMERO DE ORDEN ES: 14891297 <br>
          CREADO 11/3/18 10:16PM<br>
          ESTATUS: EN PROCESO

        </div>
      </div> 
      <div class="row sup">
        <div class="col-md-4">
         <div class="back"> 
            <strong>DIRECCIÓN DE ENTREGA</strong><br>
            LOREM IPSUM 1234 SIT AMET <br>
            SIT AMET SIT AMET SIT AMET<br>
            GUADALAJARA, JALISCO. 44150<br>
            1234567890
          </div>
        </div>
        <div class="col-md-4">
          <div class="back">  
           <strong>MÉTODO DE ENTREGA</strong><br><br>
            ENVÍO REGULAR (10-30 DÍAS) <br> <br>
            
             <strong>$0.00MX</strong>
          </div>
        </div>
        <div class="col-md-4">
          <div class="back">
            <strong>DIRECCIÓN DE PAGO</strong><br><br>
            TARJETA DE CRÉDITO <br>
            SANTANDER<br>
            *** **** **** ***1234
          </div>

        </div>
      </div> 
      <div class="row sup">
        <div class="col-md-12" align="center">
          <button type="submit" class="btn boton col-md-4">SEGUIR COMPRANDO</button>
        </div>
      </div>    
    </div>
  </div>
</div>

@stop


