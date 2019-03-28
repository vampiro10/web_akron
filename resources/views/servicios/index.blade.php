@extends('layout2')

@section('contenido')

<div class="mb-5 header-img-akron">
    <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">INICIO</a></li>
            <li class="breadcrumb-item active" aria-current="page">SERVICIOS</li>
            </ol>
        </nav>
        
        <div class="row lign-items-center">
            <div class="col-12 text-center txt-instagram a">
            <h5>SERVICIOS</h5>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <img class="img-fluid" src="{{asset('assets/img/header/header_responsive.png')}}" alt="header_responsive">
    </div>
</div>

<div class="container ">
    <div class="row mx-0" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('assets/img/services/zona-akron.png')}}" alt="zona-akron">
            </div>
            <div class="col-md-6">
                <h2 class="text-body">ZONA AKRON </h2>    
                <h5 class="font-weight-light mt-3">Zona Akron es un concepto único de diagnóstico y cambio de fluidos de automóviles express, donde podrás encontrar los siguietes servicios:
                </h5>

                <ul class="ul-custom mt-4">
                    <li class="font-weight-light">Cambios de aceite de motor (y su correspondiente filtro) </li> 
                    <li class="font-weight-light">Cambio de aticongelante</li>
                    <li class="font-weight-light">Cambio de fluido de dirección</li>
                </ul>
            
                <a class="btn btn-custom-red mt-3" href="{{route('zona')}}">VER MÁS</a>
                
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('assets/img/services/pitlub.png')}}" alt="pitlub">
            </div>
            <div class="col-md-6">
                <h2 class="text-body">PITLUB</h2>    
                <h5 class="font-weight-light mt-3">Zona Akron es un concepto único de diagnóstico y cambio de fluidos de automóviles express, donde podrás encontrar los siguietes servicios:
                </h5>

                <ul class="ul-custom mt-4">
                    <li class="font-weight-light">Cambios de aceite de motor (y su correspondiente filtro) </li> 
                    <li class="font-weight-light">Cambio de aticongelante</li>
                    <li class="font-weight-light">Cambio de fluido de dirección</li>
                </ul>
            
                <a class="btn btn-custom-red mt-3" href="{{route('pitlub')}}">VER MÁS</a>
            </div>
        </div>

        <div class="row my-5 align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('assets/img/gas-station/akrontech-letter.png')}}" alt="pitlub">
            </div>
            <div class="col-md-6">
                    <h2 class="text-body">GASOLINERAS</h2>    
                    <h5 class="font-weight-light mt-3">Zona Akron es un concepto único de diagnóstico y cambio de fluidos de automóviles express, donde podrás encontrar los siguietes servicios:
                    </h5>
    
                    <ul class="ul-custom mt-4">
                        <li class="font-weight-light">Cambios de aceite de motor (y su correspondiente filtro) </li> 
                        <li class="font-weight-light">Cambio de aticongelante</li>
                        <li class="font-weight-light">Cambio de fluido de dirección</li>
                    </ul>
                
                    <a class="btn btn-custom-red mt-3" href="{{route('gasolinera')}}">VER MÁS</a>
            </div>
        </div>
    </div>
</div>
@stop