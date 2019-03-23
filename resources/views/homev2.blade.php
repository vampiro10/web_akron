@extends('layout2')

@section('contenido')

  <!-- Hero Section-->
  <section class="hero hero-home no-padding">
    <!-- Hero Slider-->
    <div class="">
      <div class="banner-home" class="item d-flex align-items-center has-pattern">
        <div class="caja-txt-home">
          <div class="container">
            <div class="col-lg-12 text-center">
              <h2>TU MUNDO EN MOVIMIENTO</h2>
            </div>
          </div>
        </div>
        <img src="assets/img/Home_banner_superior.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="blog gray-bg">
    <div class="container">
      <div class="row">
        <!-- post-->
        <div class="col-lg-6">
          <div class="post post-gray d-flex align-items-center flex-md-row flex-column caja-img-link">
            <img src="assets/img/img-1.jpg" alt="...">
            <!--<div class="info"> 
              <h4 class="h5"> <a href="post.html">Newest photo apps          </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
              <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
            </div>-->
          </div>
        </div>
        <!-- /end post-->
        <!-- post-->
        <div class="col-lg-6">
          <div class="post post-gray d-flex align-items-center flex-md-row flex-column caja-img-link">
            <img src="assets/img/img-2.jpg" alt="...">
            <!--<div class="info"> 
              <h4 class="h5"> <a href="post.html">Best books about Photography</a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
              <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
            </div>-->
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="post post-gray d-flex align-items-center flex-md-row flex-column caja-img-link">
                <img src="assets/img/img-3.jpg" alt="...">
                <!--<div class="info"> 
                  <h4 class="h5"> <a href="post.html">Best books about Photography</a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                  <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>-->
              </div>
          </div>
          <div class="col-lg-6">
              <div class="post post-gray d-flex align-items-center flex-md-row flex-column caja-img-link">
                <img src="assets/img/img-4.jpg" alt="...">
                <!--<div class="info"> 
                  <h4 class="h5"> <a href="post.html">Best books about Photography</a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                  <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                </div>-->
              </div>
          </div>
        </div>
        </div>
        <!-- /end post-->
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
      <h5 class="txt-produ-d text-body">PRODUCTOS NUEVOS</h5>
        <ul id="produ-nuevo">
            <li>
              <div>
                <img src="assets/img/img-akron.jpg" />
                <div class="caja-txt">
                  <h5>AKRON EURO TTTDIESEL</h5>
                  <p>- SINTÉTICO</p>
                  <p>- ALTO DESEMPEÑO</p>
                  <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
                </div>
                <div class="col-12 btn-comprar">
                    <a href="">COMPRAR</a>
                </div>
              </div>
              
            </li>
            <li>
              <div>
                <img src="assets/img/img-akron.jpg" />
                <div class="caja-txt">
                  <h5>AKRON EURO TTTDIESEL</h5>
                  <p>- SINTÉTICO</p>
                  <p>- ALTO DESEMPEÑO</p>
                  <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
                </div>
                <div class="col-12 btn-comprar">
                    <a href="">COMPRAR</a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <img src="assets/img/img-akron.jpg" />
                <div class="caja-txt">
                  <h5>AKRON EURO TTTDIESEL</h5>
                  <p>- SINTÉTICO</p>
                  <p>- ALTO DESEMPEÑO</p>
                  <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
                </div>
                <div class="col-12 btn-comprar">
                    <a href="">COMPRAR</a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <img src="assets/img/img-akron.jpg" />
                <div class="caja-txt">
                  <h5>AKRON EURO TTTDIESEL</h5>
                  <p>- SINTÉTICO</p>
                  <p>- ALTO DESEMPEÑO</p>
                  <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
                </div>
                <div class="col-12 btn-comprar">
                    <a href="">COMPRAR</a>
                </div>
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

  <section class="hero hero-home no-padding fondo-akron">
    <!-- Hero Slider-->
    <div id="banner_akron">
      <div class="banner-akron" class="item d-flex align-items-center has-pattern">

        <div class="caja-txt-home-seg">
          <div class="row">
            <div class="col-lg-12">
              <h6>AUTOMÓVILES Y CAMIONETAS</h6>
              <h2>AKRON <span>GREENROAD</span></h2>
              <p>
                El primer aditivo ecológico para gasolina y diesel, Reduce emisiones contaminantes y ahorra hasta un 10% de combustible.
              </p>
              <a class="" href="">CONOCER MÁS +</a>
            </div>
          </div>
        </div>

        <div class="caja-campos-home">
          <div class="row">
            <div class="col-md-12">
              <h5>ENCUENTRA EL ACEITE ÓPTIMO PARA TU AUTO</h5>
            </div>
            <div class="col-md-4 text-left">
              <label>MARCA</label>
              <select class="form-control">
                  <option>Default select</option>
              </select>
            </div>
            <div class="col-md-4 text-left">
              <label>MODELO</label>
              <select class="form-control">
                  <option>Default select</option>
              </select>
            </div>
            <div class="col-md-4 text-left">
              <label>KILOMETRAJE</label>
              <select class="form-control">
                  <option>Default select</option>
              </select>
            </div>
            <div class="col-md-12 text-center">
                <input type="submit" name="" value="BUSCAR">
            </div>
          </div>
        </div>

        <img src="assets/img/home_banner-central.png" alt="">
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
      <h5 class="txt-produ-d">PRODUCTOS DESTACADOS</h5>
        <ul id="produ-destacados">
            <li>
              <img src="assets/img/img-akron.jpg" />
              <div class="caja-txt">
                <h5>AKRON EURO TTTDIESEL</h5>
                <p>- SINTÉTICO</p>
                <p>- ALTO DESEMPEÑO</p>
                <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
              </div>
              <div class="col-12 btn-comprar">
                      <a href="">COMPRAR</a>
                  </div>
            </li>
            <li>
              <img src="assets/img/img-akron.jpg" />
              <div class="caja-txt">
                <h5>AKRON EURO TTTDIESEL</h5>
                <p>- SINTÉTICO</p>
                <p>- ALTO DESEMPEÑO</p>
                <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
              </div>
              <div class="col-12 btn-comprar">
                      <a href="">COMPRAR</a>
                  </div>
            </li>
            <li>
              <img src="assets/img/img-akron.jpg" />
              <div class="caja-txt">
                <h5>AKRON EURO TTTDIESEL</h5>
                <p>- SINTÉTICO</p>
                <p>- ALTO DESEMPEÑO</p>
                <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
              </div>
              <div class="col-12 btn-comprar">
                      <a href="">COMPRAR</a>
                  </div>
            </li>
            <li>
              <img src="assets/img/img-akron.jpg" />
              <div class="caja-txt">
                <h5>AKRON EURO TTTDIESEL</h5>
                <p>- SINTÉTICO</p>
                <p>- ALTO DESEMPEÑO</p>
                <p>- HASTA 10,000 KILOMETROS ENTRE CAMBIOS</p>
              </div>
              <div class="col-12 btn-comprar">
                      <a href="">COMPRAR</a>
                  </div>
            </li>                                                 
        </ul>    
      </div>
    </div>
    <script type="text/javascript">

      $(window).load(function() {
          $("#produ-destacados").flexisel({
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

  <section class="fondo-inferior">
    <div class="container">
      <div class="row">
      <div class="col-12 text-center txt-instagram">
        <img src="assets/img/icon-instagram.png" alt="">
        <h5>INSTAGRAM</h5>
      </div>
        <ul id="instagram">
            <li>
              <img src="assets/img/insta-1.jpg" />
            </li>
            <li>
              <img src="assets/img/insta-2.jpg" />
            </li>
            <li>
              <img src="assets/img/insta-3.jpg" />
            </li>
            <li>
              <img src="assets/img/insta-4.jpg" />
            </li>
            <li>
              <img src="assets/img/insta-2.jpg" />
            </li>                                                 
        </ul>    
      </div>
    </div>
    <script type="text/javascript">

      $(window).load(function() {
          $("#instagram").flexisel({
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