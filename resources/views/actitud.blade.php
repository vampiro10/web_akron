@extends('layout2')



@section('contenido')



<div class="bg-header-actitud">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="{{route('home')}}">INICIO</a></li>

            <li class="breadcrumb-item active" aria-current="page">ACTITUD ABSOLUTA</li>

            </ol>

        </nav>

        

        <div class="row lign-items-center">

        	<div class="col-6">&nbsp;</div>

            <div class="col-6 txt-instagram a">

            <h5>ACTITUD ABSOLUTA</h5>

            <p class="text-white">Akron es una empresa dedicada a crear los mejores productos para los clientes más exigentes,

por esta razón se rige bajo la filosofía de #ActitudAbsoluta, la cual representa el trabajo duro,

profesional, dedicado y en constante evolución. Akron cree que la capacidad y potencial, tanto

de las personas como de las empresas, no tiene límite y siempre apoyará la idea de que todo se

puede lograr con #ActitudAbsoluta.</p>

            </div>

        </div>

    </div>

    <div>

        <img class="img-fluid" src="{{asset('assets/img/gas-station/header-gas.png')}}" alt="">

    </div>

</div>  



<div id="actitud-abs">



<div class="row bg_0c4479 mt-0 mx-0 ">

    <div class="container bg_0c4479 mt-3 mb-5">

        <div class="row mt-4">

            <div class=" col-sm-12 col-md-12 col-12 "> <h4>EMBAJADORES #ACTITUDABSOLUTA</h4> </div>

        </div>

        <div class="row mt-3">

            <div class="col-md-3 mt-3">

                <img class="img-fluid" src="{{asset('assets/img/actitud/photo-1.png')}}" alt="">

                <div class="mt-3">

                    <h4>ERICK RUIZ</h4>

                    <p class="text-white">MOTOCROSS FREE STYLE</p>

                </div>

                <div>

                    <p class="text-white">Erick Ruiz es un joven temerario y virtuoso en el freestyle

motocross. Con 19 años de edad, ha logrado entrar a la

prestigiosa competencia de los Red Bull X-Fighters. Está

formando una carrera que se dirige a lo más alto del

deporte y, siempre encarando todos los retos con

#ActitudAbsoluta, busca poner el nombre de México tan

alto como él ha llegado mientras desafía a la gravedad

                    </p>

                </div>

                <div class="col-12 btn-comprar">

                    <a href="{{ url('actitud/erick_ruiz') }}">MÁS INFO</a>

              	</div>

            </div>

             

            <div class="col-md-3 mt-3">

                <img class="img-fluid" src="{{asset('assets/img/actitud/photo-2.png')}}" alt="">

                <div class="mt-3">

                    <h4>ROGELIO LÓPEZ</h4>

                    <p class="text-white">AUTOMOVILISMO</p>

                </div>

                <div>

                    <p class="text-white">Rogelio López es el piloto mexicano más influyente de los

últimos tiempos. Consolidando una carrera llena de

victorias en NASCAR México, logró 24 triunfos desde su

debut profesional y se posicionó como el número uno. En la

actualidad forma parte de la Super Copa Telcel, donde

buscará demostrar su #ActitudAbsoluta para ser el rival a

vencer en esa competencia.

                    </p>

                </div>

                <div class="col-12 btn-comprar">

                    <a href="{{ url('actitud/rogelio_lopez') }}">MÁS INFO</a>

              	</div>

            </div>



            <div class="col-md-3 mt-3">

                <img class="img-fluid" src="{{asset('assets/img/actitud/photo-3.png')}}" alt="">

                <div class="mt-3">

                    <h4>CARLOS ORTIZ</h4>

                    <p class="text-white">GOLF</p>

                </div>

                <div>

                    <p class="text-white">Carlos Ortiz es un golfista que se caracteriza por

pertenecer a la PGA, el circuito más prestigioso del

mundo, donde ha demostrado tener un futuro prometedor

para posicionarse en lo más alto del golf internacional.

Sin duda con su esfuerzo y #ActitudAbsoluta, este joven

talento mexicano se perfila a dejar su marca en la historia

del golf.</p>

                </div>

                <div class="col-12 btn-comprar">

                    <a href="{{ url('actitud/carlos_ortiz') }}">MÁS INFO</a>

              	</div>

            </div>



            <div class="col-md-3 mt-3">

                <img class="img-fluid" src="{{asset('assets/img/actitud/photo-4.png')}}" alt="">

                <div class="mt-3">

                    <h4>JAIME MUNGUÍA</h4>

                    <p class="text-white">BOX</p>

                </div>

                <div>

                    <p class="text-white">Jaime Munguía es un boxeador profesional mexicano, es el

nuevo campeón superwelter de la Organización Mundial de

Boxeo. Después de una destacada carrera amateur, en la

que fue medallista de oro en Olimpiada Nacional, Munguía

debutó en el boxeo profesional en julio de 2013 , a los 16

años de edad. #ActitudAbsoluta que AKRON representa.

                    </p>

                </div>

                <div class="col-12 btn-comprar">

                    <a href="{{ url('actitud/jaime_munguia') }}">MÁS INFO</a>

              	</div>

            </div>

        </div>

    </div>

</div>

</div>

      

@stop