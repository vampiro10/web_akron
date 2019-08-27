@extends('layout2')



@section('contenido')



<section class="blog gray-bg">

  <div class="container">

    <div class="row">

      <!-- post-->

      <div class="col-md-6 pt-5">

        <div class="text-center borde-produ">

          <img class="img-fluid-produ" src="{{asset($product->img)}}" alt="">

        </div>

      </div>

      <!-- /end post-->

      <!-- post-->

      <div class="col-md-6">

        <div class="caja-txt-home-pdp">

          <div class="row">

            <div class="col-lg-12">

              <h3 class="mb-4" style="color: #000;">DESCRIPCIÓN</h3>
              <p>- Aceite 100% sintético para automóviles de alto desempeño.</p>
              <p>- Uno de los más avanzados de su tipo</p>
              <p>- El primer lubricante sintético avalado por las principales armadoras alemanas</p>
              <p>- Certificado por Porsche (Oil Category A40), BMW (Longlife 04), Mercedes Benz (MB 229.51) y Volkswagen 502.00/VW 505.00</p>
              <p>- Cumple con las especificaciones SN y SM del American Petroleum Institute (API) y los estándares de la industria</p>

              <span class="txt-produ-detalle">CÓDIGOS Y PRESENTACIONES</span>

              <table class="table">
                <thead>
                  <tr style="background-color: #0b4d91;color: #fff;">
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">CÓDIGO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>AKRON SPITZEN Botella 1L</td>
                    <td>212101</td>
                  </tr>
                  <tr>
                    <td>AKRON SPITZEN Botella 1L</td>
                    <td>212101</td>
                  </tr>
                </tbody>
              </table>

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

          <li class="active"><a href="#2a" data-toggle="tab">BENEFICIOS</a>

          </li>

          <li><a href="#3a" data-toggle="tab">APLICACIONES</a>

          </li>

          <li><a href="#4a" data-toggle="tab">USO</a>

          </li>

        </ul>

        <div class="tab-content clearfix">

          <div class="tab-pane active" id="2a">

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

<section class="produ-des-zona mt-5">

  <div class="container">

    <div class="row">
      <div class="col-md-8 pt-4">
        <h5 class="txt-gde-zona">¿QUIERES COMPRAR NUESTROS PRODUCTOS?</h5>
        <p>Visita nuestra tienda en línea</p>
      </div>
      <div class="col-md-4 pt-5">
        <a href="#" class="btn-akron-s">TIENDA EN LÍNEA</a>
      </div>
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