@extends('layouts.selected')
@section('detail_tours')




<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="SpaceMini font__Griffy" style="margin-top:0px">
    <div>
        <p>  <h4>Detalle del Tour: &nbsp;&nbsp;&nbsp;  {{ $tour->titulo }}  &nbsp;&nbsp;&nbsp;(paso 1 / 3) </h4> </p>
    </div>
</div>




<div class="container-fluid" id="parques" style="margin-top:0px">
    



    <div class="row">
        <div class="col-sm-3">
            <form action="/reservation_1" method="POST">
                @csrf   
                @method('GET') 
                <hr>                                                                                      
                <p><strong>Precio por Adulto  $: </strong><input type="text" name="adult_price" value=" {{ number_format($tour->precio_adulto, 2,".","," ) }}" readonly class="form-control form-control-sm"></p>
                <p><strong>Precio por Infante $: </strong><input type="text" name="kids_price" value=" {{ number_format($tour->precio_infante, 2,".",",") }}" readonly  class="form-control form-control-sm"> </p>
                
                <p><strong> Participantes: "Adultos"</strong>
                    <select id="adults" name="adults" size="1" class="form-select form-select-sm">
                        <option value="1">1 Adulto</option>
                        <option selected value="2">2 Adultos</option>
                        <option value="3">3 Adultos</option>
                        <option value="4">4 Adultos</option>
                        <option value="5">5 Adultos</option>
                        <option value="6">6 Adultos</option>
                        <option value="7">7 Adultos</option>
                        <option value="8">8 Adultos</option>
                        <option value="9">9 Adultos</option>
                        <option value="10">10 Adultos</option>
                    </select>
                </p>
                <p><strong>Participantes"Infantes"</strong>
                    <select id="kids" name="kids" size="1" class="form-select form-select-sm">
                        <option value="0">0 infantes</option>
                        <option selected value="1">1 infante</option>
                        <option value="2">2 infantes</option>
                        <option value="3">3 infantes</option>
                        <option value="4">4 infantes</option>
                        <option value="5">5 infantes</option>
                        <option value="6">6 infantes</option>
                        <option value="7">7 infantes</option>
                        <option value="8">8 infantes</option>
                        <option value="9">9 infantes</option>
                        <option value="10">10 infantes</option>

                    </select>
                </p>
                <p>@if ($errors->any())
                    <div class="SpaceMini text-white font__Griffy" style="margin-top:0px" >
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
                    <strong>"Seleccione Fecha del Tour"</strong>
                    <input placeholder="Fecha Tour" type="text" id="litepicker1" name="reservation_date" size="10" class="form-control form-control-sm">
                </p>
                <hr>
                    <input type="hidden" name="id" value="{{ $tour->id }}">
                    <input type="hidden" name="title" value="{{ $tour->titulo }}" >
                    <input type="hidden" name="semblanza" value="{{ $tour->semblanza }}">
                    <input type="hidden" name="precio_adulto_00" value="{{ $tour->precio_adulto }}">
                    <input type="hidden" name="precio_infante_00" value="{{ $tour->precio_infante }}">

                    
                    
                    <!--<input type="submit" value="::::: CONTINUAR CON LA RESERVACIÓN :::::" class="form-control btn btn-primary">-->
                    <input type="submit" value="::::: CONTINUAR CON LA RESERVACIÓN :::::" class="form-control btn btn-primary button-3d">
                    
                    
                    <hr>
            </form>
        </div>
        <div class="col-sm-9">

            <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ul class="carousel-indicators">
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button></li>
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button></li>
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button></li>
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button></li>
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button></li>
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button></li>
                    <li><button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active" > 
                        <img src="{{ asset('images/img_tours/'.$tour->image_path) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img src="{{ asset('images/img_tours/'.$tour->image_path1) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img src="{{ asset('images/img_tours/'.$tour->image_path2) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img src="{{ asset('images/img_tours/'.$tour->image_path3) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p><!-- Vamonos de viaje a Cancun, ven y mueve ese bum bum. --></p>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img src="{{ asset('images/img_tours/'.$tour->image_path4) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p> 
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img src="{{ asset('images/img_tours/'.$tour->image_path5) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img src="{{ asset('images/img_tours/'.$tour->image_path6) }}" alt="Cancun" class="d-block" style="width:100%" height="500">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>


        </div>

    </div>




    <div class="row" >
        <div class="col-sm-3 nav nav-pills bg-primary text-white" >
            <table>
                <a class="nav-link active" data-bs-toggle="pill" href="#home1"> <button type="button" class="btn btn-primary"><i class="fas fa-hiking" style='font-size:18px'></i><u> Descripción</u></button></a>
                <a class="nav-link" data-bs-toggle="pill" href="#menu11"><button type="button" class="btn btn-primary"><i class="fas fa-hand-holding-heart" style='font-size:18px'></i><u> Incluye</u></button></a>
                <a class="nav-link" data-bs-toggle="pill" href="#menu31"><button type="button" class="btn btn-primary"><i class="fab fa-centos" style='font-size:18px'></i><u> No incluye</u></button></a>
                <a class="nav-link" data-bs-toggle="pill" href="#menu41"><button type="button" class="btn btn-primary"><i class="fab fa-earlybirds" style='font-size:18px'></i><u> Sugerencias</u></button></a>
                <a class="nav-link" data-bs-toggle="pill" href="#menu51"><button type="button" class="btn btn-primary"><i class="fas fa-truck-monster" style='font-size:18px'></i><u> Transporte</u></button></a>
                <a class="nav-link" data-bs-toggle="pill" href="#menu61"><button type="button" class="btn btn-primary"><i class="fab fa-laravel" style='font-size:18px'></i><u> Precios</u></button></a>
            </table>
        </div>

        <div class="col-sm-9 bg-primary text-white " >

            <div class="tab-content ">
                <div id="home1" class="container tab-pane active"><br>
                    <h3>Descripción</h3>
                    <p> 
                        {{ $tour->descripcion }}
                    </p>
                </div>
                <div id="menu11" class="container tab-pane fade"><br>
                    <h3>Incluye</h3>
                    <p>  {{ $tour->incluye }}   </p>
                </div>

                <div id="menu31" class="container tab-pane fade"><br>
                <h3>No Incluye</h3>
                    <p> {{ $tour->no_incluye }}                 </p>
                </div>

                <div id="menu41" class="container tab-pane fade"><br>
                <h3>Sugerencias</h3>
                    <p> {{ $tour->sugerencias }}            </p>
                </div>

                <div id="menu51" class="container tab-pane fade"><br>
                    <h3>Transportación</h3>
                    <p>  {{ $tour->transportacion }}         </p>

                </div>


                <div id="menu61" class="container tab-pane fade"><br>
                    <h3>Precios</h3>
                    <p>Adultos {{ $tour->precio_adulto }}  </p>
                    <p>Menores {{ $tour->precio_infante }}  </p>

                </div>



            </div>
        </div>
    </div>


</div>
        


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="SpaceMini text-white font__Griffy" style="margin-top:100px">
    <p>&nbsp;</p>
    </div>

@endsection