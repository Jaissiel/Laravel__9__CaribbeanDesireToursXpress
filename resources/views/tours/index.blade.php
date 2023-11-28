<?php
/*
for($col = 'R'; $col != 'AD'; $col++) {
    echo $col.' ';
}

    for ($X=0; $X <= 10; $X++)
    {
        echo "sumando:  $X";
    }*/
?>
@extends('layouts.layout')
@section('content')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:0px">
    <div class="MOVIMIENTO_IZQ_CRECIENDO">
        <p>@lang('main.mini-banner1-01')</p>
    </div>
</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

<div id="articles02" class="container-fluid header font__Griffy P_center" style="margin-top:5px">

    <div class="row" >
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Caribe Mexicano Desarrollo Web Paginas www.jpg') }}" alt="Deseo Caribe Desarrollo Paginas WEB" style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('main.body-item1')</h4>
                    <p class="card-text"> @lang('main.body-item2')</p>
                    <a href="Como-Hacer-una-pagina-Web-Importante-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>    
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Dia  de  Muertos  deseocaribe.com.jpg') }}" alt="Día de muertos en México .ORIGEN." style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('main.body-item3')</h4>
                    <p class="card-text"> @lang('main.body-item4')</p>
                    <a href="Dia-de-Muertos-Verdadero-Origen-Mexico-Anahuac-Toltecayotl-Mictlan" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Zen-Emprendedor-Ivan-Deseocaribe.JPG') }}" alt="ZEN Emprendedor." style="img-fluid">  
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('main.body-item5')</h4>
                    <p class="card-text"> @lang('main.body-item6')</p>
                    <a href="Zen-Emprendedor-Negocios-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>
    </div>








    <div class="row" style="margin-top:5px">
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top " src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Manglar_Puerto_Morelos.jpg') }}"  alt="Deseos Caribe La importancia de proteger a los manglares." style="width:100%">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('main.body-item7')</h4>
                    <p class="card-text"> @lang('main.body-item8')</p>
                    <a href="Guardianes-Manglar-Proteger-Selva-Mar-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Deseo  Caribe Puerto Morelos.jpg') }}" alt="10 Razones para visitar puerto Morelos" style="width:100%">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title ">@lang('main.body-item9')</h4>
                    <p class="card-text "> @lang('main.body-item10')</p>
                    <a href="Diez-Razones-Visitar-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>    
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/No protector solar deseocaribe.com .jpg') }}" alt="No al protector solar dentro del mar." style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('main.body-item11')</h4>
                    <p class="card-text"> @lang('main.body-item12')</p>
                    <a href="Solar-Arrecifes-No-bloqueador-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>
    </div>

</div>    

<div id="map33" class="container-fluid" style="margin-top:5px">
    <iframe width="100%" height="450" src="https://embed.windy.com/embed2.html?lat=17.895&lon=-81.475&detailLat=19.420&detailLon=-87.138&width=650&height=450&zoom=4&level=surface&overlay=rain&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
    
</div>

<div id="articles02" class="container-fluid header font__Griffy P_center" style="margin-top:5px">
    <div class="row" style="margin-top:5px">
        <div class="col-sm-3" >
            <div class="card" >
                    <img class="card-img-top " src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Deseo Caribe Mexicano.jpg') }}"  alt="Tours, Agencia de viajes y Magazine de la Riviera Maya." style="width:100%">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('main.body-item13')</h4>
                    <p class="card-text"> @lang('main.body-item14')</p>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=529982383028" class="btn btn-primary stretched-link "> @lang('main.body-item20-2') <img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Whatssapp_logo.png') }}"> @lang('main.body-item20-3') </a>  
                </div>
            </div>
        </div>
        <div class="col-sm-3" >
            <div class="card" >
                <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/VerbsEnglish/Verbs-English-Simple-Present-Past-Participle(720x622).jpg') }}" alt="Verbs in English" style="img-fluid">
            <div class="card-body" id="shadow_dc">
                <h4 class="card-title"> @lang('main.body-item15')</h4>
                <p class="card-text"> @lang('main.body-item16') </p>
                <a href="Verbos-Ingles-Simple-Present-Past-Participle-Verbs-English" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
            </div>
        </div>
        </div>
        
        <div class="col-sm-3" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/Uxmal-3d.JPG') }}" alt="Teocalli 3D Maya UXMAL" style="width:100%">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title "> @lang('main.body-item17')  </h4>
                    <p class="card-text ">@lang('main.body-item18')  </p>
                    <a href="https://myhub.autodesk360.com/ue2bab328/g/shares/SHabee1QT1a327cf2b7ae0922dcbb891e16e?mode=embed" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>    
        <div class="col-sm-3" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/articles_images/LOGO_Faro_Pelicano.PNG') }}" alt="Cocina recomendada en Puerto Morelos." style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">  @lang('main.body-item19')</h4>
                    <p class="card-text"> @lang('main.body-item20') </p>
                    <a href="../2018/Restaurante-Triny-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico.php" class="btn btn-primary stretched-link ">@lang('main.body-item20-1')</a>
                </div>
            </div>
        </div>
        
        
        
        
    </div>



