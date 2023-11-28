<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\view_tours;
use App\Mail\FinalConfirmationMail;
use Illuminate\Support\Facades\Mail;
use App\Models\reservation;
use App\Models\ViewGreatReservation;

class ConfirmationController extends Controller
{
    


    public function finalconfirmation($xParameterIdReservation, $xEmail)  // is comming of ... paypal.blade.php  OR   mp.php 
    {


        
        $reservation = reservation::where('id',$xParameterIdReservation)->update([
            'status_id' => 2
        ]);                                                                                  //  Change of status_id in reservations table From 1 to 2:Paid

        $ViewGreatReservation = ViewGreatReservation::find($xParameterIdReservation);       //$ViewGreatReservation = ViewGreatReservation::where ('reservation_id',$xParameterIdReservation)->get();
        // dd($ViewGreatReservation);
        
        Mail::to($xEmail)->bcc('xamanjay@gmail.com')->send(new FinalConfirmationMail($ViewGreatReservation)); /* ConfirmationMail: 02  */ // only this line for send one mail from the controller //$price = $request->input('price');
        
        
        //Mail::to($xEmail)->send(new FinalConfirmationMail($ViewGreatReservation));




        return view('tours.confirmation',[
            'viewgreatreservation'     => $ViewGreatReservation,
            
        ]);




        


        
        return $xParameterIdReservation;  // ✔ Yeah its the correct id of reservation here!!

        // return redirect('/tours');   // here new route for info of confirmation tour.
    }

}
