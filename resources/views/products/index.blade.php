@extends('layout2')

@section('contenido')

<div class="header-product">
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
    {{-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="500" viewBox="0 0 100 100">
      <polyline points="0,40 40,100 70,10 100,100 120,40 130,70" fill="none" stroke-width="1" stroke="black" stroke-linejoin="mitter" />
    </svg> --}}
  
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50" preserveAspectRatio="none">
      <polygon fill="black" points="100,5 50,20 100,10 100,5"/>
    </svg> --}}
  </div>

</div>

<div class="container text-uppercase mt-5">
  <section>
    <div class="row">
      <div class="col-md-3">
        <div class="col-md-12"><h3 class="text-body font-weight-bold">Productos</h3></div>
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
        
        <div class="col-md-12">
          <h5 class="text-muted">Precio</h5>
        </div>
        <div class="col-md-12">
            
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-2 col-sm-2 col-3 "><b>$ 10</b></div>  
              <div class="col-lg-4 col-md-2 col-sm-2 col-3 "> <b class="float-right">$ 1000</b></div>
            </div> 
            <div class="col-md-12 "><input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> </div> 
        </div>
      </div>
      <div class="col-md-9">
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
            <div class="col-md-4 mt-4">
              <img class="img-fluid " src="{{asset($product->img)}}" alt="">
              <h3 class="text-body font-weight-bold">{{$product->nombre}}</h3>
              <h4 class="text-body font-weight-normal"> $ {{$product->precio}} MX</h4>
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
          <div class="col-md-6">

            {{$products->render()}}

          </div>
          
        </div>
      </div>
    </div>
  </section>
</div>

@stop