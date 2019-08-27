@extends('layout2')



@section('contenido')



<div id="index_products">



<div class="header-industria header-industria-productos text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb position-relative">

                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>

                <li class="breadcrumb-item active" aria-current="page">Productos</li>

            </ol>

        </nav>



      <div class="row align-items-center header-industria-title position-relative pt-4">

          <div class="col-12 text-center txt-instagram txt-header-d pt-5">

              <h5>PRODUCTOS</h5>

          </div>

      </div>

    </div>

    <div class="header-industria-img position-relative">

        <img src="{{asset('assets/img/header/header_responsive.png')}}" alt="AKRON" class="img-fluid">

    </div>

</div>  



{{-- <div class="header-product">

  <section class="fondo-inferior heder_blue ">

    <div class="container ">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>

              <li class="breadcrumb-item active" aria-current="page">Productos</li>

            </ol>

          </nav>

          

      <div class="row lign-items-center">

        <div class="col-12 text-center txt-instagram a">

          <h5>Productos</h5>

        </div>

      </div>

    </div>

  </section>



  <div class="header-svg">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 22" preserveAspectRatio="none">

      <polygon fill="black" points="0,5 50,20 0,10 0,5"/>

      <polygon fill="black" points="100,5 50,20 100,10 100,5"/>

      <polygon fill="white" points="0,10 55,21 0,21 0,10"/>

      <polygon fill="white" points="100,10 45,21 100,21 100,10"/>



    </svg>

  </div>



</div> --}}



<div class="container text-uppercase mt-5">

  <section>

    <div class="row">

      <div class="col-md-3">
        <div class="col-md-12 mb-3"><h3 class="text-body font-weight-bold">ENCUENTRA EL ACEITE ÓPTIMO PARA TU AUTO</h3></div>
        <div class="col-md-12">
          <div class="caja-filtro-produ">
            <label>MARCA</label>
            <select name="">
              <option value=""></option>
            </select>
            <label>MODELO</label>
            <select name="">
              <option value=""></option>
            </select>
            <label>KILOMETRAJE</label>
            <select name="">
              <option value=""></option>
            </select>
            <input type="" name="" value="BUSCAR">
          </div>
        </div>
        <div class="col-md-12 mt-5"><h3 class="text-body font-weight-bold">Productos</h3></div>

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Automoviles">

            <label class="custom-control-label" for="Automoviles">Automoviles y camionetas</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Motocicletas">

            <label class="custom-control-label" for="Motocicletas">Motocicletas</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Marino">

            <label class="custom-control-label" for="Marino">Marino recreativo</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Carga">

            <label class="custom-control-label" for="Carga">Carga y transporte</label>

          </div>

        </div>

  

        <div class="col-md-12">

            <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Grasas">

            <label class="custom-control-label" for="Grasas">Grasas lubricantes</label>

          </div>

        </div>

        <div class="col-md-12">

        <hr>

        </div>

        <div class="col-md-12"><h3 class="text-body font-weight-bold ">Filtro</h3></div>

        <div class="col-md-12"><h5 class="text-muted font-weight-light">Tipo de aceite</h5></div>

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Excepcional">

            <label class="custom-control-label" for="Excepcional">Excepcional</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Óptimo">

            <label class="custom-control-label" for="Óptimo">Óptimo</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Superior">

            <label class="custom-control-label" for="Superior">Superior</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Bueno">

            <label class="custom-control-label" for="Bueno">Bueno</label>

          </div>

        </div>

        <div class="col-md-12">

        <hr>

        </div>

        <div class="col-md-12 mt-4">

          <img class="img-fluid" src="{{asset('assets/img/publicidad.png')}}" alt="">

        </div>

      </div>

      <div id="list-products" class="col-md-9">

        <div class="row align-items-center justify-content-between border-bottom border-dark">

          <div class="col-md-2"> 6 Productos </div>

          <div class="col-md-3 justify-content-end d-flex pr-0">

              <form class="form-inline">

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Mostrar : </label>

                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">

                  <option selected>Todos</option>

                  <option value="1">One</option>

                  <option value="2">Two</option>

                  <option value="3">Three</option>

                </select>

              </form>

          </div>

        </div>



        <div class="row">

          @foreach ($products as $product )

            <div class="col-md-4 mt-4 txt-productos">

              <img class="img-fluid " src="{{asset($product->img)}}" alt="">

              <h3 class="text-body font-weight-bold">{{$product->nombre}}</h3>

              {{-- <h4 class="text-body font-weight-normal"> $ {{$product->precio}} MX</h4> --}}

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{URL::route('productos.show', $product->id) }}" role="button">Ver detalle</a></div>

              <br>

            </div>

          @endforeach

        </div>



        <div class="row align-items-center justify-content-between border-top border-dark ">

          <div class="col-md-2">

              6 Productos

          </div>

          <div class="col-md-6 pr-0">



            {{$products->render()}}



          </div>

          

        </div>



      </div>

    </div>

  </section>

