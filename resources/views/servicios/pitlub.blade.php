@extends('layout2')

@section('contenido')

<div class="mb-5 header-img-akron">
    <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">INICIO</a></li>
            <li class="breadcrumb-item"><a href="{{route('servicios')}}">SERVICIOS</a></li>
            <li class="breadcrumb-item active" aria-current="page">PITLUB </li>
            </ol>
        </nav>
        
        <div class="row lign-items-center">
            <div class="col-12 text-center txt-instagram a">
            <h5>PITLUB </h5>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <img class="img-fluid" src="{{asset('assets/img/header/header_responsive.png')}}" alt="header_responsive">
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <img class="img-fluid" src="{{asset('assets/img/services/zona-akron.png')}}" alt="zona">
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <p class="font-weight-light text-center"> Cuando acudes a Zona Akron un técnico especializado te podrá indicar de una manera clara si tu auto necesita del cambio de algun fluido. Siempre te quearás conforme con el diagnóstico y servicio para tu automóvil. Los cambios de fluidos en Zona Akron se realizan por medio de dispositivos que extraen los fluidos desde la parte superior. No existe necesidad de elevar el auto para hacer drenes y se evitara la generación de derrames. Actualmente existen zonas Akron fijas y zonas Akron móviles, donde te acercamos el servicio por medio de nuestros socios comerciales.</p>  
        </div>
    </div>
    
</div>
<section class="bg-estaciones">
    <div class="container">
        <div class="row justify-content-center align-items-center" >
            <div class="col-md-6 ">
                    <form class="form-inline justify-content-end">
                    <label class="my-1 mr-2" for="estado">ESTADO : </label>
                    <select class="custom-select my-1 mr-sm-2" id="estado">
                        <option selected>Todos</option>
                        @foreach ($estados as $estado )
                        <option value="{{$estado->id}}">{{$estado->nom_ent}}</option>
                        @endforeach
                    </select>
                
                
                </form> 
            </div>
            <div class="col-md-6">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="ciudad">CIUDAD : </label>
                    <select class="custom-select my-1 mr-sm-2" id="ciudad">
                        <option selected>Todos</option>
                        @foreach ($ciudades as $ciudad )
                        <option value="{{$ciudad->id}}">{{$ciudad->nom_mun}}</option>
                        @endforeach
                    </select>
                </form> 
            </div>
        </div>
    </div>
</section>

<div class="row mx-0">
    <div class="col-md-12 col-sm-12 col-xl-12 px-0">
        <img class="img-fluid" src="{{asset('assets/img/services/map-zona.png')}}" alt="">
    </div> 
</div>

