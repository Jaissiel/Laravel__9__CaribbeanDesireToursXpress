@extends('layouts.selected')
@section('detail_tours')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="SpaceMini font__Griffy" style="margin-top:0px">
    <div>
        <p>Client Information/Quotation (paso 2 / 3)</p>
    </div>
</div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="container" id="pays" style="margin-top:0px">
    <form method="POST" action="clients" name="clients_form">
        @csrf   
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                    <table>
                        <tr>
                            <td><strong>Tour Seleccionado  </strong></td>
                            <td><strong><span class="text-white">:</span> {{ $title }} &nbsp; {{-- $id --}}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Día Seleccionado <span class="text-white"></span> </strong></td>
                            <td><strong><span class="text-white">:</span> {{ $reservation_date }}  </strong></td>
                        </tr>
                        <tr>
                            <td><strong>Semblanza del Tour <span class="text-white"></span> </strong></td>
                            <td><strong><span class="text-white">:</span> {{ $semblanza }} </strong></td>
                        </tr>
                    </table>
            </div>
            <div class="col-sm-6">
                <table>
                    <tr>
                        <td><strong>Cantidad Total Adultos ( <u>{{ $n_adults }}</u> ) <span class="text-white"></span> </strong></td>
                        <td><strong><span class="text-white">:</span> $ {{ number_format($total_adultss, 2,".","," ) }}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Cantidad Total Niños ( <u>{{ $n_kids }}</u> ) <span class="text-white"></span> </strong></td>
                        <td><strong><u><span class="text-white">:</span> $ {{ number_format($total_kidss, 2,".","," )   }}</u>  </strong></td>
                    </tr>
                    <tr>
                        <td><strong>Cantidad Total a Pagar <span class="text-white"></span> </strong></td>
                        <td><strong><span class="text-white">:</span> $ {{ number_format($Grand_totall, 2,".","," )  }} </strong></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <p class="SpaceMini font__Griffy" style="margin-top:0px">Capturar Información del viajero titular </p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong>Nombre(s): </strong><input type="text" id="name" name="name" class="form-control" placeholder="" > <!-- onfocus="onloadjay()"-->
            </div>
            <div class="col-sm-6">
                <strong>Apellido(s): </strong><input type="text" id="last_name" name="last_name" class="form-control"> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong>Correo electrónico:</strong> <input type="email" id="email_1" name="email_1" class="form-control" placeholder="enter valid email address"> 
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="mail_active" name="mail_active" value="1">
                    <label class="custom-control-label" for="mail_active"><strong>¿e-mail activo?</strong></label>
                </div>
            </div>
            <div class="col-sm-6">
                <strong>Confirmar correo electrónico:</strong> <input type="email" id="email_2" name="email_2" class="form-control" placeholder="enter valid email address">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                &nbsp;    
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong>Ciudad:</strong><input type="text" id="city" name="city" class="form-control"> 
            </div>
            <div class="col-sm-6">
                <strong>Estado/Region:</strong> <input type="text" id="state" name="state" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong>País: </strong>
                <select id="nation" name="nation" size="1" class="form-control">
                    <option value="145" selected> MEXICO </option>
                    <option value="240"> USA </option>
                    @foreach ($paiss as $paiss )    
                    <option value="{{ $paiss->id }}">{{ $paiss->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                
                <strong>Número de contacto:</strong> <input type="tel" id="phone_1" name="phone_1" class="form-control"> 
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="whatsapp_active" name="whatsapp_active" value="1">
                    <label class="custom-control-label" for="whatsapp_active"><strong>¿El número de contacto tiene WhatsApp?</strong></label>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
            <p><strong>Comentarios adicionales: </strong><textarea id="remarks" name="remarks"  cols="30" rows="5" style="resize: none;" class="form-control"></textarea></p>
        </div>
        </div>

        <div class="row">
            <div class="col-sm-0">
               <!--  <p><input type="checkbox" id="reservation_agreement" name="reservation_agreement" value="1" class="form-control" id="TC" onclick="activatejay()"> </p> -->
            </div>
            <div class="col-sm-12">
                <p> <strong>Al pulsar clíc en la opción de su preferencia usted acepta haber leido y estar de acuerdo con los
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                    Teminos y Condiciones
                    </button>    
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModalP">
                        Politicas de Privacidad
                    </button> 
                    </strong></p>
                <p>  </p>    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                        <input type="radio" class="form-check-input" id="paymethod" name="paymethod" value="1" checked>
                        </div>
                        <input type="text" readonly class="form-control" placeholder="Tarjeta Credito/Debito">
                        
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input type="radio" class="form-check-input" id="paymethod" name="paymethod" value="2">
                        </div>
                        <input type="text" readonly class="form-control" placeholder="Paypal">
                        
                    </div>
                                
            </div>
            <div class="col-sm-4">
               <!--  <span class="spinner-grow spinner-grow-sm text-warning"></span>-->
                <input type="hidden" id="tours_id" name="tours_id" value="{{ $id }}">
                <input type="hidden" id="title" name="title" value="{{ $title }}">
                <input type="hidden" id="reservation_date" name="reservation_date" value="{{ $reservation_date }}">
                <input type="hidden" id="total_adultss" name="total_adultss" value="{{ $total_adultss }}">
                <input type="hidden" id="total_kidss" name="total_kidss" value="{{ $total_kidss }}">
                <input type="hidden" id="n_adults" name="n_adults" value="{{ $n_adults }}">
                <input type="hidden" id="n_kids" name="n_kids" value="{{ $n_kids }}">
                <input type="hidden" id="Grand_totall" name="Grand_totall" value="{{ $Grand_totall }}">                   
                <button type="button" value="" class="form-control btn btn-warning " id="activate" name="B01" onClick="ValidaCampos()"><strong>:::CONTINUAR:::</strong> </button>    
            </div>
        </div>
        <hr>

        
    
    </form>
        

</div>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	

<script>
    function onloadjay(){
        document.getElementById('activate').disabled=true;
        document.getElementById('TC').disabled=false
    }
    function activatejay()
        {
            document.getElementById('activate').disabled=false;
            document.getElementById('TC').disabled=true;
        }
</script>

<script> 
	function ValidaCampos()  {
        let email1 = document.getElementById("email_1").value;
        let email2 = document.getElementById("email_2").value;
        
        let jvi_texto_correcto = /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto = /[\D\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto1 = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_textoynumero_correcto = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
        let pattern  = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; 
        
        
        
        if (clients_form.name.value  == "")   {
            alert("El campo: Nombre, no debe estar vacío, favor de verificar ");    clients_form.name.focus(); return false;
        }  

        if(jvi_texto_correcto.test(clients_form.name.value)) {
            alert('Ha escrito un caracter no valido en el campo Nombre, verifique por favor.');  clients_form.name.focus(); return false;    
        }

        if (clients_form.last_name.value  == "")   {
            alert("El campo: Apellidos, no debe estar vacío, favor de verificar ");    clients_form.last_name.focus(); return false;
        }  

        if(jvi_texto_correcto.test(clients_form.last_name.value)) {
            alert('Ha escrito un caracter no valido en el campo Apellidos, verifique por favor.');  clients_form.last_name.focus(); return false;    
        }

        if (clients_form.email_1.value  == "")   {
            alert("El campo: Email, no debe estar vacío, favor de verificar ");    clients_form.email_1.focus(); return false;
        }  

        if (email1.match(pattern))   {
            let noproblem = 1 ; 
        }
        else {
            alert("El campo: Email, debe ser una dirección de email valida!, favor de verificar ");    clients_form.email_1.focus(); return false;
        }

        if (clients_form.email_2.value  == "")   {
            alert("El campo: CONFIRMACIÓN de Email, no debe estar vacío, favor de verificar ");    clients_form.email_2.focus(); return false;
        } 

        if (email2.match(pattern))   {
            let noproblem = 1 ; 
        }
        else {
            alert("El campo: CONFIRMACIÓN de Email, debe ser una dirección de email valida!, favor de verificar ");    clients_form.email_2.focus(); return false;
        }

        if (clients_form.email_1.value  != clients_form.email_2.value)   {
            alert("Los campos email y confirmación email, deben ser IDENTICOS, favor de verificar ");    clients_form.email_1.focus(); return false;
        } 
        
        if (clients_form.phone_1.value  == "")   {
            alert("El campo: Telefono de Contacto, no debe estar vacío, favor de verificar ");    clients_form.phone_1.focus(); return false;
        } 
        if(jvi_numero_correcto.test(clients_form.phone_1.value)) {
            alert('Ha escrito un caracter no valido en el campo Telefono de Contacto, verifique por favor.');  clients_form.phone_1.focus(); return false;    
        }
        

        
       // alert(" Registro Grabado \n  ¡ Exitosamente ! ");
        clients_form.B01.disabled = true; 
		document.clients_form.submit();	  
    }
    
</script>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		




<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="SpaceMini text-white font__Griffy" style="margin-top:100px">
    <p>&nbsp;</p>
    </div>












@endsection