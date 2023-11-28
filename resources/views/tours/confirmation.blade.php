@extends('layouts.selected')
@section('detail_tours')



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-black font__Griffy" style="margin-top:0px">
    <div>
        <p> Confirmation - Pay (final)</p>
    </div>
</div>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<div class="container" id="pays" style="margin-top:0px">
    
    <form method="POST" action="clients">
        @csrf   
    
        <div class="row P_center">
            <div class="col-sm-12">
                <hr> 
                    
                        <p><strong><h1>¡ PAGO Y RESERVACIÓN EXITOSA 😉! </h1></strong></p>
                        <p>  🌊🌞🌮🥂::CONGRATULATIONS::🍺🍹🚌🦎  </p>
                        <p><strong><h2>Clave de reservación : <u> {{ $viewgreatreservation->key_reservation }} </u></h2></strong></p>
                        <p><strong>Te hemos enviado un email con toda la información necesaria a :{{ $viewgreatreservation->email_1 }} </strong></p>
                
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6">
                <table align="center">
                    <tr>
                        <td><strong>Titular de la reservación <span class="text-white">:</span> </strong></td>
                        <td><strong> {{$viewgreatreservation->name}} &nbsp; {{$viewgreatreservation->last_name}}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Tour <span class="text-white">:</span> </strong></td>
                        <td><strong> {{$viewgreatreservation->titulo}}  </strong></td>
                    </tr>
                    <tr>
                        <td><strong>Semblanza <span class="text-white">:</span> </strong></td>
                        <td><strong> {{ $viewgreatreservation->semblanza }} </strong></td>
                    </tr>
                    <tr>
                        <td><strong>Fecha Tour <span class="text-white">:</span> </strong></td>
                        <td><strong> {{ $viewgreatreservation->reservation_date }} </strong></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table align="center">
                    <tr>
                        <td><strong>Cantidad Total Adultos ( <u>{{ $viewgreatreservation->number_adults }}</u> ) <span class="text-white">:</span> </strong></td>
                        <td><strong> $ {{ number_format($viewgreatreservation->total_adults, 2,".","," ) }}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Cantidad Total Niños ( <u>{{ $viewgreatreservation->number_kids }}</u> ) <span class="text-white">:</span> </strong></td>
                        <td><strong><u> $ {{ number_format($viewgreatreservation->total_kids, 2,".","," )   }}</u>  </strong></td>
                    </tr>
                    <tr>
                        <td><strong>Total  <span class="text-white">:</span> </strong></td>
                        <td><strong> $ {{ number_format($viewgreatreservation->total, 2,".","," )  }} </strong></td>
                    </tr>
                    <tr>
                        <td><strong>Estatus  <span class="text-white">:</span> </strong></td>
                        <td><strong> $ {{ $viewgreatreservation->description  }} </strong></td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr><hr><hr>
                <p> </p>
            </div>
        </div>

        
            
    </form>
        

</div>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	




<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		




<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:5px">
<p>&nbsp;</p>
</div>












@endsection