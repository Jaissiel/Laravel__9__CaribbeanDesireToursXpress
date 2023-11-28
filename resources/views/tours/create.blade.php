@extends('layouts.admin')
@section('detail_admin')


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<form action="/tours" method="POST" enctype="multipart/form-data">
    @csrf

  
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
                    <label> ::::: ALTA DE TOURS ::::: <?php  echo "$today"; ?></label>
                </p>
                <hr>
            </div>
        </div>


        <div class="col-md-6">
                <label for="titulo">Nombre/Título del Tour.  </label>
                    <input placeholder="Título completo del nuevo tour" autofocus id="titulo" name="titulo" class="form-control" type="text" value="" required  >
            </div>
            <div class="col-md-6">
                    <label for="semblanza">Semblanza... </label>
                    <textarea id="semblanza" name="semblanza" class="form-control"  value=""  size=10 rows=2 cols=35  > </textarea>
        </div>
        
        <div class="col-sm-6">
            <label for="descripcion">Descripción.  </label>
            <textarea id="descripcion" name="descripcion" class="form-control"  value=""  size=10 rows=4 cols=35  > </textarea>
        </div>
        <div class="col-md-6">
                <label for="itinerario">Itinerario. </label>
                <textarea id="itinerario" name="itinerario" class="form-control"  value=""  size=10 rows=4 cols=35  > </textarea>
        </div>


        <div class="col-sm-4">
            <label for="incluye">Incluye.</label>
        <textarea id="incluye" name="incluye" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="col-sm-4">
            <label for="no_incluye" class="label-form">No Incluye.</label>
        <textarea id="no_incluye" name="no_incluye" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="col-sm-2">
            <label for="precio_adulto">Precio Adulto.</label>   
            <input placeholder="Moneda Nacional" id="precio_adulto" name="precio_adulto" class="form-control" type="text" value="">
        </div>
        <div class="col-sm-2">
            <label for="precio_infante">Precio Infante.</label>   
            <input placeholder="Moneda Nacional" id="precio_infante" name="precio_infante" class="form-control" type="text" value="">
        </div>



        <div class="col-sm-4">
            <label for="sugerencias">Sugerencias.</label>
        <textarea id="sugerencias" name="sugerencias" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="col-sm-4">
            <label for="informacion_adicional" class="label-form">Información Importante.</label>
        <textarea id="informacion_adicional" name="informacion_adicional" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="col-sm-4">
            <label for="transportacion" class="label-form">Información Transportación.</label>
        <textarea id="transportacion" name="transportacion" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>


        <div class="col-sm-1">
            <label for="activo" class="label-form">Activo.</label>
            <input type="checkbox" name="activo" class="form-control" value="1" checked> 
        </div>
        <div class="col-sm-1">
            <label for="paqueteable" class="label-form">Paquete.</label>
        <input type="checkbox" name="paqueteable" class="form-control" value="1" checked> 
        </div>
        <div class="form-group  col-sm-10">
            <label for="observaciones" class="label-form">Observaciones.</label>
            <textarea id="observaciones" name="observaciones" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>




        <div class="col-sm-3">
            <label for="types_id">Tipo de tour.</label>
            <select name="types_id" class="form-control">
           
            @foreach ($typess as $typess )    
            <option value="{{ $typess->id }}">{{ $typess->description }}</option>
        @endforeach
          </select>
        </div> 
        
        <div class="col-sm-3">
            <label for="providers_id">Proveedores.</label>
            <select name="providers_id" class="form-control">
              
              @foreach ($providerss as $provideer )    
                            <option value="{{ $provideer->id }}">{{ $provideer->description }}</option>
                        @endforeach
          </select>
        </div>
        <div class="col-sm-3">
            <label for="locations_id ">Localidades. </label>
            <select name="locations_id" class="form-control">
             
              @foreach ($locationss as $locationss )    
                            <option value="{{ $locationss->id }}">{{ $locationss->description }}</option>
                        @endforeach
          </select>
        </div>
        <div class="col-sm-3">
            <label for="image_path" class="label-form">Imagen 1.</label>
            <input id="image_path" name="image_path" class="form-control"  type="file" >
           
        </div>



        <div class="col-sm-2">
            <label for="image_path1" class="label-form">Imagen 2.</label>
            <input id="image_path1" name="image_path1" class="form-control"  type="file" >
           
        </div>
        <div class="col-sm-2">
            <label for="image_path2" class="label-form">Imagen 3.</label>
            <input id="image_path2" name="image_path2" class="form-control"  type="file" >
           
        </div>
        <div class="col-sm-2">
            <label for="image_path3" class="label-form">Imagen 4.</label>
            <input id="image_path3" name="image_path3" class="form-control"  type="file" >
           
        </div>
        <div class="col-sm-2">
            <label for="image_path4" class="label-form">Imagen 5.</label>
            <input id="image_path4" name="image_path4" class="form-control"  type="file" >
           
        </div>
        <div class="col-sm-2">
            <label for="image_path5" class="label-form">Imagen 6.</label>
            <input id="image_path5" name="image_path5" class="form-control"  type="file" >
           
        </div>
        <div class="col-sm-2">
            <label for="image_path6" class="label-form">Imagen 7.</label>
            <input id="image_path6" name="image_path6" class="form-control"  type="file" >
           
        </div>




        <div class="col-md-12"> 
            <div>
                <hr>
                <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                    <label> ::::: English Version  ::::: </label>
                </p>
                <hr>
            </div>
        </div>	

        <div class="form-group  col-sm-6">
            <label for="title">Tour Title.  </label>
            <input placeholder="Full title of the new tour" autofocus id="title" name="title" class="form-control" type="text" value="" required  >
        </div>
        <div class="col-md-6  form-group">
                <label for="semblance">Semblance. </label>
                <textarea id="semblance" name="semblance" class="form-control"  value=""  size=10 rows=2 cols=35  > </textarea>
        </div>

        <div class="form-group  col-sm-6">
            <label for="description">Description.  </label>
            <textarea id="description" name="description" class="form-control"  value=""  size=10 rows=4 cols=35  > </textarea>
        </div>
        <div class="col-md-6  form-group">
                <label for="itinerary">Itinerary. </label>
                <textarea id="itinerary" name="itinerary" class="form-control"  value=""  size=10 rows=4 cols=35  > </textarea>
        </div>

        <div class="form-group  col-sm-4">
            <label for="includes">Include.</label>
            <textarea id="includes" name="includes" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="form-group  col-sm-4">
            <label for="without_include" class="label-form">No Include.</label>
            <textarea id="without_include" name="without_include" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="form-group  col-sm-2">
            <label for="adult_price">Adult Price.</label>   
            <input placeholder="Dollars" id="adult_price" name="adult_price" class="form-control" type="text" value="">
        </div>
        <div class="form-group  col-sm-2">
            <label for="infants_price">Infant Price.</label>   
            <input placeholder="Dollars" id="infants_price" name="infants_price" class="form-control" type="text" value="">
        </div>

        <div class="form-group  col-sm-4">
            <label for="suggestions">Suggestions.</label>
        <textarea id="suggestions" name="suggestions" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="form-group  col-sm-4">
            <label for="additional_info" class="label-form">Important Info.</label>
        <textarea id="additional_info" name="additional_info" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>
        <div class="form-group  col-sm-4">
            <label for="trasnportation" class="label-form">Transportation Info.</label>
        <textarea id="trasnportation" name="trasnportation" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
        </div>

        <div class="form-group  col-sm-12">
            <label for="observations" class="label-form">Observations.</label>
           <textarea id="observations" name="observations" class="form-control"  value=""  size=10 rows=3 cols=35  > </textarea>
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