<div class="container text-uppercase mt-5">
    <div class="row">
    <div class="col-md-3">
        
            <h5>otto</h5>
            <p class="font-weight-light">blvad. tecnologico no. 1220, villas las palmas, aguascalientes, aguascalientes</p>
    </div>
    <div class="col-md-3">
        
            <h5>gashop san agustin</h5>
            <p class="font-weight-light">c. carretera tijuana-rosarito no. 9311-1b, francisco zarco, tijuana, baja california</p>
    </div>
    <div class="col-md-3">
        
            <h5>sanba</h5>
            <p class="font-weight-light">Carretera Al Sur Es. Acceso Al Parque Industrial S/N , Zona Industrial, La Paz, Baja California Sur</p>
    </div>
    <div class="col-md-3">
        
            <h5>CUATRO CAMINOS</h5>
            <p class="font-weight-light">Km.13.5 Carr. Panamericana S/N , Lomas de Puente Alto, Juárez, Chihuahua</p>
    </div>
    <div class="col-md-3">
        
            <h5>MURPA TORREÓN</h5>
            <p class="font-weight-light">Boulevard Revolución No. 800 , Fraccionamiento Primitivo (Centro), Torreón, Coahuila</p>
    </div>
    <div class="col-md-3">
        
            <h5>SANTA FE MULTIGAS</h5>
            <p class="font-weight-light">Ampliación Boulevard Republica No. 1922 , Tecnológico, Piedras Negras, Coahuila</p>
    </div>
    <div class="col-md-3">
        
            <h5>SAN COSME</h5>
            <p class="font-weight-light">Rivera De San Cosme No. 114 , San Rafael, Cuauhtémoc, Distrito Federal</p>
    </div>
    <div class="col-md-3">
        
            <h5>COMBUSA</h5>
            <p class="font-weight-light">Av. Cuitláhuac No. 131 , Defensores de la Republica, Gustavo A. Madero, Distrito Federal</p>
    </div>

    <div class="col-md-3">
        
            <h5>ESTACION 51</h5>
            <p class="font-weight-light">Calzada Adolfo Lopez Mateos No. 2 , Benito Juárez, Gustavo A. Madero, Distrito Federal</p>
    </div>
    <div class="col-md-3">
        
            <h5>MURPA DURANGO</h5>
            <p class="font-weight-light">Juárez No. 377 , Centro, Gomez Palacio, Durango</p>
    </div>

    <div class="col-md-3">
        
            <h5>TEPETLIXPA</h5>
            <p class="font-weight-light">Av. 20 De Noviembre No. 1 , ., Tepetlixpa, Estado de México</p>
    </div>
    <div class="col-md-3">
        
            <h5>SUAGUE</h5>
            <p class="font-weight-light">Carretera México-Tulancingo tramo venta de Carpio Km 29.11 , ., San Martín de las Pirámides, Estado de México</p>
    </div>

    <div class="col-md-3">
        
            <h5>GASOSERVICIOS PREMIER</h5>
            <p class="font-weight-light">Av. Lázaro Cárdenas No.. 615 , Zona Centro, Durango, Guanajuato</p>
    </div>

    <div class="col-md-3">
        
            <h5>GASYDIESEL</h5>
            <p class="font-weight-light">Blvd. Restauradores No. 102 Esq. Restauradores , Fracción del predio Santa Lucia, León, Guanajuato</p>
    </div>
    <div class="col-md-3">
        
            <h5>PRACOP</h5>
            <p class="font-weight-light">Jesús García No. 1100 , La Sagrada Familia, Guadalajara, Jalisco</p>
    </div>

    <div class="col-md-3">
        
            <h5>SERVIGASO</h5>
            <p class="font-weight-light">Av. Francisco Medina Ascencio No. 2755 , Zona Hotelera Norte, Puerto Vallarta, Jalisco</p>
    </div>

    <div class="col-md-3">
        
            <h5>INVERSERVICIOS</h5>
            <p class="font-weight-light">Periférico Sur No.8300 , Santa María Tequepexpan, San Pedro Tlaquepaque, Jalisco</p>
    </div>
    

    <div class="col-md-3">
        
            <h5>COMBU EXPRESS</h5>
            <p class="font-weight-light">Jazmín y Carretera Manzanillo , Centro, Zapotlán El Grande, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>GASOPOLIS</h5>
            <p class="font-weight-light">Carretera Barra De Navidad No. 5000 , ., Acatlán de Juárez, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>COLSUR TLAQUEPAQUE</h5>
            <p class="font-weight-light">Monte Carmelo S/N Esq. Prolong. Colón , Santa María Tequepexpan, San Pedro Tlaquepaque, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>LOLITA</h5>
            <p class="font-weight-light">Av. Solidaridad Iberoamericana No. 7883 , Las Pintitas, El Salto, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>SERVICIO OBREGÓN</h5>
            <p class="font-weight-light">Ca Álvaro Obregón No. 1465 , Medrano, Guadalajara, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>AUTLÁN</h5>
            <p class="font-weight-light">Matamoros No. 3553 , Autlán, Autlán, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>TRANSITO</h5>
            <p class="font-weight-light">Av. Circunvalación División del Norte No. 8 , Jardines Alcalde, Guadalajara, Jalisco</p>
    </div>
    
    <div class="col-md-3">
            <h5>PATRYBACH</h5>
            <p class="font-weight-light">Av. Patria No. 209 , Prados de Guadalupe, Zapopan, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>CONSTITUCIÓN</h5>
            <p class="font-weight-light">Paulino Navarro No. 748 , De los Maestros, Zapopan, Jalisco</p>
    </div>
    <div class="col-md-3">
        
            <h5>ORANDINO</h5>
            <p class="font-weight-light">Josefa Ortiz de Domínguez No. 69 , La Enramada, Jaconá, Michoacán</p>
    </div>
    <div class="col-md-3">
        
            <h5>FRENTE SERVICIO</h5>
            <p class="font-weight-light">Boulevard Industrial # 4140, San Rafael, Uruapan, Michoacán</p>
    </div>
    <div class="col-md-3">
        
            <h5>SUPER SERVICIO GASOLINERO DEL SUR</h5>
            <p class="font-weight-light">Libramiento Sur 1500, Centro, Tacambaro, Michoacán</p>
    </div>
    <div class="col-md-3">
        
            <h5>OCTANO BUCERIAS</h5>
            <p class="font-weight-light">KM.143.5 CARR. TEPIC-PUERTO VALLARTA NO. 300, , Bahia de banderas, Nayarit</p>
    </div>
    <div class="col-md-3">
        
            <h5>HUINALA</h5>
            <p class="font-weight-light">Av. Rodrigo Gomez No. S/N , Valle Morelos, Monterrey, Nuevo León</p>
    </div>
    
    <div class="col-md-3">
        
            <h5>PETRUM EL PARQUE</h5>
            <p class="font-weight-light">Av. Isidoro Sepúlveda No. 500 , Parque Industrial J.M., Apodaca, Nuevo León</p>
    </div>
    <div class="col-md-3">
        
            <h5></h5>
            <p class="font-weight-light"></p>
    </div>
    <div class="col-md-3">
        
            <h5></h5>
            <p class="font-weight-light"></p>
    </div>

    </div>
    
</div>


@stop