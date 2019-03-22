@extends('layout2')

@section('contenido')

<div class="header-gas text-uppercase">
    <section class="heder_black ">
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gasolineras</li>
                </ol>
            </nav>
            
        <div class="row lign-items-center">
            <div class="col-12 text-center txt-instagram a">
            <h5>Gasolineras</h5>
            <p class="text-white">Combustible de última generación: Akrontech </p>
            </div>
        </div>
        </div>
    </section>
    
    <div class="header-svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 22" preserveAspectRatio="none">
        <polygon class="fill_red" points="0,5 50,20 0,10 0,5"/>
        <polygon class="fill_red" points="100,5 50,20 100,10 100,5"/>
        <polygon class="fill_0c4479" points="0,10 55,21 0,21 0,10"/>
        <polygon class="fill_0c4479" points="100,10 45,21 100,21 100,10"/>
    
        </svg>
    </div>
</div>

<div id="gas">
<div class="row bg_0c4479 text-uppercase mt-0 mx-0 ">
    <div class="container bg_0c4479 text-uppercase mt-3 mb-5">
        <div class="row mt-4 text-center">
            <div class=" col-sm-12 col-md-12 col-12 "> <h4>Todo lo que buscas y más</h4> </div>
            <div class=" col-sm-12 col-md-12 col-12 "> <p class="text-white">Luego de 25 años de experiencia en el rubro de los lubricantes, grasas y aceites, nos hemos dado a la tarea de ofreceer al consumidor final y a los nuevos posibles socios un concepto de Estaciones de Servicio con valor, calidad y eficiencia, ofreciendo seguridad, calidad y un servicio premium a los usuarios quienes, con el uso del combustible con tecnología AKRONTECH, apoyan directamente al cuidado y reducción de contaminantes al ambiente.  </p></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3 mt-3 ">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4 ">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/suministro.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center"> suministro  garantizado </h5>
                </section>
            </div>
             
            <div class="col-md-3 mt-3">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/combustibles.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center"> Combustibles de última generación </h5>
                </section>
            </div>

            <div class="col-md-3 mt-3">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/gasolineras.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center"> el nuevo concepto de gasolineras </h5>
                </section>
            </div>

            <div class="col-md-3 mt-3">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/plataforma.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center"> Plataforma de crecimiento </h5>
                </section>
            </div>
        </div>
    </div>
</div>

<section >
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6 mb-3">
                <img class="img-fluid" src="{{asset('assets/img/gas-station/akrontech.jpg')}}" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-12 ">
                        <img class="img-fluid mb-3" src="{{asset('assets/img/gas-station/akrontech-letter.png')}}" alt="">
                        
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <p>El futuro llegó. <span>AKRON</span><bdi>TECH </bdi><span>®</span> es el combustible exclusivo de <span>AKRON GASOLINERAS ®</span> con una formulación especial que reduce hasta el 40% las emisiones contaminates y mejora el rendimiento hasta 10%</p>
                        <div class="row">
                            <ul>
                                <li>Mejora el rendimiento </li> 
                                <li>Reduce emisiones contaminantes</li>
                                <li>Aumenta la potencia del motor </li>
                                <li>Limpia el sistema de combustion desde el primer arranque</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
      
@stop