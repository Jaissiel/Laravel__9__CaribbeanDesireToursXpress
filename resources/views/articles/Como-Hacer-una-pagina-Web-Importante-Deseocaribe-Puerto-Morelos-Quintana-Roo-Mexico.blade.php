@extends('layouts.articles')

<!DOCTYPE html>
<html lang="en">
<head>                      
    <title>@lang('a_web.head-00') | <?php  print date("Y") ; ?> @lang('a_web.head-01') </title>
    <meta charset="utf-8">   
    <meta name="description" content="@lang('a_web.head-02')">
    <meta name="author" content="|Powered by Studio Wetxzka | jaissiel@deseocaribe.com |[( Production/Release -> 090922 )] |">
    <meta name="keywords" content="@lang('a_web.head-03')">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

@section('content')

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

<div style="margin-bottom:0px">
        <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/WEB/HTML-Aprende-Codigo-Deseo-Caribe.JPG') }}" style="width:100%">
</div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:0px">
    <div class="MOVIMIENTO_DESCENDIENDO">
        <p> <h2>@lang('a_web.mini-banner1-01')</h2> </p> 
    </div>
</div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div id="info" class="container  font__Griffy " style="margin-top:5px" >

    <div class="row text-white">
        <div class="col-sm-4 ">
            <p></p>
            
        </div>
        <div class="col-sm-4 ">
            <p><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/WEB/HTML-Aprende-Head-Deseo-Caribe-Puerto-Morelos.jpg') }}" style="width:100%"></p>
            <p class="P_center">@lang('a_web.mini-banner1-02')</p>
            
		</div>
        <div class="col-sm-4 ">
            <p> </p>
        </div>
    </div>

    <div class="row text-white">
        <div class="col-sm-12 ">
            <p>@lang('a_web.body-item1')</p>
            <br>
            <p>@lang('a_web.body-item2')
                <br><br>
                @lang('a_web.body-item3')
			<br>
			@lang('a_web.body-item4')
			</p>
            <br><br>
            <p><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/WEB/HTML-Aprende-html-Deseo-Caribe-Puerto-Morelos.JPG') }}" style="width:100%"></p>
            <p class="P_center">@lang('a_web.body-item5')</p>
        </div>
    </div>

    <div class="row text-white" style="margin-top:25px">
        <div class="col-sm-12 ">
            <p>@lang('a_web.body-item6')</p>
            
            <p>	 @lang('a_web.body-item7')
                <br><br>
                @lang('a_web.body-item8')
                <br><br>
                @lang('a_web.body-item9')
                <br><br>
                @lang('a_web.body-item10')
                <br><br>
                @lang('a_web.body-item11')
            
            </p>
            <br><br>
            <p class="P_center"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/WEB/HTML-Aprende-Etiquetas-Deseo-Caribe-Puerto-Morelos.JPG') }}" width="400" height="450"></p>
            <br><br><br><hr>
            <p class="P_center"><i>@lang('a_web.body-II-item1')</i> </p>
        </div>
    </div>





</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

<hr>

<section id="blog">
    <div class="container P_center">
	    <h2>@lang('a_web.body-II-item2')</h2>
            <p><h2>@lang('a_web.body-II-item3')</h2></p>

            <div id="fb-root"></div>
	        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0"></script>
	        <div class="fb-comments" data-href="http://deseocaribe.com/2018/Como-Hacer-una-pagina-Web-Importante-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico.php" data-width="" data-numposts="5"></div>

    </div>
<section>    
<hr>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


    
<div id="articles" class="container-fluid header font__Griffy P_center" style="margin-top:5px">

    <div class="row" >
        <div class="col-sm-4" >
            <div class="card" >
                <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢/VerbsEnglish/Verbs-English-Simple-Present-Past-Participle(720x622).jpg') }}" alt="Verbs in English" style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title"> @lang('a_web.body-II-item6')</h4>
                    <p class="card-text"> @lang('a_web.body-II-item7') </p>
                    <a href="Verbos-Ingles-Simple-Present-Past-Participle-Verbs-English" class="btn btn-primary stretched-link">@lang('a_web.body-II-item16')</a>
                </div>
            </div>
        </div>   
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src=" {{ asset('images/i_m_a_g_e_s____◣_◢\articles_images\Dia  de  Muertos  deseocaribe.com.jpg') }}" alt="Dia  de  Muertos  deseocaribe.com" style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('a_web.body-II-item12')</h4>
                    <p class="card-text"> @lang('a_web.body-II-item13')</p>
                    <a href="Dia-de-Muertos-Verdadero-Origen-Mexico-Anahuac-Toltecayotl-Mictlan" class="btn btn-primary stretched-link">@lang('a_web.body-II-item16')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢\articles_images\Zen-Emprendedor-Ivan-Deseocaribe.JPG') }}" alt="Zen-Emprendedor-Ivan-Deseocaribe" style="img-fluid">  
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('a_web.body-II-item8')</h4>
                    <p class="card-text"> @lang('a_web.body-II-item9')</p>
                    <a href="Zen-Emprendedor-Negocios-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico" class="btn btn-primary stretched-link">@lang('a_web.body-II-item16')</a>
                </div>
            </div>
        </div>
    </div>








    <div class="row" style="margin-top:5px">
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top " src=" {{ asset('images/i_m_a_g_e_s____◣_◢\articles_images\Manglar_Puerto_Morelos.jpg') }}"  alt="Manglar_Puerto_Morelos" style="width:100%">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('a_web.body-II-item10')</h4>
                    <p class="card-text"> @lang('a_web.body-II-item11')</p>
                    <a href="Guardianes-Manglar-Proteger-Selva-Mar-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico" class="btn btn-primary stretched-link">@lang('a_web.body-II-item16')</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢\articles_images\Deseo  Caribe Puerto Morelos.jpg') }}" alt="Deseo  Caribe Puerto Morelos" style="width:100%">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title ">@lang('a_web.body-II-item4')</h4>
                    <p class="card-text "> @lang('a_web.body-II-item5')</p>
                    <a href="Diez-Razones-Visitar-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico" class="btn btn-primary stretched-link">@lang('a_web.body-II-item16')</a>
                </div>
            </div>
        </div>    
        <div class="col-sm-4" >
            <div class="card" >
                    <img class="card-img-top" src="{{ asset('images/i_m_a_g_e_s____◣_◢\articles_images\No protector solar deseocaribe.com .jpg') }}" alt="No protector solar deseocaribe.com" style="img-fluid">
                <div class="card-body" id="shadow_dc">
                    <h4 class="card-title">@lang('a_web.body-II-item14')</h4>
                    <p class="card-text"> @lang('a_web.body-II-item15')</p>
                    <a href="Solar-Arrecifes-No-bloqueador-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico" class="btn btn-primary stretched-link">@lang('a_web.body-II-item16')</a>
                </div>
            </div>
        </div>
    </div>


    
</div>

@endsection