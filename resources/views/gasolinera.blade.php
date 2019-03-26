@extends('layout2')

@section('contenido')

<div class="bg-header-gas ">
    <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">INICIO</a></li>
            <li class="breadcrumb-item active" aria-current="page">GASOLINERA</li>
            </ol>
        </nav>
        
        <div class="row lign-items-center">
            <div class="col-12 text-center txt-instagram a">
            <h5>GASOLINERA</h5>
            <h4>COMBUSTIBLE DE ÚLTIMA GENERACION : AKRONTECH</h4>
            </div>
        </div>
    </div>
    <div>
        <img class="img-fluid" src="{{asset('assets/img/gas-station/header-gas.png')}}" alt="">
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
                    <h5 class="text-center text-white"> suministro <br> garantizado </h5>
                </section>
            </div>
             
            <div class="col-md-3 mt-3">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/combustibles.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center text-white"> Combustibles de última generación </h5>
                </section>
            </div>

            <div class="col-md-3 mt-3">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/gasolineras.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center text-white"> el nuevo concepto de gasolineras </h5>
                </section>
            </div>

            <div class="col-md-3 mt-3">
                <section>
                    <div class="row justify-content-center ">
                        <div class="col-4">
                            <img class="img-fluid" src="{{asset('assets/img/gas-station/plataforma.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="text-center text-white"> Plataforma de <br> crecimiento </h5>
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

<div class="row bg-cada-litro mt-5  align-items-center justify-content-center mx-0">
    <div class="container align-items-center justify-content-center">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-2 mt-5">
                <img class="img-fluid" src="{{asset('assets/img/gas-station/cada_litro.png')}}" alt="">
            </div>
        </div>
        
        <div class="col-md-12 mt-5 text-center">
            <h4>CADA LITRO CUENTA</h4>
        </div>
        <div class="col-md-12 d-flex justify-content-center mt-5 ">
            <div class="col-md-6 ">
                <p class="text-white text-center">Un nuevo concepto de Estación de Servicio que cuida hasta la última gota de combustible. Recibe un suministro completo garantizado, con un combustible que aumenta el rendimiento, mientras cuida el medio ambiente.</p>
            </div>
        </div>
    </div>
</div>

<section >
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6 d-flex align-items-center ">
                <div class="col-md-12">
                    <h2 class="text-body mb-3">INSTALACIONES INOVADORAS</h2>
                    <h5 class="font-weight-light text-justify mb-3">Aumenta el flujo de tu Estación de Servicio, a través de un espacio con diseño único y novedoso</h5>
                    <p class="text-justify">
                        <span>AKRON GASOLINERAS®</span> comprende una remodelación que resalta los principales rasgos de tu granquicia para garantizar una imagen de marca atractiva, que capta y complace al cliente mas exigente. 
                    </p>
                </div>
                
                <div class="row"></div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6 mb-3">
                <img class="img-fluid mb-3" src="{{asset('assets/img/gas-station/Akron_instalaciones.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row bg-estaciones justify-content-center mx-0 "> 
        <h2 class="text-body mt-3">ESTACIONES DE SERVICIO</h2>

        
    </div>
    <div class="container">
        
    </div>
</section>


</div>
      
@stop