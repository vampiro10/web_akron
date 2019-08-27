@extends('layout2')



@section('contenido')

<div class="header-distribuidor text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb" class="heder-breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>

                <li class="breadcrumb-item active" aria-current="page">Contacto</li>

            </ol>

        </nav>

            

        <div class="row align-items-center heder-title">

            <div class="col-12 text-center txt-instagram txt-header-d">

                <h5>CONTACTO</h5>

            </div>

        </div>

    </div>

    <div class="header-svg header-svg-distribuidor">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 22" preserveAspectRatio="none">

            <polygon class="fill_black" points="0,5 50,20 0,10 0,5"/>

            <polygon class="fill_black" points="100,5 50,20 100,10 100,5"/>

            <polygon class="fill_white" points="0,10 55,21 0,21 0,10"/>

            <polygon class="fill_white" points="100,10 45,21 100,21 100,10"/>

        </svg>

    </div>

</div>

<div class="main">

    <div class="container">

        <div class="row">

            <div class="col-md-10 dist-mensaje">

                <h2 class="txt-contacto">¡CONTÁCTANOS! CON GUSTO TE ATENDEREMOS</h2>

            </div>

        </div>

    </div>

</div>

<div class="form-dist">

    <div class="container cont-dist-ta">

        <div class="row">
            <div class="col-md-12 cont-dist">
                <label class="dist-label">ASUNTO*</label>

                <label class="dist-slc-cont">

                    <select class="dist-slc">

                        <option value="">Buscar...</option>

                        <option value="">Option 1</option>

                        <option value="">Option 2</option>

                        <option value="">Option 3</option>

                    </select>

                </label>
            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">NOMBRE*</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">TELÉFONO</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">EMPRESA</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">CORREO ELECTRÓNICO*</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">ESTADO</label>

                <label class="dist-slc-cont">

                    <select class="dist-slc">

                        <option value="">Buscar...</option>

                        <option value="">Option 1</option>

                        <option value="">Option 2</option>

                        <option value="">Option 3</option>

                    </select>

                </label>

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">CIUDAD</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-12 cont-dist">

                <label class="dist-label">MENSAJE</label>

                <textarea class="dist-form dist-ta"></textarea>

            </div>

            <div class="col-md-6 d-flex justify-content-start form-footer">

            </div>

            <div class="col-md-6 d-flex justify-content-end form-footer">

                <button class="dist-btn">Enviar</button>

            </div>

        </div>

    </div>

</div>

<div class="distribuidor-banner">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-4 db-titulo">

                <h3>OFICINAS CORPORATIVAS</h3>

            </div>
            <div class="col-md-4 db-titulo">

                <p class="db-titulo-mensaje">Av. 8 de Julio # 2270 Zona Industrial<br />44940 Guadalajara, Jal. México.</p>

            </div>
            <div class="col-md-4 db-titulo">

                <p class="db-titulo-mensaje">Tel: +52 (33) 3134-0500<br />Fax: +52 (33) 3134-0501</p>

            </div>

        </div>

    </div>

</div>

<div class="row mx-0">

    <div class="col-md-12 col-sm-12 col-xl-12 px-0">

        <img class="img-fluid" src="{{asset('assets/img/services/map-zona.png')}}" alt="">

    </div> 

</div>

