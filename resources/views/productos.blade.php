@extends('layout2')

@section('contenido')

<section class="fondo-inferior heder_blue">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center txt-instagram">
          <h5>Productos</h5>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="row">
    <div class="col-md-3">
      <div class="col-md-12"><h3 class="text-dark">Productos</h3></div>
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
      <div class="col-md-12"><h3 class="text-dark">Filtro</h3></div>
      <div class="col-md-12"><h5 class="text-muted">Tipo de aceite</h5></div>
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
          <input type="checkbox" class="custom-control-input" id="Marino">
          <label class="custom-control-label" for="Marino">Superior</label>
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
      
      <div class="col-md-12"><h5 class="text-muted">Precio</h5></div>
      Filter by price interval: <b>€ 10</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b>€ 1000</b>

    </div>
    <div class="col-md-9">

    </div>
  </div>
</section>
@stop