</div>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:5px">
<p>@lang('main.body-item21')</p>
<p>                 
    <a target="_blank" href="https://www.facebook.com/DeseoCaribe-PuertoMorelos-Mexico-1615465705199791"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logofacebookgrey.png') }}"></a>&nbsp;&nbsp;
    <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logotwittergrey.png') }}"></a>&nbsp;&nbsp;
    <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logovkgrey.png') }}"></a>&nbsp;&nbsp;
    <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logoTelegram.png') }}"></a>&nbsp;&nbsp;
    <a target="_blank" href="https://www.pinterest.com.mx/deseocaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logopinterestgray.png') }}"></a>&nbsp;&nbsp;
    <a target="_blank" href="https://www.instagram.com/deseocaribe/?hl=es-la"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logoInstagram.png') }}"></a>
</p>
</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<div class="container" id="parques" style="margin-top:5px">
        <div class="row">
            <div class="col-sm-12">

                <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ul class="carousel-indicators">
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button></li>
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button></li>
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button></li>
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button></li>
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button></li>
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button></li>
                        <li><button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_01.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item22')</h3>
                                <p>@lang('main.body-item23')</p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_02.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item24')</h3>
                                <p>@lang('main.body-item25')</p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_03.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item26')</h3>
                                <p>@lang('main.body-item27')</p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_04.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item28')</h3>
                                <p>@lang('main.body-item29') </p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_05.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item30')</h3>
                                <p>@lang('main.body-item31')</p> 
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_06.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item32')</h3>
                                <p>@lang('main.body-item33') </p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/carrusel1/image_07.jpg') }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                            <div class="carousel-caption">
                                <h3>@lang('main.body-item34')</h3>
                                <p>@lang('main.body-item35') </p>
                            </div>
                        </div>


                    </div>
                    

                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>


            </div>
        </div>
    </div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	

   
<div id="tours" class="container-fluid header font__Griffy P_center" style="margin-top:5px">

    <div class="row" >
        <div class="col-sm-3" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/tours_images/cenote_la_noria2.jpg') }}" alt="Tours Mexico" style="img-fluid">
                <div class="card-body" >
                    <h4 class="card-title" id="shadow_dc_wood">@lang('main.body-item36')</h4>
                    <p class="card-text">@lang('main.body-item37')</p>
                    <a href="tours/5">  <button type="button" class="btn btn-warning button-war-3d">@lang('main.body-item40')</button> </a>
                </div>
            </div>
        </div>    
        <div class="col-sm-3" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢\tours_images\Jardin_Botanico_Puerto_Morelos.jpg') }}" alt="Tours Mexico" style="img-fluid">
                <div class="card-body" >
                    <h4 class="card-title" id="shadow_dc_wood">@lang('main.body-item38')</h4>
                    <p class="card-text">@lang('main.body-item39')</p>
                    <a href="tours/5" class="btn btn-warning button-war-3d">@lang('main.body-item40')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/tours_images/cenoteazul.jpg') }}" alt="Tours Mexico" style="img-fluid">  
                <div class="card-body" >
                    <h4 class="card-title" id="shadow_dc_wood">@lang('main.body-item41') </h4>
                    <p class="card-text">@lang('main.body-item42')</p>
                    <a href="tours/5" class="btn btn-warning button-war-3d">@lang('main.body-item40')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/tours_images/Crococun.jpg') }}" alt="Tours Mexico" style="img-fluid">  
                <div class="card-body" >
                    <h4 class="card-title" id="shadow_dc_wood">@lang('main.body-item43')</h4>
                    <p class="card-text">@lang('main.body-item44') </p>
                    <a href="tours/5" class="btn btn-warning button-war-3d">@lang('main.body-item40')</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	




<!--+----------+-here tours---------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	


