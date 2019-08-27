@extends('layout2')

@section('contenido')



<div class="mb-5 absoluta-det-banner">

    <div class="container ">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('home')}}">INICIO</a></li>

                <li class="breadcrumb-item"><a href="{{route('actitud')}}">ACTITUD ABSOLUTA</a></li>

                <li class="breadcrumb-item active" aria-current="page">ROGELIO LOPEZ</li>

            </ol>

        </nav>



        <div class="row lign-items-center">

            <div class="col-6">&nbsp;</div>

            <div class="col-6 text-right txt-instagram a">

                <h5>Piloto mexicano<br/>

                    triunfador en 26<br/>

                    ocasiones de<br/>

                    NASCAR México<br/>

                    Series.</h5>

            </div>

        </div>

    </div>

</div>



<div class="container">

    <div class="container mt-3 mb-5">

        <div class="row mt-3">

            <div class="col-md-4 mt-4 rog-border">

                <section>

                    <h4 class="text-center text-black-bold"> ROGELIO LÓPEZ </h4>

                    <p class="text-center"> <b>FECHA DE NACIMIENTO:</b> 29/07/1980<br/>

                        <b>LUGAR DE NACIMIENTO:</b> AGUASCALIENTES<br/>

                        <b>DEPORTE:</b> AUTOMOVILISMO </p>

                    <div class="row text-center ">

                        <ul class="list-unstyled icons-social">

                            <li class="list-inline-item"><a href="#"><img src="{{asset('assets/img/FB.png')}}" alt=""></a></li>

                            <li class="list-inline-item"><a href="#"><img src="{{asset('assets/img/instagram.png')}}" alt=""></a></li>

                            <li class="list-inline-item"><a href="#"><img src="{{asset('assets/img/tw.png')}}" alt=""></a></li>

                        </ul>

                    </div>

                </section>

            </div>

            <div class="col-md-8 mt-8 text-small">

                <section>

                    <p> Rogelio López es un piloto originario de Aguascalientes que ha consolidado una carrera llena de victorias, logrando ser

                        reconocido internacionalmente por su habilidad y pericia para el deporte de las banderas a cuadros. Rogelio actualmente se

                        encuentra compitiendo en NASCAR México Series.
                    </p>
                    <p>
                        Desde su debut, este piloto hidrocálido ha tenido 26 triunfos dentro de NASCAR México Series, además ha tenido oportunidad

                        de competir en series de Estados Unidos como en NASCAR Grand National Division, Busch East Series en donde ganó la carrera

                        que se llevó a cabo en el Music City Motorplex in Nashville, victoria que le dio el título de el primer mexicano en ganar en un

                        óvalo de la serie estadounidense. Además formó parte del Toyota All-Star Showdown, serie donde logró demostrar todo lo que

                        es capaz gracias a su actitud absoluta. </p>

                </section>

            </div>

        </div>

    </div>

</div>





<div class="container mb-5">

    <div class="row justify-content-center align-items-center actitud-brand-img">

        <div class="col-md-2">

            <a href="#"><img src="{{asset('assets/img/actitud/detail-logo-1.png')}}" alt=""></a>

        </div>

        <div class="col-md-2">

            <a href="#"><img src="{{asset('assets/img/actitud/detail-logo-2.png')}}" alt=""></a>

        </div>

        <div class="col-md-2">

            <a href="#"><img src="{{asset('assets/img/actitud/detail-logo-3.png')}}" alt=""></a>

        </div>

        <div class="col-md-2">

            <a href="#"><img src="{{asset('assets/img/actitud/detail-logo-4.png')}}" alt=""></a>

        </div>

        <div class="col-md-2">

            <a href="#"><img src="{{asset('assets/img/actitud/detail-logo-5.png')}}" alt=""></a>

        </div>

    </div>

</div>



<section class="bg-gray-absolud">

    <div class="container">

        <h2 class="text-body mt-3 mb-4">CALENDARIO DE EVENTOS</h2>

        <div class="row justify-content-center align-items-center">

            <div class="col-md-12 table-responsive">

                <table class="tbl-calendario table">

                    <tr>

                        <th class="col-md-5">EVENTO</th>

                        <th class="col-md-5">LUGAR</th>

                        <th class="col-md-2">FECHA</th>

                    </tr>

                    <tr>

                        <td>NASCAR MÉXICO SERIE</td>

                        <td>PACHUCA, CDMX</td>

                        <td>04 / 08 / 2018</td>

                    </tr>

                    <tr>

                        <td>NASCAR MÉXICO SERIE</td>

                        <td>PACHUCA, CDMX</td>

                        <td>04 / 08 / 2018</td>

                    </tr>

                    <tr>

                        <td>NASCAR MÉXICO SERIE</td>

                        <td>PACHUCA, CDMX</td>

                        <td>04 / 08 / 2018</td>

                    </tr>

                    <tr>

                        <td>NASCAR MÉXICO SERIE</td>

                        <td>PACHUCA, CDMX</td>

                        <td>04 / 08 / 2018</td>

                    </tr>

                </table>

            </div>

        </div>

    </div>

</section>



<section>

    <div class="container">

        <h2 class="text-body mt-3 mb-4">GALERÍA</h2>

    </div>

    <div class="container-fluid mt-3 mb-5 pl-0 pr-0 actitid-galeria">

        <div class="row">

            <div class="col-md-4"><a href="#"><img src="{{asset('assets/img/actitud/gallery-1.png')}}" alt=""></a></div>

            <div class="col-md-4"><a href="#"><img src="{{asset('assets/img/actitud/gallery-2.png')}}" alt=""></a></div>

            <div class="col-md-4"><a href="#"><img src="{{asset('assets/img/actitud/gallery-3.png')}}" alt=""></a></div>

        </div>

        <div class="row">

            <div class="col-md-4"><a href="#"><img src="{{asset('assets/img/actitud/gallery-4.png')}}" alt=""></a></div>

            <div class="col-md-4"><a href="#"><img src="{{asset('assets/img/actitud/gallery-5.png')}}" alt=""></a></div>

            <div class="col-md-4"><a href="#"><img src="{{asset('assets/img/actitud/gallery-6.png')}}" alt=""></a></div>

            </ul>

        </div>

    </div>

    <div class="col-12 btn-comprar mb-5">

        <a href="#">CARGAR MÁS</a>

    </div>

</section>


@stop