</div>

</div>
<div class="greenroad-banner pt-5 pb-5 mt-5">

  <div class="container">

    <div class="row align-items-center">

      <div class="col-md-12 db-titulo mb-4">

        <h3>CERTIFICADOS</h3>

      </div>

      <div class="col-md-6 db-enlaces text-center">

        <p class="db-titulo-mensaje">ACEITES PARA AUTOMÓVILES</p>
        <hr>
        <div class="row">
          <div class="col-md-3 text-center">
            <img src="{{ asset('assets/img/certificado1.png') }}" alt="">
          </div>
          <div class="col-md-3 text-center">
            <img src="{{ asset('assets/img/certificado2.png') }}" alt="">
          </div>
          <div class="col-md-3 text-center">
            <img src="{{ asset('assets/img/certificado3.png') }}" alt="">
          </div>
          <div class="col-md-3 text-center">
            <img src="{{ asset('assets/img/certificado4.png') }}" alt="">
          </div>          
        </div>

      </div>
      <div class="col-md-6 db-enlaces text-center">

        <p class="db-titulo-mensaje">ACEITES PARA VEHÍCULOS DE CARGA PESADA Y TRANSPORTE</p>
        <hr>
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="{{ asset('assets/img/certificado5.png') }}" alt="">
          </div>
          <div class="col-md-4 text-center">
            <img src="{{ asset('assets/img/certificado6.png') }}" alt="">
          </div>
          <div class="col-md-4 text-center">
            <img src="{{ asset('assets/img/certificado7.png') }}" alt="">
          </div>          
        </div>
      </div>

    </div>

  </div>

</div>

<div class="container mt-5 mb-5">

    <div class="row mb-4">

        <div class="col-12">

            <h4 class="text-body">VISITA NUESTRO BLOG</h4>

        </div>

    </div>

    <div class="row">

        <div class="col-sm-4 mb-4">

            <img src="{{asset('assets/img/industrial/blog/blog1.jpg')}}" alt="AKRON" class="img-fluid">

            <span><i class="fa fa-tags"></i> AKRON GREENROAD</span>

            <h5 class="mt-2 mb-3">2017, ENTRE LOS TRES AÑOS MÁS CALIENTES DE LA HISTORIA</h5>

            <small>Ares Design, un famoso taller italiano, se ha inspirado en las primeras competiciones de motocicletas celebradas en Gra...</small>

            <hr>

            <div class="d-flex">

                <div class="mr-auto">

                    <small>Septiembre 01, 2018</small>

                </div>

                <a href="{{ url('detalle') }}" class="color-orange">LEER ARTÍCULO > </a>

            </div>

        </div>

        <div class="col-sm-4 mb-4">

            <img src="{{asset('assets/img/industrial/blog/blog2.jpg')}}" alt="AKRON" class="img-fluid">

            <span><i class="fa fa-tags"></i> AKRON GREENROAD</span>

            <h5 class="mt-2 mb-3">OCÉANO VS PLÁSTICO: UNA BATALLA QUE NOS CONCIERNE TODOS</h5>

            <small>Ares Design, un famoso taller italiano, se ha inspirado en las primeras competiciones de motocicletas celebradas en Gra...</small>

            <hr>

            <div class="d-flex">

                <div class="mr-auto">

                    <small>Septiembre 01, 2018</small>

                </div>

                <a href="{{ url('detalle') }}" class="color-orange">LEER ARTÍCULO > </a>

            </div>

        </div>

        <div class="col-sm-4 mb-4">

            <img src="{{asset('assets/img/industrial/blog/blog3.jpg')}}" alt="AKRON" class="img-fluid">

            <span><i class="fa fa-tags"></i> AKRON GREENROAD</span>

            <h5 class="mt-2 mb-3">MUERE EL ÚLTIMO MACHO DE RINOCERONTE BLANCOs</h5>

            <small>Ares Design, un famoso taller italiano, se ha inspirado en las primeras competiciones de motocicletas celebradas en Gra...</small>

            <hr>

            <div class="d-flex">

                <div class="mr-auto">

                    <small>Septiembre 01, 2018</small>

                </div>

                <a href="{{ url('detalle') }}" class="color-orange">LEER ARTÍCULO > </a>

            </div>

        </div>

    </div>

    <div class="row mt-5">

        <div class="col-12">

            <div class="text-center">

                <a href="{{ url('blog') }}" class="btn btn-custom-orange"><span class="px-4">VER TODOS LOS ARTÍCULOS</span></a>

            </div>

        </div>

    </div>

</div>



@stop