@extends('layouts.admin')
@section('detail_admin')


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<form action="/enjoyers/{{ $enjoyers->id }}" method="POST" >
    @csrf
    @method('PUT')


<div id="tours" class="container-fluid header font__Griffy P_center" style="margin-top:0px">
    <div class="row" style="padding:10px;background-color: #d9edf7;margin-bottom: 20px;">

        <div class="col-md-12" > 
            <?php
            $today = date("d-m-Y");
            $today1 = date("d-m-Y",strtotime($today."+ 1 day"));
            ?>
            <div>
                <hr>
                <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                    <label> ::::: EDIT ENJOYERS/USERS ::::: <?php  echo "$today"; ?></label>
                </p>
                <hr>
            </div>
        </div>

        
        <div class="col-md-6">
                <label for="titulo">Namee.  </label>
                    <input placeholder="" autofocus id="name" name="name" class="form-control" type="text" value="{{ $enjoyers->name }}" required  >
            </div>
            <div class="col-md-6">
                    <label for="semblanza">Enjoyer/User </label>
                    <input placeholder="" id="enjoyer" name="enjoyer" class="form-control" type="text" value="{{ $enjoyers->enjoyer }}">
                    
        </div>
        <div class="col-md-6">
            <label for="itinerario">Password. </label>
            
            <input placeholder="" id="passsword" name="passsword" class="form-control" type="text" value="{{ $enjoyers->passswword }}">
        </div>

        
        <div class="col-sm-6">
            <label for="descripcion">Email.  </label>
            <input placeholder="" id="email" name="email" class="form-control" type="text" value="{{ $enjoyers->email }}">
        
        </div>
        
        <div class="form-check col-sm-2">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="active" value="{{ $enjoyers->active }}"> Active
            </label>
        </div>
        
        <div class="form-group  col-sm-10">
            <label for="observaciones" class="label-form">Observations.</label>
            <textarea id="observations" name="observations" class="form-control"  value=""  size=10 rows=3 cols=35  >{{ $enjoyers->observations }} </textarea>
        </div>




        




       <div class="form-group  col-sm-6" >
        <label for="guardar" class="label-form">&nbsp;</label><br>
        
        <button type="submit" class="btn btn-primary">::::: G U A R D A R :::::</button>
    </div>
                                       
        <div class="form-group  col-sm-6" >
        <label for="reset" class="label-form">&nbsp;</label><br>
         <input type="reset" class="btn btn-primary"  value=" ::::: R E S E T ::::: ">
        </div>



		
    </div>
                        
    
</div>


</form>


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	







@endsection