@extends('layouts.selected')
@section('detail_tours')



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-black font__Griffy" style="margin-top:0px">
    <div>
        <p>Info Confirmation - Pay (paso 3 / 3)</p>
    </div>
</div>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<div class="container" id="pays" style="margin-top:0px">
    
    <form method="POST" action="clients">
        @csrf   
    
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <p><strong>Esta a solo un paso de adquirir el tour de su preferencia, por favor verifique su información y pulse el metodo de pago de su conveniencia para finalizar </strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                    <input type="hidden" name="ReservationId" id="ReservationId" value="{{ $reservation->id  }}">
                    <input type="hidden" name="xEmail" id="xEmail" value="{{ $email_1_client  }}">
                    <input type="hidden" name="gTotal" id="gTotal" value="{{ $reservation->total }}">
                    <!-- <p> <input placeholder="" id="xCompleteLink" name="" class="form-control" type="input" value="" ></p> -->
                    <table>
                      <tr>
                          <td><strong>Tour Seleccionado  </strong></td>
                          <td><strong><span class="text-white">:</span> {{ $title_tour }}</strong></td>
                      </tr>
                      <tr>
                          <td><strong>Día Seleccionado <span class="text-white"></span> </strong></td>
                          <td><strong><span class="text-white">:</span> {{ $reservation->reservation_date }}  </strong></td>
                      </tr>
                      <tr>
                          <td><strong>Nombre del titular <span class="text-white"></span> </strong></td>
                          <td><strong><span class="text-white">:</span> {{ $name_client }} {{ $last_name_client }} </strong></td>
                      </tr>
                      <tr>
                        <td><strong>Email del titular <span class="text-white"></span> </strong></td>
                        <td><strong><span class="text-white">:</span> {{ $email_1_client }} </strong></td>
                    </tr>
                  </table>
            </div>
            <div class="col-sm-6">
                  <table>
                    <tr>
                      <td><strong>Cantidades <span class="text-white"></span> </strong></td>
                      <td><strong><span class="text-white">  </span>  </strong></td>
                  </tr>
                    <tr>
                        <td><strong>Total Adultos ( <u>{{ $reservation->number_adults }}</u> ) <span class="text-white"></span> </strong></td>
                        <td><strong><span class="text-white">:</span> $ {{ number_format($reservation->total_adults, 2,".","," ) }}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Total Niños ( <u>{{ $reservation->number_kids }}</u> ) <span class="text-white"></span> </strong></td>
                        <td><strong><u><span class="text-white">:</span> $ {{ number_format($reservation->total_kids, 2,".","," )   }}</u>  </strong></td>
                    </tr>
                    <tr>
                        <td><strong>Total a Pagar <span class="text-white"></span> </strong></td>
                        <td><strong><span class="text-white">:</span> $ {{ number_format($reservation->total, 2,".","," )  }} </strong></td>
                    </tr>
                </table>
              
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <hr>
                
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                


                <div id="smart-button-container">
                    <div style="text-align: center;">
                      <div id="paypal-button-container"></div>
                    </div>
                  </div>
                          <script>
                                  /* let xReservationId = document.getElementById("ReservationId").value;
                                  document.getElementById("xReservationId").value =  xReservationId; */
                          </script>

                          <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
                          <script>
                          let xLink = 'http://www.deseocaribe.com/finalconfirmation';
                          let xReservationId = document.getElementById("ReservationId").value;
                          let xjsEmail = document.getElementById("xEmail").value;
                          let x_g_Total = document.getElementById("gTotal").value;
                          let xCompleteLink = xLink + '/' + xReservationId + '/' + xjsEmail;

                          //document.getElementById("xCompleteLink").value =  xCompleteLink; //  http://www.deseocaribe.com/finalconfirmation/32/mail@yahoo.com
                        
                          function initPayPalButton() {
                              paypal.Buttons({
                                style: {
                                  shape: 'pill',
                                  color: 'gold',
                                  layout: 'vertical',
                                  label: 'paypal',
                                  
                                },
                        
                                createOrder: function(data, actions) {
                                  return actions.order.create({
                                    purchase_units: [{"description":"Tour Selected","amount":{"currency_code":"MXN","value":x_g_Total}}]
                                  });
                                },
                        
                                onApprove: function(data, actions) {
                                  return actions.order.capture().then(function(orderData) {
                                   // Full available details
                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        
                                    // Show a success message within this page, e.g.
                                    /*const element = document.getElementById('paypal-button-container');
                                    element.innerHTML = '';
                                    element.innerHTML = '<h3>Thank you for your payment!</h3>';*/
                        
                                    // Or go to another URL:  actions.redirect('thank_you.html');
                                    // /* ConfirmationMail: 00  */
                                    // actions.redirect('http://deseocaribetours.example.com/finalconfirmation');  xCompleteLink = http://deseocaribetours.example.com/finalconfirmation/33✔
                                    actions.redirect(xCompleteLink);
                                    
                                  });
                                },
                        
                                onError: function(err) {
                                  console.log(err);
                                }
                              }).render('#paypal-button-container');
                            }
                            initPayPalButton();
                          </script>


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