<!DOCTYPE html>
<html lang="en">
<head>                      
    <title>@lang('main.head-00') <?php  print date("Y") ; ?> @lang('main.head-01')</title>
    <meta charset="utf-8">   
    <meta name="description" content="@lang('main.head-02')">
    <meta name="author" content="| Powered by Studio Wetxzka | jaissiel@deseocaribe.com | [( Production/Release -> 270523 )] |">
    <meta name="keywords" content="@lang('main.head-03')">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!--Bootstrap 5.1 Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/c_s_s____◣_◢/carrusel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/c_s_s____◣_◢/Ollin.css') }}" > 
    <!--<link rel="stylesheet" href="c_s_s____◣_◢/tables3d.css">-->

    <link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">    <style>    .font__Griffy {        font-family: 'Griffy', serif;        font-size: 20px;    }    </style>
    
    

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- google ads original -->
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-7638692636443240",
		enable_page_level_ads: true
	  });
	</script>

    <meta name="p:domain_verify" content="08cce43355f04fc2a4b8d2039cb46d13"/>   <!-- <-Pinterest   -->

    <!-- Global site tag (gtag.js) - Google Analytics release 4 --><!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FJWCN7SGEY"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FJWCN7SGEY');
    </script>
    <!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

</head>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<body>
<?php // include_once("analyticstracking.php") ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-99637946-1', 'auto');
    ga('send', 'pageview');

</script>

    <?php $number_random = mt_rand(1, 12);	?>
    <div style="margin-bottom:0px">
        <img src="public/images/i_m_a_g_e_s____◣_◢/BigImages/SELECTED/deseocaribe magazine 00<?php echo $number_random ; ?>.jpg" style="width:100%">
    </div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		



    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand MOVIMIENTO_DESCENDIENDO" href="/"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/logo.png') }}" alt="www.deseocaribe.com" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="#articles">&clubs; @lang('main.nav-01')</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#tours">&diams; @lang('main.nav-02')</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#info">&hearts; @lang('main.nav-03')</a>
                </li>
                <li class="nav-item">  
                    <?php 
                    use Illuminate\Support\Facades\App;
                    $locale1 = App::currentLocale();
                    if (App::isLocale('mx')) {
                    ?>
                    <a class="nav-link" href="{{ url('locale/en'  ) }}"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/language')}}/@lang('main.nav-flag')" width="25px" height="11px"> @lang('main.nav-lang')</a>
                    <?php
                    }
                    if (App::isLocale('en')) {
                    ?>
                    <a class="nav-link" href="{{ url('locale/mx'  ) }}"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/language')}}/@lang('main.nav-flag')" width="25px" height="11px"> @lang('main.nav-lang')</a>
                    <?php  }  ?>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">@lang('main.nav-05')</a>  
                <ul class="dropdown-menu">
                    <a class="dropdown-item" target="_blank" href="https://vk.com/public217968432"><img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/vkontakte_deseocaribe.png') }}">@lang('main.nav-06')</a>
                    <a class="dropdown-item" target="_blank" href="https://www.facebook.com/DeseoCaribe-PuertoMorelos-Mexico-1615465705199791"><img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Facebook.gif') }}">@lang('main.nav-07')</a>
                    <a class="dropdown-item" target="_blank" href="https://www.instagram.com/deseocaribe/?hl=es-la"><img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Instagram_logo.png') }}" alt="Instragram deseocaribe.com">@lang('main.nav-08')</a>
                    <a class="dropdown-item" target="_blank" href="https://www.pinterest.com.mx/deseocaribe"><img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Pinteres_logo.png') }}">@lang('main.nav-09')</a>
                    <a class="dropdown-item" target="_blank" href="#">&spades;@lang('main.nav-10')</a>
                    <a class="dropdown-item" target="_blank" href="https://twitter.com/DeseoCaribe"><img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Twiter_logo.png') }}">@lang('main.nav-11')</a>
                    <a class="dropdown-item" target="_blank" href="#">&spades;@lang('main.nav-12')</a>
                    <a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send?phone=529982383028" target="_blank"><img width="25" height="25" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Whatssapp_logo.png') }}">@lang('main.nav-13')</a>
                
                </ul>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link MOVIMIENTO_DESCENDIENDO" href="https://www.facebook.com/DeseoCaribe-PuertoMorelos-Mexico-1615465705199791" target="_blank"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/favicon (5).ico') }}" width="20" height="20"
                            alt="facebook" loading="lazy"> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link MOVIMIENTO_DESCENDIENDO" href="https://twitter.com/DeseoCaribe" target="_blank"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/favicon (8).ico') }}" width="20" height="20"
                            alt="twitter" loading="lazy"> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link MOVIMIENTO_DESCENDIENDO" href="https://api.whatsapp.com/send?phone=529982383028" target="_blank" style="margin: 0px auto;"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/favicon (3).ico') }}" width="20" height="20"
                            alt="whatsapp" loading="lazy"> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link MOVIMIENTO_DESCENDIENDO" href="" style="margin: 0px auto;"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/Gif Animated/Deseo Caribe Mexico Gif Animated 02.gif') }}" width="20" height="20"
                            alt="deseo caribe" loading="lazy"> </a>
                </li>
            </ul>

            </div>
        </div>
        </nav>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


    @yield('content')



    
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

