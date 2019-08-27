@extends('layout2')



@section('contenido')



<div id="index_products">



<div class="header-industria header-industria-productos text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb position-relative">

                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>

                <li class="breadcrumb-item"><a href="{{route('industrial')}}">Industria</a></li>

                <li class="breadcrumb-item"><a href="{{route('industrial')}}">Productos</a></li>

                <li class="breadcrumb-item active" aria-current="page">Transporte</li>

            </ol>

        </nav>



      <div class="row align-items-center header-industria-title position-relative pt-4">

          <div class="col-12 text-center txt-instagram txt-header-d pt-5">

              <h5>TRANSPORTE</h5>

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
        
        <div class="col-md-12 mt-5"><h3 class="text-body font-weight-bold">TIPO DE PRODUCTO</h3></div>

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Automoviles">

            <label class="custom-control-label" for="Automoviles">TODOS</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Motocicletas">

            <label class="custom-control-label" for="Motocicletas">MULTIGRADOS</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Marino">

            <label class="custom-control-label" for="Marino">MONOGRADOS</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Carga">

            <label class="custom-control-label" for="Carga">DIFERENCIAL</label>

          </div>

        </div>

  

        <div class="col-md-12">

            <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Grasas">

            <label class="custom-control-label" for="Grasas">TRANSMISIÓN</label>

          </div>

        </div>

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Automoviles">

            <label class="custom-control-label" for="Automoviles">HIDRÁULICOS</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Motocicletas">

            <label class="custom-control-label" for="Motocicletas">GRASA</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Marino">

            <label class="custom-control-label" for="Marino">CAJA REFRIJERANTE</label>

          </div>

        </div>

  

        <div class="col-md-12">

          <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Carga">

            <label class="custom-control-label" for="Carga">ADITIVOS ESPECIALES</label>

          </div>

        </div>

  

        <div class="col-md-12">

            <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="Grasas">

            <label class="custom-control-label" for="Grasas">SINTÉTICOS</label>

          </div>

        </div>

        <div class="col-md-12">

        <hr>

        </div>

      </div>

      <div id="list-products" class="col-md-9">

        <div class="row align-items-center justify-content-between border-bottom border-dark">

          <div class="col-md-2"> 6 Productos </div>

          <div class="col-md-3 justify-content-end d-flex pr-0">

              <form class="form-inline">

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">ORDENAR POR </label>

                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">

                  <option selected>Todos</option>

                  <option value="1">One</option>

                  <option value="2">Two</option>

                  <option value="3">Three</option>

                </select>

              </form>

          </div>

        </div>



        <div class="row txt-productos">

            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>
            <div class="col-md-4 mt-4">

              <img class="img-fluid-product" src="{{ asset('/assets/img/producto_detalle.jpg') }}" alt="">

              <h3 class="text-body font-weight-bold">AKRON EURO DIESEL</h3>

              <p>- sintetico <br> - Alto desempeño <br> - Hasta 10,000 kilometros entre cambios</p>

              <div class="row justify-content-center"><a class="btn btn-danger" href="{{ url('industrial/detalle') }}" role="button">Ver detalle</a></div>

              <br>

            </div>

        </div>



        <div class="row align-items-center justify-content-between border-top border-dark ">

          <div class="col-md-2">

              6 Productos

          </div>

          <div class="col-md-6 pr-0">

            <ul class="pagination" role="navigation">
        
              <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                  <span class="page-link" aria-hidden="true">‹</span>
              </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
              <li class="page-item"><a class="page-link" href="http://akron.mindgroup.com.mx/akron/public/productos?page=2">2</a></li>
              <li class="page-item"><a class="page-link" href="http://akron.mindgroup.com.mx/akron/public/productos?page=3">3</a></li>
              <li class="page-item"><a class="page-link" href="http://akron.mindgroup.com.mx/akron/public/productos?page=4">4</a></li>
              <li class="page-item">
                  <a class="page-link" href="http://akron.mindgroup.com.mx/akron/public/productos?page=2" rel="next" aria-label="Next »">›</a>
              </li>
            </ul>

          </div>

          

        </div>



      </div>

    </div>

  </section>

</div>

</div>





@stop