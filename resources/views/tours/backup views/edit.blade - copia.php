@extends('layouts.layout')
@section('content')


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-black font__Griffy" style="margin-top:0px">
    <div>
        <p>Edit Tour</p>
    </div>
</div>

  
<div id="tours" class="container-fluid header font__Griffy P_center" style="margin-top:5px">

    <div class="row" >
        <div class="col-sm-12" >
            
                
                <div>
                    <h4>******************</h4>
                    <form action="/tours/{{ $tour->id }}" method="POST" >
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" value="{{ $tour->title }}">
                        <input type="text" name="description" value="{{ $tour->description }}" >
                        <input type="text" name="price" value="{{ $tour->price }}" >
                        <input type="text" name="providers_id" value="{{ $tour->providers_id }}" >
                        <input type="text" name="image_path" value="{{ $tour->image_path }}">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            
        </div>    
    </div>
</div>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	







@endsection