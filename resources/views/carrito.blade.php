@extends('layout2')

@section('contenido')
<div id="shopping_cart">
    <div class="bg-header mb-5">
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">CARRITO DE COMPRA</li>
                </ol>
            </nav>
            
            <div class="row lign-items-center">
                <div class="col-12 text-center txt-instagram a">
                <h5>CARRITO DE COMPRA</h5>
                </div>
            </div>
        </div>
        <div>
            <img class="img-fluid" src="{{asset('assets/img/header/header_responsive.png')}}" alt="">
        </div>
    </div>  
    
    <div class="container">
        <div class="row border-bottom justify-content-between">
            <div class="col-md-6">
                PRODUCTO
            </div>
            <div class="col-md-2 text-center">CANTIDAD</div>
            <div class="col-md-2 text-center">PRECIO</div>
    
        </div>
        <div class="row d-flex justify-content-end ">
            <a class="text-body" href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        <div class="row justify-content-between border-bottom">
            
            <div class="col-md-6 ">
                <div class="row ">
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{asset('assets/img/img-akron.jpg')}}" alt="producto" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <a href="#"><h4 class="text-body font-weight-bold">AKRON EURO DIESEL</h4></a>
                        <div class="text-muted"><small>- SINTETICO </small></div>
                        <div class="text-muted"><small>- ALTO DESEMPEÑO </small></div>
                        <div class="text-muted"><small>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</small></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2  d-flex align-items-center">
                    <div class="row justify-content-end">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default" data-value="-1" data-target="#spinnerp1" data-toggle="spinner">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </span>
                            <input type="text" data-ride="spinner" id="spinnerp1" class="form-control input-number" value="1" data-min="1" data-max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default" data-value="2" data-target="#spinnerp1" data-toggle="spinner" data-on="mousehold">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <h4 class="text-body font-weight-normal"> $ 159.00 MX</h4>
            </div>
        </div>
    
        <div class="row d-flex justify-content-end ">
            <a class="text-body" href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        <div class="row justify-content-between border-bottom">
            <div class="col-md-6 ">
                <div class="row ">
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{asset('assets/img/img-akron.jpg')}}" alt="producto" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <a href="#"><h4 class="text-body font-weight-bold">AKRON EURO DIESEL</h4></a>
                        <div class="text-muted"><small>- SINTETICO </small></div>
                        <div class="text-muted"><small>- ALTO DESEMPEÑO </small></div>
                        <div class="text-muted"><small>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</small></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2  d-flex align-items-center">
                    <div class="row justify-content-end">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default" data-value="-1" data-target="#spinnerp2" data-toggle="spinner">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </span>
                            <input type="text" data-ride="spinner" id="spinnerp2" class="form-control input-number" value="1" data-min="1" data-max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default" data-value="2" data-target="#spinnerp2" data-toggle="spinner" data-on="mousehold">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <h4 class="text-body font-weight-normal"> $ 159.00 MX</h4>
            </div>
        </div>
        <div class="row justify-content-end mb-5">
            <div class="col-md-8">
                <div class="row justify-content-end">
                    <div class="col-md-6 d-flex justify-content-between my-3 border-bottom">
                        <small>SUBTOTAL</small>
                        <h4 class="text-body font-weight-normal"> $ 318.00 MX</h4>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-6 d-flex justify-content-between">
                        <h5>TOTAL <small>IMP INCLUIDOS</small></h5>
                        <h4 class="text-body font-weight-bold"> $ 318.00 MX</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="row">
                            <a class="btn btn-block" href="#" role="button">SEGUIR COMPRANDO</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="row">
                            <a class="btn btn-block" href="#" role="button">COMPLETAR ORDEN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

      
@stop