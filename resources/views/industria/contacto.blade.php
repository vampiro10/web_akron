@extends('layout2')



@section('contenido')

<div class="header-distribuidor text-uppercase">

    <div class="container">

        <nav aria-label="breadcrumb" class="heder-breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('home')}}">Industria</a></li>
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

                <label class="dist-label">CORREO ELECTRÓNICO*</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">EMPRESA</label>

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

                <label class="dist-label">TELÉFONO</label>

                <input type="text" class="dist-form">

            </div>

            <div class="col-md-4 cont-dist">

                <label class="dist-label">PAÍS</label>

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

<div class="container text-uppercase mt-5 mb-5">

    <div class="row">

    <div class="col-md-4">

        

            <h5>OFICINAS CORPORATIVAS</h5>

            <p class="font-weight-light">
                Av. 8 de julio 2270<br>
                Zona Industrial 44940<br>
                Guadalajara, Jal.<br>
                Tel. +52(33) 3134-0500
                Fax: +52(33) 3134-0501
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>OFICINAS CORPORATIVAS</h5>

            <p class="font-weight-light">
                Primera Avenida 435<br>
                entre distrito B-6 y Enrique C. Livas<br>
                Col. Cumbres 1era. Sección. 64610<br>
                Monterrey, N.L.<br>
                Tel. +52(81)8345-0732
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>OFICINAS CULIACÁN</h5>

            <p class="font-weight-light">
                Ignacio López Rayon 2300 Norte<br>
                Fracc. Parque Residencial Alamedas<br>
                Proyecto Tres Ríos 80030<br>
                Culiacán, Sin.<br>
                Tels. +52(667) 146-6440<br>
                +52 (667)146-6439
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>OFICINAS VERACRUZ</h5>

            <p class="font-weight-light">
                Av. La Fragua 1114-B<br>
                Fracc. Moderno C.P. 91918<br>
                Veracruz, Ver.<br>
                Tel. +52(229)937-9321
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>PLANTA LAGOS DE MORENO</h5>

            <p class="font-weight-light">
                Carretera Lagos-La Unión Km. 3.5<br>
                Col. San Agustín C.P. 47480<br>
                Lagos de Moreno, jal.<br>
                Tel. +52(474) 742-511<br>
                Fax: +52(474) 742-5895 
            </p>

    </div>

    <div class="col-md-4">

        

            <h5>CENTRO DE DISTRIBUCIÓN Y PLANTA TULTITLÁN</h5>

            <p class="font-weight-light">
                Vía José López Portillo No. 10<br>
                Col. San Francisco Chilpan<br>
                C.P. 54900 Tultitlán, Edo. de México<br>
                Tel. Planta: +52(55) 5884-6060<br>
                Tel. Ventas: +52(55) 5864-3139 
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

    </div>

        



</div>

@stop