<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ShowStoreRequest;
use App\Models\Country;


class ReservationController extends Controller
{
    
    public function reservation_1(ShowStoreRequest $request)  // is comming of show.blade method post
    {

        $request->validated();



       // dd ('OK');
        $id               = $request->input('id'); // tours_id
        $title            = $request->input('title');
        $reservation_date = $request->input('reservation_date');
        $semblanza        = $request->input('semblanza');

        $adult_price =   Str::of($request->input('adult_price'))->remove(',');
        $kids_price       = Str::of($request->input('kids_price'))->remove(',');
        
        $precio_adulto_00 = $request->input('precio_adulto_00'); //hidden
        $precio_infante_00 = $request->input('precio_infante_00'); //hidden
        $n_adults         = $request->input('adults');
        $n_kids           = $request->input('kids');
        $reservation_date = $request->input('reservation_date');
        //  dd($precio_adulto_00.'--'.$precio_infante_00.'--'.$n_adults.'--'.$n_kids);
        $total_adults    = floatval($precio_adulto_00) * floatval($n_adults);
        $total_adults    = floatval($total_adults);
        $total_kids      = floatval($precio_infante_00) * floatval($n_kids);
        $total_kids      = floatval($total_kids);
        $Grand_total     = $total_adults + $total_kids  ;
        $Grand_total     = floatval($Grand_total);
        //dd ($total_adults);
        //dd ($total_kids);

        $paiss = Country::all();

        return view('tours.reservation_1')->with([
            'paiss'            => $paiss,
            'id'               => $id,
            'title'            => $title,
            'reservation_date' => $reservation_date,
            'semblanza'        => $semblanza,
            'total_adultss'    => $total_adults,
            'total_kidss'      => $total_kids,
            'Grand_totall'     => $Grand_total,
            'n_adults'         => $n_adults,
            'n_kids'           => $n_kids,
        ]);



    }



    
    public function confirmation(ShowStoreRequest $request)  // is comming of paypal.blade.php 
    {
       // dd ('OK');
        $id               = $request->input('id'); // tours_id
        $title            = $request->input('title');
        $reservation_date = $request->input('reservation_date');
        $semblanza        = $request->input('semblanza');

        $adult_price =   Str::of($request->input('adult_price'))->remove(',');
        $kids_price       = Str::of($request->input('kids_price'))->remove(',');
        
        $precio_adulto_00 = $request->input('precio_adulto_00'); //hidden
        $precio_infante_00 = $request->input('precio_infante_00'); //hidden
        $n_adults         = $request->input('adults');
        $n_kids           = $request->input('kids');
        $reservation_date = $request->input('reservation_date');
        //  dd($precio_adulto_00.'--'.$precio_infante_00.'--'.$n_adults.'--'.$n_kids);
        $total_adults    = floatval($precio_adulto_00) * floatval($n_adults);
        $total_adults    = floatval($total_adults);
        $total_kids      = floatval($precio_infante_00) * floatval($n_kids);
        $total_kids      = floatval($total_kids);
        $Grand_total     = $total_adults + $total_kids  ;
        $Grand_total     = floatval($Grand_total);
        //dd ($total_adults);
        //dd ($total_kids);

        $paiss = Country::all();

        return view('tours.reservation_1')->with([
            'paiss'            => $paiss,
            'id'               => $id,
            'title'            => $title,
            'reservation_date' => $reservation_date,
            'semblanza'        => $semblanza,
            'total_adultss'    => $total_adults,
            'total_kidss'      => $total_kids,
            'Grand_totall'     => $Grand_total,
        ]);



    }


    
    
    



















}
