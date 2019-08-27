@extends('layout2')



@section('contenido')

<div class="header-industria header-industria-productos text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb position-relative">

                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>

                <li class="breadcrumb-item"><a href="{{route('industrial')}}">Industria</a></li>

                <li class="breadcrumb-item"><a href="{{route('industrial')}}">Productos</a></li>

                <li class="breadcrumb-item"><a href="{{route('industrial')}}">Transporte</a></li>

                <li class="breadcrumb-item active" aria-current="page">Akron Custom CI-4</li>

            </ol>

        </nav>



      <div class="row align-items-center header-industria-title position-relative pt-4">

          <div class="col-12 text-center txt-instagram txt-header-d pt-5">

              <h5>AKRON CUSTOM CI-4</h5>

          </div>

      </div>

    </div>

    <div class="header-industria-img position-relative">

        <img src="{{asset('assets/img/header/header_responsive.png')}}" alt="AKRON" class="img-fluid">

    </div>

</div>

<section class="blog gray-bg">

  <div class="container">

    <div class="row">

      <!-- post-->

      <div class="col-md-6 pt-5">

        <div class="text-center borde-produ">

          <img class="img-fluid-detalle" src="{{ asset('assets/img/producto_detalle.jpg') }}" alt="">

        </div>

      </div>

      <!-- /end post-->

      <!-- post-->

      <div class="col-md-6">

        <div class="caja-txt-home-pdp">

          <div class="row">

            <div class="col-lg-12">

              <h3 class="mb-4" style="color: #000;">APLICACIONES</h3>
              <p>
                Akron Ultra Clear Plus CK-4 SAE 15W-40 se elabora a partir de bases hidrofraccionadas más un paquete de aditivos de tecnología de última generación que nos va a permitir lubricar y extender la vida útil de los motores de última generación con Sistema de Recirculación de Gases de Escape (EGR), Sistema de Reducción Catalítica (SCR) y Filtro de Partículas (DPF), que trabajan bajo condiciones severas de operación y que deben cumplir con las normas de la EPA debido a sus detergentes y dispersantes de tecnologías recientes.
              </p>
              <p>
                Cumple con la especificación API CK-4 y también ola especificación para motores a gasolina API SN, así como, los requerimientos de los principales fabricantes americanos y europeos.
              </p>

              <span class="txt-produ-detalle">CÓDIGOS Y PRESENTACIONES</span>

              <table class="table">
                <thead>
                  <tr style="background-color: #e6613c;color: #fff;">
                    <th scope="col">Producto</th>
                    <th scope="col">Akron Ultra Clear Plus CK-4 SAE 15W-40</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mini granel</td>
                    <td>51444</td>
                  </tr>
                  <tr>
                    <td>Tambor</td>
                    <td>531444</td>
                  </tr>
                  <tr>
                    <td>Cubeta</td>
                    <td>331444</td>
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

  <div id="exTab2" class="container">

    <div class="row">

      <div class="col-md-12">

        <ul  class="nav nav-pills">

          <li class="active"><a href="#2a" data-toggle="tab">PROPIEDADES</a>

          </li>

          <li><a href="#3a" data-toggle="tab">BENEFICIOS</a>

          </li>

        </ul>

        <div class="tab-content clearfix">

          <div class="tab-pane active" id="2a">

            <p>
              <ul class="ul-custom mt-4">
                <li class="font-weight-light">Presenta una mayor protección para el motor, por lo que ofrece un nivel antidesgaste excepcional.</li>
                <li class="font-weight-light">
                  Cuenta con aditivos dispersantes y detergentes de reciente tecnología, que ofrecen propiedades de limpieza excepcionales, que permiten mantener limpio el motor y en suspensión los productos de la combustión, logrando mayor durabilidad en los motores.
                </li>
                <li class="font-weight-light">
                  Este aceite se caracteriza por la gran capacidad antioxidante que hace que se incremente de manera excesiva la viscosidad del aceite.
                </li>
                <li class="font-weight-light">Cumple con Euro V y VI</li>
                <li class="font-weight-light">Se puede emplear en flotillas mixtas.</li>
              </ul>
            </p>

            

          </div>

          <div class="tab-pane" id="3a">

            <p>

                

            </p>

            

          </div>

            <div class="tab-pane" id="4a">

            <p>

                

            </p>

            

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="blog gray-bg imgs-pdp">

  <div class="container">

    <div class="row fondo-ficha-t pb-4">

      <div class="col-md-12 padding-ficha">

          <span class="t-ficha">DOCUMENTOS</span>

      </div>

      <div class="col-md-12">

        <img src="{{asset('assets/img/icon-pdf.png')}}" alt=""> FICHA TÉCNICA 15W-40

      </div>

      <div class="col-md-12">

        <img src="{{asset('assets/img/icon-pdf.png')}}" alt=""> HOJA DE SEGURIDAD 1444

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