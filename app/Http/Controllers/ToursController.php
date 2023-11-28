<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Provider;
use App\Models\type;
use App\Models\location;
use App\Models\View_Tours;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;




class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Example parameter received
    //public function index(Request $request , $id=0)
    public function index(Request $request)
    {
        //dd('OKaas');
        $providerss = Provider::all();
        $tours = NULL;
        if ( $request->has('providers_id')){
            //$tours = Tour::where ('providers_id',$request->providers_id)->get();
            $tours = View_Tours::where ('providers_id',$request->providers_id)->get();
        }
        else {
            //$tours = Tour::all();  // is necesary// like select * from tours
            //$tours = View_Tours::all();  // is necesary// like select * from tours -> It works good
            $tours = View_Tours::where ('activo',1)->get();
        }
        

        //$tour = Tour::where('id',$id)
        
        return view('tours.index',[
            'tours' => $tours,
            'providerss' => $providerss
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $providerss = Provider::all();
        $typess = Type::all();
        $locationss = Location::all();

        return view('tours.create',[
            'providerss' => $providerss,
            'typess' =>  $typess,
            'locationss' => $locationss
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  // is comming of http://tours.test/tours  method post
    {
       // dd('OKaas');
       // Tour is a model   

        //$newImageName = time().'-'.$request->title . '.' .$request->image_path->extension();
        $newImageName = time().'-0-'.$request->titulo . '.' .$request->image_path->extension();
        // for upload image wow
        $request->image_path->move(public_path('images/img_tours'),$newImageName);

        $newImageName1 = time().'-1-'.$request->titulo . '.' .$request->image_path1->extension();
        $request->image_path1->move(public_path('images/img_tours'),$newImageName1);
        $newImageName2 = time().'-2-'.$request->titulo . '.' .$request->image_path2->extension();
        $request->image_path2->move(public_path('images/img_tours'),$newImageName2);
        $newImageName3 = time().'-3-'.$request->titulo . '.' .$request->image_path3->extension();
        $request->image_path3->move(public_path('images/img_tours'),$newImageName3);
        $newImageName4 = time().'-4-'.$request->titulo . '.' .$request->image_path4->extension();
        $request->image_path4->move(public_path('images/img_tours'),$newImageName4);
        $newImageName5 = time().'-5-'.$request->titulo . '.' .$request->image_path5->extension();
        $request->image_path5->move(public_path('images/img_tours'),$newImageName5);
        $newImageName6 = time().'-6-'.$request->titulo . '.' .$request->image_path6->extension();
        $request->image_path6->move(public_path('images/img_tours'),$newImageName6);




        $tour = Tour::create([    
            'titulo' => $request->input('titulo'),
            'semblanza' => $request->input('semblanza'),
            'descripcion' => $request->input('descripcion'),
            'itinerario' => $request->input('itinerario'),
            'incluye' => $request->input('incluye'),
            'no_incluye' => $request->input('no_incluye'),
            'precio_adulto' => $request->input('precio_adulto'),
            'precio_infante' => $request->input('precio_infante'),
            'sugerencias' => $request->input('sugerencias'),
            'informacion_adicional' => $request->input('informacion_adicional'),
            'transportacion' => $request->input('transportacion'),
            'activo' => $request->input('activo'),
            'paqueteable' => $request->input('paqueteable'),
            'observaciones' => $request->input('observaciones'),
            'types_id' => $request->input('types_id'),
            'providers_id' => $request->input('providers_id'),
            'locations_id' => $request->input('locations_id'),
            'image_path' =>  $newImageName,
            'image_path1' =>  $newImageName1,
            'image_path2' =>  $newImageName2,
            'image_path3' =>  $newImageName3,
            'image_path4' =>  $newImageName4,
            'image_path5' =>  $newImageName5,
            'image_path6' =>  $newImageName6,
            'title' => $request->input('title'),
            'semblance' => $request->input('semblance'),
            'description' => $request->input('description'),
            'itinerary' => $request->input('itinerary'),
            'includes' => $request->input('includes'),
            'without_include' => $request->input('without_include'),
            'adult_price' => $request->input('adult_price'),
            'infants_price' => $request->input('infants_price'),
            'suggestions' => $request->input('suggestions'),
            'additional_info' => $request->input('additional_info'),
            'trasnportation' => $request->input('trasnportation'),
            'observations' => $request->input('observations')

            
        ]);

           


            //$price = $request->input('price');
            // only this line for send one mail from the controller
            Mail::to('xamanjay@gmail.com')->send(new ConfirmationMail($tour));
            

            return redirect('/tours');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);
        return view('tours.show')->with('tour', $tour);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //is necesary
        //$tour = Tour::find($id)->first();  // only one registry
        $tour = Tour::find($id);
       // dd($id);
     //  dd($tour);
        //remember   folder.file   <- is a path
        return view('tours.edit')->with('tour', $tour);
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
        $tour = Tour::where('id',$id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'providers_id' => $request->input('providers_id'),
            'image_path'  => $request->input('image_path')

        ]);
            return redirect('/tours');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();

        return redirect('/tours');
    }
}
