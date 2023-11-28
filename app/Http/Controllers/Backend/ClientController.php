<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\reservation;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Http\Requests\ClientStoreRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

                                                                                                        //dd($request);  
                                                                                                        //dd ('OK');
                                                                                                        //  dd  dump($value1, $value2, $value3, ...);

                                                                                                        /* $request->validate([
                                                                                                        'name' => 'required',
                                                                                                        'last_name' => 'required',
                                                                                                        'email_1' => 'required'
                                                                                                        ]);
                                                                                                        */
                
    public function store(Request $request)
    {           
        $paymethod = $request->input('paymethod');

        if ($paymethod == 1) /* By MercadoPago */
        {
                        $Client = Client::create([    
                            'name'                  => $request->input('name'),
                            'last_name'             => $request->input('last_name'),
                            'email_1'               => $request->input('email_1'),
                            'email_2'               => $request->input('email_2'),
                            'mail_active'           => $request->input('mail_active'),
                            'city'                  => $request->input('city'),
                            'state'                 => $request->input('state'),
                            'nation'                => $request->input('nation'),
                            'phone_1'               => $request->input('phone_1'),
                            'whatsapp_active'       => $request->input('whatsapp_active'),
                            'remarks'               => $request->input('remarks'),
                            'reservation_agreement' => $request->input('reservation_agreement')
                        ]);
                    $ClientId = ($Client->id);    // Here I need recover specific data : Id_Client
                    // dd($ClientId);
                        /*
                        $key_reservation = 'Xcaret-0001-301221-1832-1002';
                        $random = Str::random(40);
                        $slug = Str::slug('Laravel 5 Framework', '-');
                        $converted = Str::substr('The Laravel Framework', 4, 7);
                        $string = Str::of('  Laravel  ')->trim();
                        */

                        $reservation = reservation::create([ 
                            'tours_id'          => $request->input('tours_id'),
                            'clients_id'        => $ClientId,
                            'reservation_date'  => $request->input('reservation_date'),
                            'total_adults'      => $request->input('total_adultss'),
                            'total_kids'        => $request->input('total_kidss'),
                            'number_adults'     => $request->input('n_adults'),
                            'number_kids'       => $request->input('n_kids'),
                            'total'             => $request->input('Grand_totall')
                        ]);
                        $ReservationId = ($reservation->id); 

                        $_1title            = Str::limit($request->input('title'),10,'...');   //10 for the moment, 
                        $_2tours_id         = $request->input('tours_id');
                        $_3reservation_id   = $ReservationId;
                        $_4reservation_date = $request->input('reservation_date');
                        $_5clients_id       = $ClientId;
                        $key_reservation    = ' / '.$_1title.' / '.$_2tours_id.' / '.$_5clients_id.' / '.$_4reservation_date.' / '.$_3reservation_id.' / ';

                        $reservation = reservation::where('id',$ReservationId)->update([
                            'key_reservation' => $key_reservation
                        ]);

                        $reservation_updated = reservation::find($ReservationId);

                    
                    $I      = $ReservationId;
                    $II     = $_1title;
                    $III    = $_4reservation_date;
                    $IV     = $request->input('name');
                    $V      = $request->input('last_name');
                    $VI     = $request->input('email_1');
                    $VII    = $request->input('n_adults');
                    $VIII   = $request->input('total_adultss');
                    $IX     = $request->input('n_kids');
                    $X      = $request->input('total_kidss');
                    $XI     = $request->input('Grand_totall');
                    
                    
                        return redirect (asset('mp.php?I='.$I.'&II='.$II.'&III='.$III.'&IV='.$IV.'&V='.$V.'&VI='.$VI.'&VII='.$VII.'&VIII='.$VIII.'&IX='.$IX.'&X='.$X.'&XI='.$XI  ));
                    
        }
        
        elseif ($paymethod == 2) /* By Paypal */
        {
                    $Client = Client::create([    
                        'name'                  => $request->input('name'),
                        'last_name'             => $request->input('last_name'),
                        'email_1'               => $request->input('email_1'),
                        'email_2'               => $request->input('email_2'),
                        'mail_active'           => $request->input('mail_active'),
                        'city'                  => $request->input('city'),
                        'state'                 => $request->input('state'),
                        'nation'                => $request->input('nation'),
                        'phone_1'               => $request->input('phone_1'),
                        'whatsapp_active'       => $request->input('whatsapp_active'),
                        'remarks'               => $request->input('remarks'),
                        'reservation_agreement' => $request->input('reservation_agreement')
                    ]);
                $ClientId = ($Client->id);    // Here I need recover specific data : Id_Client
                // dd($ClientId);
                    /*
                    $key_reservation = 'Xcaret-0001-301221-1832-1002';
                    $random = Str::random(40);
                    $slug = Str::slug('Laravel 5 Framework', '-');
                    $converted = Str::substr('The Laravel Framework', 4, 7);
                    $string = Str::of('  Laravel  ')->trim();
                    */

                    $reservation = reservation::create([ 
                        'tours_id'          => $request->input('tours_id'),
                        'clients_id'        => $ClientId,
                        'reservation_date'  => $request->input('reservation_date'),
                        'total_adults'      => $request->input('total_adultss'),
                        'total_kids'        => $request->input('total_kidss'),
                        'number_adults'     => $request->input('n_adults'),
                        'number_kids'       => $request->input('n_kids'),
                        'total'             => $request->input('Grand_totall')
                    ]);
                    $ReservationId = ($reservation->id); 

                    $_1title            = Str::limit($request->input('title'),10,'...');   //10 for the moment, 
                    $_2tours_id         = $request->input('tours_id');
                    $_3reservation_id   = $ReservationId;
                    $_4reservation_date = $request->input('reservation_date');
                    $_5clients_id       = $ClientId;
                    $key_reservation    = ' / '.$_1title.' / '.$_2tours_id.' / '.$_5clients_id.' / '.$_4reservation_date.' / '.$_3reservation_id.' / ';

                    $reservation = reservation::where('id',$ReservationId)->update([
                        'key_reservation' => $key_reservation
                    ]);

                    $reservation_updated = reservation::find($ReservationId);

                    return view('tours.paypal',[
                        'title_tour'      => $request->input('title'),
                        'name_client'     => $request->input('name'),
                        'last_name_client'=> $request->input('last_name'),
                        'email_1_client'  => $request->input('email_1'),
                        'reservation'     => $reservation_updated,
                        
                    ]);
        }
    
    
    
    





            


                
                
        // return redirect()->route('clients.index')->with('message', 'Client Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
