<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>||Final  Confirmation Email ||</title> <!-- ConfirmationMail: 04  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container" id="pays" style="margin-top:0px">
        
            <div class="row">
                <div align="center" class="col-sm-12">
                    <hr>
                    
                        <p><strong><h1>¡ PAGO Y RESERVACIÓN EXITOSA 😉! </h1></strong></p>
                        <p>  🌊🌞🌮🥂::CONGRATULATIONS::🍺🍹🚌🦎  </p>
                        <p><strong><h2>Clave de reservación : {{ $ViewGreatReservation->key_reservation }}</h2></strong></p>
                        
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table align="center">
                        <tr>
                            <td><strong>Nombre del titular <span class="text-white">:</span> </strong></td>
                            <td><strong> {{ $ViewGreatReservation->name }} &nbsp; {{ $ViewGreatReservation->last_name }}  </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Tour <span class="text-white">:</span> </strong></td>
                            <td><strong> {{ $ViewGreatReservation->titulo }}  </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Semblanza <span class="text-white">:</span> </strong></td>
                            <td><strong> {{ $ViewGreatReservation->semblanza }} </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Fecha <span class="text-white">:</span> </strong></td>
                            <td><strong> {{ $ViewGreatReservation->reservation_date  }} </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Cantidad de Adultos ( <u>{{ $ViewGreatReservation->number_adults }}</u> ) <span class="text-white">:</span> </strong></td>
                            <td><strong> $ {{ $ViewGreatReservation->total_adults }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Cantidad de Infantes ( <u>{{ $ViewGreatReservation->number_kids }}</u> ) <span class="text-white">:</span> </strong></td>
                            <td><strong><u> $ {{ $ViewGreatReservation->total_kids   }}</u>  </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Total  <span class="text-white">:</span> </strong></td>
                            <td><strong> $ {{ $ViewGreatReservation->total  }} </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Status <span class="text-white">:</span> </strong></td>
                            <td><strong> $ {{ $ViewGreatReservation->description  }} </strong></td>
                        </tr>
                    </table>
                    <hr>
                </div>
               
                        
                   

            </div>
            <div class="row">
                <div class="col-sm-12">
                    
                    <div style="margin-bottom:0px">
                        <img src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/Only_label_dc_release2021_desktop_best001.png" style="width:100%">
                    </div>
                <!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
                
                
                <footer class="container-fluid text-center footer-style " style="margin-top:0px">
                    <div class="container-fluid">
                        
                        <div align="center" class="row">
                        <div class="col-md-4 footer-col">
                                <h3>Social Media</h3>
                                <p> <a target="_blank" href="https://www.facebook.com/DeseoCaribe-PuertoMorelos-Mexico-1615465705199791"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/logofacebookgrey.png"></a>&nbsp;&nbsp;
                                    <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/logotwittergrey.png"></a>&nbsp;&nbsp;
                                    <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/logovkgrey.png"></a>&nbsp;&nbsp;
                                    <a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/logoTelegram.png"></a>&nbsp;&nbsp;
                                    <a target="_blank" href="https://www.pinterest.com.mx/deseocaribe"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/logopinterestgray.png"></a>&nbsp;&nbsp;
                                    <a target="_blank" href="https://www.instagram.com/deseocaribe/?hl=es-la"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/logoInstagram.png"></a>
                                </p>
                            </div>
                                <div class="col-md-4 footer-col">
                                <h3>Profesionalmente</h3>
                                <p><img width="130" height="75" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/Logo-Hecho-en-Mexico-iluminado-1.png"> </p>
                                <p>	
                                </p>
                            </div>
                            <div class="col-md-4 footer-col">
                                <h3>Dise&ntilde;o:<i> Studio Wetxzka </h3>
                                <p> &copy; 2022 deseocaribe.com - Todos los Derechos Reservados</p>
                                <p><a target="_blank" href="https://api.whatsapp.com/send?phone=529982383028"><img width="65" height="65" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/WhatsApp-logo-gray-paint-splash-social-media-png.png"> 998 238 30 28 </a></p>
                                <p><a target="_blank" href="https://twitter.com/DeseoCaribe"><img width="35" height="35" src="http://www.deseocaribe.com/public/images/i_m_a_g_e_s____◣_◢/email-logo-grey.png"> administrador@deseocaribe.com </a></p>
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </footer>


















                </div>
            </div>
    </div>


</body>
</html>