<div id="tours01" class="container header font__Griffy P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> T O U R S </h1>
            </div>

            <div class="table-responsive">
                <table id="tabletours" class="display table  " style="width:100%"> <!--class= table-bordered -->
                    <thead>
                        <tr class="">
                            <th><a href="admin">@lang('main.body-item44-t1')</a> </th>
                            <th></th>
                            <th></th>
                            <th>@lang('main.body-item44-t2') &nbsp;<mark>@lang('main.body-item44-t3')</mark> </th>
                        </tr>
                        <tr class="">
                            <th class=""> @lang('main.body-item44-t4') </th>
                            <th class=""> @lang('main.body-item44-t5') </th>
                            <th class=""> @lang('main.body-item44-t6') </th>
                            <th class=""> @lang('main.body-item44-t7') </th>
                            
                        </tr>
                    </thead>
                    <tbody > 
                        @foreach ($tours as $tour )
                            <tr class="">
                                <td class="">  <img src="{{ asset('images/img_tours/'.$tour->image_path) }}" width="80" height="80"> </td>
                                <td class=""> {{ $tour->title }} </td>
                                <td class=""> <a href="tours/{{ $tour->id }}">  <button type="button" class="btn btn-warning button-war-3d">@lang('main.body-item40')</button> </a>   </td> 
                                <td class=""> {{ $tour->providers_description }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   

            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function() {
                $('#tabletours').DataTable ( {
                //  "pageLength": 2
                    "paging": false,
                //"searching": false,
                    "order": [[ 1, "asc" ]]
                    } )
                    
                } );
            </script>

   

            <hr>
          
            
    </div>
</div>    

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	

    <div id="citas" class="container header font__Griffy P_center" style="margin-top:5px">
    
        <div class="Space text-white font__Griffy " style="margin-top:1px">
            
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#home"> <button type="button" class="btn btn-primary btn-sm">@lang('main.body-item44-1')</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#menu1"><button type="button" class="btn btn-primary btn-sm">@lang('main.body-item44-2')</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#menu3"><button type="button" class="btn btn-primary btn-sm">@lang('main.body-item44-3')</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#menu4"><button type="button" class="btn btn-primary btn-sm">@lang('main.body-item44-4')</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#menu5"><button type="button" class="btn btn-primary btn-sm">@lang('main.body-item44-5')</button></a>
                </li>
            </ul>

        </div>


        <div class="tab-content text-white font__Griffy ">
            <div id="home" class="container tab-pane active"><br>
                <h3>@lang('main.body-item45')</h3>
                <p>@lang('main.body-item46')</p>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>@lang('main.body-item47')</h3>
                <p> @lang('main.body-item48')</p>
            </div>

            <div id="menu3" class="container tab-pane fade"><br>
                <h3>@lang('main.body-item49')</h3>
                <p>@lang('main.body-item50') </p>
            </div>

            <div id="menu4" class="container tab-pane fade"><br>
                <h3>@lang('main.body-item51')</h3>
                <p>@lang('main.body-item52')</p>
            </div>

            <div id="menu5" class="container tab-pane fade"><br>
                <h3>@lang('main.body-item53')</h3>
                <p> @lang('main.body-item54')</p>
            </div>

        </div>
    </div>