<div style="margin-bottom:0px">
    <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/BigImages/SELECTED/deseocaribe magazine 1000.jpg') }}" style="width:100%">
</div>

<div style="margin-bottom:0px">
    <img src="{{ asset('images/i_m_a_g_e_s____◣_◢/Only_label_dc_release2021_desktop_best001.png') }}" style="width:100%">
</div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<footer class="container-fluid text-center footer-style " style="margin-top:0px">
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4 footer-col">
            <h3>@lang('main.body-item83')</h3>
            <p> <a target="_blank" href="https://www.facebook.com/DeseoCaribe-PuertoMorelos-Mexico-1615465705199791"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logofacebookgrey.png') }}"></a>&nbsp;&nbsp;
                <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logotwittergrey.png') }}"></a>&nbsp;&nbsp;
                <a target="_blank" href="https://vk.com/public217968432"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logovkgrey.png') }}"></a>&nbsp;&nbsp;
                <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logoTelegram.png') }}"></a>&nbsp;&nbsp;
                <a target="_blank" href="https://www.pinterest.com.mx/deseocaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logopinterestgray.png') }}"></a>&nbsp;&nbsp;
                <a target="_blank" href="https://www.instagram.com/deseocaribe/?hl=es-la"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/logoInstagram.png') }}"></a>
            </p>
        </div>
            <div class="col-md-4 footer-col">
            <h3>@lang('main.body-item84')</h3>
            <p><img width="130" height="75" src="{{ asset('images/i_m_a_g_e_s____◣_◢/Logo-Hecho-en-Mexico-iluminado-1.png') }}"> </p>
            <p>	</p>
        </div>
        <div class="col-md-4 footer-col">
            <h3>@lang('main.body-item85') </h3>
            <p> &copy; <?php  print date("Y") ; ?> @lang('main.body-item87')</p>
            <p><a target="_blank" href="https://api.whatsapp.com/send?phone=529982383028"><img width="65" height="65" src="{{ asset('images/i_m_a_g_e_s____◣_◢/WhatsApp-logo-gray-paint-splash-social-media-png.png') }}">@lang('main.body-item88') </a></p>
            <p><a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="{{ asset('images/i_m_a_g_e_s____◣_◢/email-logo-grey.png') }}"> @lang('main.body-item89') </a></p>
            <!--<audio controls autoplay>
                    <source src="i_m_a_g_e_s____◣_◢/30 - Castlevania - Track 30.mp3" type="audio/mpeg">
                    
                    Your browser does not support the audio element.
                </audio>
            -->
        </div>
       
        
    </div>
    
</div>
</footer>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		




</body>
</html>



<!--+----------+litepicker calendar----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="{{ asset('js/moment.min.js')}}"></script>
<script>
    //document.getElementById("demo").innerHTML = complete_date;
   //document.getElementById("demo").innerHTML = moment() ; 
    const picker = new Litepicker(
        {           element: document.getElementById('litepicker1') ,
                    singleMode: true,
                    format: 'DD-MM-YYYY',
                    resetButton: true,
                    Default: false,
                    minDate: moment().format()
    });
    
</script>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


 <!-- Go to www.addthis.com/dashboard to customize your tools -->
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a9363d8c097bc5f"></script>

<script type="text/javascript" language="Javascript">  // document.oncontextmenu = function(){return false}  </script>

<!-- ▌│║-٩͡[๏̯͡๏]۶-███ ¯\_(ツ)_/¯ ▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓███-*´¨)◣_◢ ٩(●̮̮̃•̃)۶ ٩[๏̯͡๏]۶ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ 


****     **** ******** **     ** **   ******    *******         ****     ** **     ** ******** **      **   *******             **     **    **   *******   ********** **           **     ****     **
/**/**   **/**/**///// //**   ** /**  **////**  **/////**       /**/**   /**/**    /**/**///// /**     /**  **/////**           ****   //**  **   **/////** /////**/// /**          ****   /**/**   /**
/**//** ** /**/**       //** **  /** **    //  **     //**      /**//**  /**/**    /**/**      /**     /** **     //**         **//**   //****   **     //**    /**    /**         **//**  /**//**  /**
/** //***  /**/*******   //***   /**/**       /**      /**      /** //** /**/**    /**/******* //**    ** /**      /**        **  //**   //**   /**      /**    /**    /**        **  //** /** //** /**
/**  //*   /**/**////     **/**  /**/**       /**      /**      /**  //**/**/**    /**/**////   //**  **  /**      /**       **********   /**   /**      /**    /**    /**       **********/**  //**/**
/**   /    /**/**        ** //** /**//**    **//**     **       /**   //****/**    /**/**        //****   //**     **       /**//////**   /**   //**     **     /**    /**      /**//////**/**   //****
/**        /**/******** **   //**/** //******  //*******        /**    //***//******* /********   //**     //*******        /**     /**   /**    //*******      /**    /********/**     /**/**    //***
//         // //////// //     // //   //////    ///////         //      ///  ///////  ////////     //       ///////         //      //    //      ///////       //     //////// //      // //      /// 


-->