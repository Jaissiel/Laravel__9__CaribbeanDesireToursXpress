<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderStoreStoreRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $providers = Provider::all();
        return view('providers.index',[
            'providers' => $providers
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderStoreStoreRequest $request)
    {

        $request->validated();
      

        $newImageName = time().'-0-'.$request->name . '.' .$request->path_image_logo->extension();
        
        $request->path_image_logo->move(public_path('images'),$newImageName);

       $providers = Provider::create([    
        'name'                  => $request->input('name'),
        'corporate_name'        => $request->input('corporate_name'),
        'description'           => $request->input('description'),
        'telephone'             => $request->input('telephone'),
        'cell_phone'            => $request->input('cell_phone'),
        'web_page'              => $request->input('web_page'),
        'email_1'               => $request->input('email_1'),
        'email_2'               => $request->input('email_2'),
        'contact_name_1'        => $request->input('contact_name_1'),
        'contact_name_2'        => $request->input('contact_name_2'),
        'address'               => $request->input('address'),
        'path_image_logo'       => $newImageName,
        'slogan'                => $request->input('slogan'),
        'commentaries'          => $request->input('commentaries')
    ]);

    $providers = Provider::all();

    return view('providers.index',[
        'providers' => $providers
    ]);
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
        $providers = Provider::find($id);

        return view('providers.edit',[
                    'providers' => $providers
        ]);
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
        $newImageName = time().'-0-'.$request->name . '.' .$request->path_image_logo->extension();
        $request->path_image_logo->move(public_path('images'),$newImageName);

        $providers = Provider::where('id',$id)->update([    
            'name'                  => $request->input('name'),
        'corporate_name'        => $request->input('corporate_name'),
        'description'           => $request->input('description'),
        'telephone'             => $request->input('telephone'),
        'cell_phone'            => $request->input('cell_phone'),
        'web_page'              => $request->input('web_page'),
        'email_1'               => $request->input('email_1'),
        'email_2'               => $request->input('email_2'),
        'contact_name_1'        => $request->input('contact_name_1'),
        'contact_name_2'        => $request->input('contact_name_2'),
        'address'               => $request->input('address'),
        'path_image_logo'       => $newImageName,
        'slogan'                => $request->input('slogan'),
        'commentaries'          => $request->input('commentaries')
            
        ]);

        $providers = Provider::all();

        return view('providers.index',[
            'providers' => $providers
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $Provider)
    {
        $Provider->delete();
        return redirect()->route('providers.index')->with('message', ' Deleted Successfully');
    }
}
