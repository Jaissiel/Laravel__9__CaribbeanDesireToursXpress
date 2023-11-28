@extends('layouts.admin')
@section('detail_admin')






<div id="enjoyers01" class="container header font__Griffy P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> E N J O Y E R S </h1>
            </div>

            <div class="table-responsive">
                <table id="tableejoyers" class="display table  " style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th><a href="enjoyers/create">Add new enjoyer</a> </th>
                            <th></th>
                            <th></th>
                            <th>ENJOYERS &nbsp;<mark>2022</mark> </th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="">
                            <th class=""> Nombre </th>
                            <th class=""> Enjoyer/user </th>
                            <th class=""> E-mail </th>
                            <th class=""> Avtive </th>
                            <th class=""> Observations </th>
                            <th class=""> Action </th>
                            <th class=""> Action </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody > 
                        
                        @foreach ($enjoyers as $enjoyer )
                            <tr class="">
                                <td class=""> {{ $enjoyer->name }}  </td>
                                <td class=""> {{ $enjoyer->enjoyer }} </td>
                                <td class=""> {{ $enjoyer->email }} </td> 
                                <td class=""> {{ $enjoyer->active }} </td>
                                <td class=""> {{ $enjoyer->observations }} </td>                                                                                <!-- enjoyers/{enjoyer}/edit -->
                                <td class=""><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/editar.png') }}" title="Editar" height="20px" width="15px"><a href="/enjoyers/{{ $enjoyer->id }}/edit">EDIT</a> </td>
                                <td class=""><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/cancelar.png') }}" title="Delete" height="20px" width="15px"><a href="/edita/{{ $enjoyer->id }}">DELETE</a> </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   

            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function() {
                $('#tableejoyers').DataTable ( {
                //  "pageLength": 2
                    "paging": false,
                //"searching": false,
                    "order": [[ 1, "asc" ]]
                    } )
                    
                } );
            </script>

   

            <hr>
          
            
    </div>
</div>    



@endsection