<div class="container text-uppercase mt-5 mb-5">

    <div class="row">

    <div class="col-md-12 mb-5">
        <h2 class="txt-contacto">PLANTA Y OFICINAS</h2>
    </div>

    <div class="col-md-4">

        

            <h5>OFICINAS MONTERREY</h5>

            <p class="font-weight-light">
                Primera Avenida No. 435, entre distrito B-6 y Enrique C. Livas<br>
                Col. Cumbres 1era. Sección 64610<br>
                Monterrey, N,L.<br>
                Tel. 81 8345-0732
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>OFICINAS CULIACAN</h5>

            <p class="font-weight-light">
                Ignacio López Rayon #2300 Norte<br>
                Fracc. Parque Residencial Alamedas Proyecto Tres Ríos<br>
                80030 Culiacán, Sinaloa (667)146-6440 y (667)146-64-39<br>
                Tel. 81 8345-0732
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>OFICINAS VERACRUZ</h5>

            <p class="font-weight-light">
                Av.Ruiz Cortines #2750 Cp. 94299, Fracc. Costa de Oro<br>
                C.P. 94299 Boca del Rio, Veracruz<br>
                Tel. (229)935-6176 y (229)927-2108
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>PLANTA LAGOS DE MORENO</h5>

            <p class="font-weight-light">
                Carretera Lagos-La Unión Km. 3.5<br>
                Col. San Agustín<br>
                C.P. 47480 Lagos de Moreno, Jal.<br>
                Tel. (474)742-5511<br>
                Fax. (474)742-5895
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>CENTRO DE DISTRIBUCIÓN Y PLANTA TULTITLÁN</h5>

            <p class="font-weight-light">
                Vía José López Portillo No. 10<br>
                Col. San Francisco Chilpan<br>
                C.P. 54900 Tultitlán, Edo de México.<br>
                Tel. Planta: (55)5884-6060<br>
                Tel. Ventas: (55)5864-3139
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>CENTRO DE DISTRIBUCIÓN TIJUANA</h5>

            <p class="font-weight-light">
                Andador del Rey No. 20051 Plataforma 7B<br>
                Parque Industrial Girasol<br>
                Col. Rancho El Aguila<br>
                C.P. 22215 Tijuana, B.C.<br>
                Tel. (664)680-5569 Y 680-4620
            </p>

    </div>    

    <div class="col-md-4">

        

            <h5>CENTRO DE DISTRIBUCIÓN VILLAHERMOSA</h5>

            <p class="font-weight-light">
                Carr. Villahermosa-Cárdenas Km. 0.5,<br>
                Bodega 3B, Ranchería Anacleto Canabal.<br>
                C.P. 86860 Villahermosa, Tab.<br>
                Tel. (993)339-1580
            </p>

    </div>

    <div class="col-md-4">

            <h5>OFICINAS MICHOACAN</h5>

            <p class="font-weight-light">
                Av.Rector Hidalgo No. 120<br>
                Entre Lucio Blanco y Tapia<br>
                Col. Lázaro Cárdenas, C.P. 58040<br>
                Tel. (0175)3537-3033
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>C.D. MEXICALI</h5>

            <p class="font-weight-light">
                Laguna Viesca #1000-3<br>
                Col. Hacienda del Real<br>
                C.P. 21353 Mexicali Baja California<br>
                Tel. (664)680-5569 y 680-4620
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>C.D. IZTACALCO</h5>

            <p class="font-weight-light">
                Oriente 233 no. 181<br>
                Col. Agrícola Oriental C.P. 08500<br>
                Tel. 0155 57586063 / 015557586083
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>C.D. IZTACALCO</h5>

            <p class="font-weight-light">
                Oriente 233 no. 181<br>
                Col. Agrícola Oriental C.P. 08500<br>
                Tel. 0155 57586063 / 015557586083
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>C.D. CANCÚN</h5>

            <p class="font-weight-light">
                Carretera Cancún Aeropuerto Km 9<br>
                Mza 13 Lote 1-A Bodega 17<br>
                Col. Súper Manzana 309 (Parque Industrial GAIA)<br>
                C.P. 77560 Cancún, Quintana Roo.<br>
                Tel. 01 998 2170018
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>OFICINA VERACRUZ, VER.</h5>

            <p class="font-weight-light">
                Boulevard Adolfo Ruiz Cortínez #2750<br>
                Col. Fracc. Costa de Oro<br>
                Boca del Río, Veracruz, C.P. 94299<br>
                01 229 937 93 21 12299356176<br>
                ENLACE 12000
            </p>

    </div>

    </div>

        



</div>

@stop