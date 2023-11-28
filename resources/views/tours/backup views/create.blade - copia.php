@extends('layouts.layout')
@section('content')


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:0px">
    <div>
        <p>Add tour</p>
    </div>
</div>

  
<div id="tours" class="container-fluid header font__Griffy P_center" style="margin-top:5px">

    <div class="row" >
        <div class="col-sm-12" >
            
                
                <div>
                    <h4>+----------+----------------+-----------------+---------------+</h4>
                    <form action="/tours" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" placeholder="Title">
                        <input type="text" name="description" placeholder="Description">
                        <input type="text" name="price" placeholder="Price">
                        
                        
                        <select name="providers_id">
                            <option value="0">Select option</option>    
                        @foreach ($providerss as $provideer )    
                            <option value="{{ $provideer->id }}">{{ $provideer->description }}</option>
                        @endforeach
                        </select>

                        <input type="file" name="image_path" >
                        <button type="submit">Submit</button>
                    </form>
                </div>
            
        </div>    
    </div>
</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	







@endsection