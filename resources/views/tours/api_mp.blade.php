
@extends('layouts.selected')
@section('detail_tours')



	
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-black font__Griffy" style="margin-top:0px">
    <div>
        <p>Info Confirmation - Pay (paso 3 / 3)</p>
    </div>
</div>

<div class="container" id="pays" style="margin-top:0px">
    
    <form method="POST" action="clients">
        
    
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <p><strong>Esta a solo un paso de adquirir el tour de su preferencia, por favor verifique su información y pulse el metodo de pago de su conveniencia para finalizar </strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                    <p><strong>TOUR   :  <?php // echo  $_GET['II']; ?></strong></p>
                    <p><strong>FECHA  :  <?php //echo  $_GET['III']; ?></strong></p>
                    <p><strong>NOMBRE :  <?php //echo  $_GET['IV']; ?></strong></p>
                    <p><strong>EMAIL  :  <?php //echo  $_GET['V']; ?></strong></p>
            </div>
            <div class="col-sm-6">
                <p><strong>CANTIDADES: </strong></p>
                <p><strong>TOTAL ADULTOS <u>(<?php //echo  $_GET['VII']; ?>  )</u> $ <?php //echo  $_GET['VIII']; ?> </strong></p>
                <p><strong>TOTAL NIÑOS <u> (<?php //echo  $_GET['IX']; ?>  ) </u> $ <?php //echo  $_GET['X']; ?> </strong></p>
                <p><strong>TOTAL A PAGAR: $  <?php //echo  $_GET['XI']; ?></strong></p>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <hr>
				
				
			</div>
        </div>	
				
				
	</form>
        

</div>


<!--+----------+---mp-------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
				<div class="container" > 
					<div class="row center_objects_jvi">
							<div class="col-sm-4">
							<p>&nbsp;</p>
							</div>	
					

						
							<div class="col-sm-4">
									<div><label></label> </div>
									<div></div>

                                    <form id="form-checkout" >
                                        <input type="text" name="cardNumber" id="form-checkout__cardNumber" />
                                        <input type="text" name="expirationDate" id="form-checkout__expirationDate" />
                                        <input type="text" name="cardholderName" id="form-checkout__cardholderName"/>
                                        <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail"/>
                                        <input type="text" name="securityCode" id="form-checkout__securityCode" />
                                        <select name="issuer" id="form-checkout__issuer"></select>
                                        <select name="identificationType" id="form-checkout__identificationType"></select>
                                        <input type="text" name="identificationNumber" id="form-checkout__identificationNumber"/>
                                        <select name="installments" id="form-checkout__installments"></select>
                                        <button type="submit" id="form-checkout__submit">Pay</button>
                                        <progress value="0" class="progress-bar">loading...</progress>
                                    </form>

                                    <script src="https://sdk.mercadopago.com/js/v2"></script>
                                    <script>
                                        const mp = new MercadoPago('APP_USR-7606ce2c-97a4-4f32-ab26-66cfa1fa9ce7', {
                                            locale: 'es-MX'
                                        })

                                        const cardForm = mp.cardForm({
                                            amount: '100.5',
                                            autoMount: true,
                                            processingMode: 'aggregator',
                                            form: {
                                                id: 'form-checkout',
                                                cardholderName: {
                                                    id: 'form-checkout__cardholderName',
                                                    placeholder: 'Cardholder name',
                                                },
                                                cardholderEmail: {
                                                    id: 'form-checkout__cardholderEmail',
                                                    placeholder: 'Email',
                                                },
                                                cardNumber: {
                                                    id: 'form-checkout__cardNumber',
                                                    placeholder: 'Card number',
                                                },
                                                expirationDate: {
                                                    id: 'form-checkout__expirationDate',
                                                    placeholder: 'MM/YYYY'
                                                },
                                                securityCode: {
                                                    id: 'form-checkout__securityCode',
                                                    placeholder: 'CVV',
                                                },
                                                installments: {
                                                    id: 'form-checkout__installments',
                                                    placeholder: 'Total installments'
                                                },
                                                identificationType: {
                                                    id: 'form-checkout__identificationType',
                                                    placeholder: 'Document type'
                                                },
                                                identificationNumber: {
                                                    id: 'form-checkout__identificationNumber',
                                                    placeholder: 'Document number'
                                                },
                                                issuer: {
                                                    id: 'form-checkout__issuer',
                                                    placeholder: 'Issuer'
                                                }
                                            },
                                            callbacks: {
                                                onFormMounted: error => {
                                                    if (error) return console.warn('Form Mounted handling error: ', error)
                                                    console.log('Form mounted')
                                                },
                                                onFormUnmounted: error => {
                                                    if (error) return console.warn('Form Unmounted handling error: ', error)
                                                    console.log('Form unmounted')
                                                },
                                                onIdentificationTypesReceived: (error, identificationTypes) => {
                                                    if (error) return console.warn('identificationTypes handling error: ', error)
                                                    console.log('Identification types available: ', identificationTypes)
                                                },
                                                onPaymentMethodsReceived: (error, paymentMethods) => {
                                                    if (error) return console.warn('paymentMethods handling error: ', error)
                                                    console.log('Payment Methods available: ', paymentMethods)
                                                },
                                                onIssuersReceived: (error, issuers) => {
                                                    if (error) return console.warn('issuers handling error: ', error)
                                                    console.log('Issuers available: ', issuers)
                                                },
                                                onInstallmentsReceived: (error, installments) => {
                                                    if (error) return console.warn('installments handling error: ', error)
                                                    console.log('Installments available: ', installments)
                                                },
                                                onCardTokenReceived: (error, token) => {
                                                    if (error) return console.warn('Token handling error: ', error)
                                                    console.log('Token available: ', token)
                                                },
                                                onSubmit: (event) => {
                                                    event.preventDefault();
                                                    const cardData = cardForm.getCardFormData();
                                                    console.log('CardForm data available: ', cardData)
                                                },
                                                onFetching:(resource) => {
                                                    console.log('Fetching resource: ', resource)

                                                    // Animate progress bar
                                                    const progressBar = document.querySelector('.progress-bar')
                                                    progressBar.removeAttribute('value')

                                                    return () => {
                                                        progressBar.setAttribute('value', '0')
                                                    }
                                                },
                                                onError: (error, event) => {
                                                    console.log(event, error);
                                                },
                                                onValidityChange: (error, field) => {
                                                    if (error) return error.forEach(e => console.log(`${field}: ${e.message}`));
                                                    console.log(`${field} is valid`);
                                                },
                                                onReady: () => {
                                                    console.log("CardForm ready");
                                                }
                                            }
                                        })
                                    </script>




										
							</div>
						

							<div class="col-sm-4">
								<p>&nbsp;</p>
							</div>	
					</div>
				</div>		
            
<!--+----------+---mp-------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		

 <!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-black" style="margin-top:5px">
<p>Pagar con tarjeta de Credito o Debito</p>
<p><hr></p>
</div>

@endsection