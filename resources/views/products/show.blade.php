@extends('layout2')

@section('contenido')

<section class="blog gray-bg">
  <div class="container">
    <div class="row">
      <!-- post-->
      <div class="col-md-6">
        <div class="text-center ">
          <img class="img-fluid" src="{{asset($product->img)}}" alt="">
          <!--<div class="info"> 
            <h4 class="h5"> <a href="post.html">Newest photo apps          </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
            <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>-->
        </div>
      </div>
      <!-- /end post-->
      <!-- post-->
      <div class="col-md-6">
        <div class="caja-txt-home-pdp">
          <div class="row">
            <div class="col-lg-12">
              <h6 class="text-body">ACEITES</h6>
              <h2 class="text-body">{{$product->nombre}}</h2>
              <div>
                <label class="margen-txt-p">Viscosidad</label>
                <select name="">
                  <option value="">5W-40</option>
                </select>
              </div>
              <div>
                <label>Presentación</label>
                <select name="">
                  <option value="">BOTELLA-1L código</option>
                </select>
              </div>
              <div>
                <label class="margen-txt-s">Cantidad</label>
                <select name="">
                  <option value="">1</option>
                </select>
              </div>
              <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default" data-value="-1" data-target="#spinner2" data-toggle="spinner">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input type="text" data-ride="spinner" id="spinner2" class="form-control input-number" value="1" data-min="1" data-max="10">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default" data-value="2" data-target="#spinner2" data-toggle="spinner" data-on="mousehold">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
              <div>
                Precio unitario:
                <br>
                <span class="precio-pdp">$ {{$product->precio}} MX</span>
              </div>
              <a class="btn btn-outline-danger " href="#" role="button">Agregar al carrito</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- /end post-->
    </div>
  </div>
</section>
<section class="blog gray-bg imgs-pdp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        AKRON RECOMIENDA PARA:
      </div>
      <div class="col-md-3">
        <img src="{{asset('assets/img/icono-pdp.png')}} " alt="...">
      </div>
      <div class="col-md-3">
        <img src="{{asset('assets/img/icono-pdp-2.png')}} " alt="...">
      </div>
      <div class="col-md-3">
        <img src="{{asset('assets/img/icono-pdp-3.png')}} " alt="...">
      </div>
      <div class="col-md-3">
        <img src="{{asset('assets/img/icono-pdp-4.png')}} " alt="...">
      </div>
    </div>
  </div>
</section>
<section class="blog gray-bg imgs-pdp">
  <div id="exTab1" class="container">
    <div class="row">
      <div class="col-md-12">
        <ul  class="nav nav-pills">
          <li class="active">
            <a  href="#1a" data-toggle="tab">DESCRIPCIÓN</a>
          </li>
          <li><a href="#2a" data-toggle="tab">BENEFICIOS</a>
          </li>
          <li><a href="#3a" data-toggle="tab">APLICACIONES</a>
          </li>
          <li><a href="#4a" data-toggle="tab">USO</a>
          </li>
        </ul>
        <div class="tab-content clearfix">
          <div class="tab-pane active" id="1a">
            <p>
              {{$product->description}}
            </p>
           
          </div>
          <div class="tab-pane" id="2a">
            <p>
                {{$product->beneficios}}
            </p>
            
          </div>
          <div class="tab-pane" id="3a">
            <p>
                {{$product->aplicaciones}}
            </p>
            
          </div>
            <div class="tab-pane" id="4a">
            <p>
                {{$product->uso}}
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog gray-bg imgs-pdp">
  <div class="container">
    <div class="row fondo-ficha-t">
      <div class="col-md-12 padding-ficha">
          <img src="{{asset('assets/img/icon-pdf.png')}}" alt=""> <span class="t-ficha">FICHAS TÉCNICAS</span>
      </div>
      <div class="col-md-3">
        - FICHA TÉCNICA 5W-30
      </div>
      <div class="col-md-3">
        - CERTIFICACION VW
      </div>
      <div class="col-md-3">
        - MSDS 5W-30
      </div>
      <div class="col-md-3">
        - CERTIFICACION PORSCHE 5W
      </div>
      <div class="col-md-3">
        - FICHA TÉCNICA 5W-40
      </div>
      <div class="col-md-3">
        - CERTIFICACION BMW 5W-40
      </div>
      <div class="col-md-3">
        - MSDS 5W-40
      </div>
      <div class="col-md-3">
        - CERTIFICACION BMW 5W-30
      </div>
      <div class="col-md-3">
        - CERTIFICACION MB 5W
      </div>
    </div>
  </div>
</section>
<section class="produ-des">
  <div class="container">
    <div class="row">
    <h5 class="txt-produ-d margen-pdp">PRODUCTOS RELACIONADOS</h5>
      <ul id="produ-nuevo">
          <li>
            <img src="{{asset('assets/img/img-akron-2.png')}}" />
            <div class="caja-txt">
              <h5>AKRON EURO TTTDIESEL</h5>
              <p>- SINTÉTICO</p>
              <p>- ALTO DESEMPEÑO</p>
              <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
            </div>
            <div class="btn-comprar">
              <a class="">COMPRAR</a>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/img/img-akron-2.png')}}" />
            <div class="caja-txt">
              <h5>AKRON EURO TTTDIESEL</h5>
              <p>- SINTÉTICO</p>
              <p>- ALTO DESEMPEÑO</p>
              <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
            </div>
            <div class="btn-comprar">
              <a class="">COMPRAR</a>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/img/img-akron-2.png')}}" />
            <div class="caja-txt">
              <h5>AKRON EURO TTTDIESEL</h5>
              <p>- SINTÉTICO</p>
              <p>- ALTO DESEMPEÑO</p>
              <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
            </div>
            <div class="btn-comprar">
              <a class="">COMPRAR</a>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/img/img-akron-2.png')}}" />
            <div class="caja-txt">
              <h5>AKRON EURO TTTDIESEL</h5>
              <p>- SINTÉTICO</p>
              <p>- ALTO DESEMPEÑO</p>
              <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
            </div>
            <div class="btn-comprar">
              <a class="">COMPRAR</a>
            </div>
          </li>                                                 
      </ul>    
    </div>
  </div>
  <script type="text/javascript">

    $(window).load(function() {
        $("#produ-nuevo").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,         
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            }        
        });   
    });
  </script>
</section>

@stop

@section("scripts")
 
</section>