<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		




    <div class="container" align="justify" id="arqueologia" style="margin-top:10px"> 
        <div class="row">
            <div class="col-sm-2 nav nav-pills bg-primary text-white ">
                <table>
                    <a class="nav-link active" data-bs-toggle="pill" href="#home1"> <button type="button" class="btn btn-primary"><i class="fas fa-hiking"></i><u> @lang('main.body-item55')</u></button></a>
                    <a class="nav-link" data-bs-toggle="pill" href="#menu11"><button type="button" class="btn btn-primary"><i class="fas fa-truck-monster"></i><u> @lang('main.body-item56')</u></button></a>
                    <a class="nav-link" data-bs-toggle="pill" href="#menu31"><button type="button" class="btn btn-primary"><i class="fas fa-dice-d20"></i><u> @lang('main.body-item57')</u></button></a>
                    <a class="nav-link" data-bs-toggle="pill" href="#menu41"><button type="button" class="btn btn-primary"><i class="fas fa-anchor"></i><u> @lang('main.body-item58')</u></button></a>
                    <a class="nav-link" data-bs-toggle="pill" href="#menu51"><button type="button" class="btn btn-primary"><i class="fab fa-firstdraft"></i><u> @lang('main.body-item59')</u></button></a>
                </table>
            </div>




            <div class="col-sm-10" text-white font__Griffy>

                <div class="tab-content ">
                    <div id="home1" class="container tab-pane active"><br>
                        <h3>@lang('main.body-item60')</h3>
                        <p> 
                        <!-- Exchange Rates Script - EXCHANGERATEWIDGET.COM -->
                        <div style="width:350px;border:3px solid #1094A5;border-radius:5px;"text-align:left;>
                            <div style="text-align:left;background-color:#1094A5;width:100%;border-bottom:0px;height:16px; font-size:12px;font-weight:bold;padding:5px 0px;">   
                                <span style="margin-left:2px;background-image:url(//www.exchangeratewidget.com/flag.png); background-position: 0 -1232px; width:100%; height:15px; background-repeat:no-repeat;padding-left:5px;">
                                    <a href="https://www.exchangeratewidget.com/" style="color:#000000; text-decoration:none;padding-left:22px;" rel="nofollow">US Dollar </a>
                                </span>
                            </div>
                            <script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=MXN,RUB,EUR,GBP,JPY,CAD,AUD,BRL,ARS,VEF,CNY,CLP,&a=1&d=CEDFDE&n=FFFFFF&o=000000&v=7">
                            </script>
                        </div> <!-- End of Exchange Rates Script -->
                        </p>
                    </div>
                    <div id="menu11" class="container tab-pane fade"><br>
                        <h3>@lang('main.body-item61')</h3>
                        <p> <!-- <iframe width="100%" height="350" frameborder="0" src="https://www.bing.com/maps/embed?h=800&w=800&cp=21.213444051509526~-86.9282317339909&lvl=10&typ=d&sty=h&src=SHELL&FORM=MBEDV8" scrolling="no"></iframe> -->
                            <iframe width="100%" height="350" frameborder="0" src="https://www.bing.com/maps/embed?h=350&w=431&cp=21.16586601229315~-86.86764526367188&lvl=10&typ=d&sty=h&src=SHELL&FORM=MBEDV8" scrolling="no"> </iframe>
                        </p>
                    </div>

                    <div id="menu31" class="container tab-pane fade"><br>
                    <h3>@lang('main.body-item62')</h3>
                        <p>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/21d16n86d85/cancun/" data-label_1="CANCÚN" data-label_2="Weather deseocaribe.com" data-days="3" data-theme="grass" >CANCÚN WEATHER</a>
                            <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                            </script>
                        </p>
                    </div>

                    <div id="menu41" class="container tab-pane fade"><br>
                    <h3>@lang('main.body-item63')</h3>
                        <p>
                        <a class="weatherwidget-io" href="https://forecast7.com/en/20d85n86d88/puerto-morelos/" data-label_1="PUERTO MORELOS" data-label_2="Weather deseocaribe.com" data-font="Arial Black" data-icons="Climacons Animated" data-days="3" data-theme="random_grey" >PUERTO MORELOS Weather deseocaribe.com</a>
                            <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                            </script>                           
                        </p>
                    </div>

                    <div id="menu51" class="container tab-pane fade"><br>
                        <h3>@lang('main.body-item64')</h3>
                        <p>
                        <a class="weatherwidget-io" href="https://forecast7.com/en/20d21n87d47/tulum/" data-label_1="TULUM" data-label_2="Weather Deseo Caribe" data-font="Jura" data-icons="Climacons Animated" data-days="3" data-theme="pillows" >TULUM Weather Deseo Caribe</a>
                            <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                            </script>
                        </p>

                    </div>



                </div>
            </div>




        </div>
    </div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:5px">
<p>@lang('main.body-item65')</p>
</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

<div id="info" class="container  font__Griffy " style="margin-top:5px" >

        

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item66')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p> @lang('main.body-item67')</p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item68')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item69')</p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-12 ">
                <p>
                    <a class="weatherwidget-io" href="https://forecast7.com/en/20d85n86d88/puerto-morelos/" data-label_1="PUERTO MORELOS" data-label_2="Weather deseocaribe.com" data-font="Arial Black" data-icons="Climacons Animated" data-days="3" data-theme="random_grey" >PUERTO MORELOS Weather deseocaribe.com</a>
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>                           
                </p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item70')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item71') </p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item72')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item73')</p>
            </div>
        </div>



</div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
    <div id="map3" class="container" style="margin-top:1px">
        <iframe width="100%" height="450" src="https://embed.windy.com/embed2.html?lat=21.780&lon=-88.286&detailLat=23.604&detailLon=-89.022&width=650&height=450&zoom=6&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
    </div>

    

    
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	
<div id="TablasText02" class="container  font__Griffy " style="margin-top:5px" >

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item75')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item76')</p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item77')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item78')</p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-12 ">
                <p>
                    <a class="weatherwidget-io" href="https://forecast7.com/en/20d21n87d47/tulum/" data-label_1="TULUM" data-label_2="Weather Deseo Caribe" data-font="Jura" data-icons="Climacons Animated" data-days="3" data-theme="pillows" >TULUM Weather Deseo Caribe</a>
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>
                </p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item79')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item80') </p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-6 ">
                <p>@lang('main.body-item81')</p>
                
            </div>
            <div class="col-sm-6 ">
                <p>@lang('main.body-item82') </p>
            </div>
        </div>

</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

    <div id="map" class="container" style="margin-top:1px"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1567.68691936664!2d-86.87623908855191!3d20.847494728292933!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1491269860197" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		








@endsection