@extends('layouts.layout')
@section('content')

<div style="margin-bottom:0px">
    <h1>  Start </h1>
</div>

<hr>
<div class="Space text-blue font_lato" style="margin-top:0px">
    
    <form action="/tours" method="GET">
        @csrf
        @method('head')

            <div>
                <a href="tours/create">Add a new tour &rarr;</a>
            </div>
            <div>
                <select name="providers_id">
                    <option value="0">Select provider</option>    
                @foreach ($providerss as $provideer )    
                    <option value="{{ $provideer->id }}">{{ $provideer->description }}</option>
                @endforeach
                </select>
                <button type="submit"> Send &rarr; </button>
            </div>
        </form>
</div>
        @foreach ($tours as $tour )
            <div>    
                <hr> <img src="{{ asset('images/'.$tour->image_path) }}" width="200" height="150">
                Tour Title :  {{ $tour->title }}|| Provider: {{ $tour->providers_description }} || <a href="tours/{{ $tour->id }}/edit">Edit &rarr;</a> || <a href="tours/{{ $tour->id }}" >Detail </a>
                        
                
                    <form action="/tours/{{ $tour->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" >Delete &rarr; </button>
                    </form>  
                <hr>  
            </div>
        @endforeach
   

@endsection





