<?php

namespace App\Http\Controllers;
use App\Models\Enjoyer;

use Illuminate\Http\Request;

class Enjoyers_Controller extends Controller
{
    
    public function index(Request $request)
    {
        $enjoyers = Enjoyer::all();

        return view('enjoyers.index',[
            'enjoyers' => $enjoyers
        ]);


    }

   
    public function create()
    {
        //dd ('entrus');
        return view('enjoyers.create');
    }

    
    public function store(Request $request)
    {


        $enjoyers = Enjoyer::create([    
            'name'          => $request->input('name'),
            'enjoyer'       => $request->input('enjoyer'),
            'email'         => $request->input('email'),
            'passswword'    => $request->input('passsword'),
            'active'        => $request->input('active'),
            'observations'  => $request->input('observations'),
        ]);

        $enjoyers = Enjoyer::all();

        return view('enjoyers.index',[
            'enjoyers' => $enjoyers
        ]);
        

    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $enjoyers = Enjoyer::find($id);

        return view('enjoyers.edit',[
            'enjoyers' => $enjoyers
        ]);
       // dd ($enjoyers);
      //  return view('enjoyers.edit')->with('enjoyers', $enjoyers);
    }

    
    public function update(Request $request, $id)
    {
        

        $enjoyers = Enjoyer::where('id',$id)->update([    
            'name'          => $request->input('name'),
            'enjoyer'       => $request->input('enjoyer'),
            'email'         => $request->input('email'),
            'passswword'    => $request->input('passsword'),
            'active'        => $request->input('active'),
            'observations'  => $request->input('observations'),
        ]);


        $enjoyers = Enjoyer::all();

        return view('enjoyers.index',[
            'enjoyers' => $enjoyers
        ]);
    }

    
    public function destroy($id)
    {
        //
    }
}
