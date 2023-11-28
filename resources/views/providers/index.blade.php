@extends('layouts.admin')
@section('detail_admin')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<div id="enjoyers01" class="container header font__Griffy P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> P R O V I D E R S </h1>
            </div>

            <div class="table-responsive">
                <table id="table_providers" class="display table  " style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th><a href="providers/create">Add new Provider</a> </th>
                            <th></th>
                            <th></th>
                            <th>PROVIDERS &nbsp;<mark>2022</mark> </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="">
                            <th class=""> Name </th>
                            <th class=""> Corporate Name </th>
                            <th class=""> Description </th>
                            <th class=""> Telephone </th>
                            <th class=""> Cell Phone </th>
                            <th class=""> Web Page </th>
                            <th class=""> Email 1 </th>
                            <th class=""> Email 2 </th>
                            <th class=""> Contact name 1 </th>
                            <th class=""> Contact name 2 </th>
                            <th class=""> Address </th>
                            <th class=""> Logo </th>
                            <th class=""> Slogan </th>
                            <th class=""> Commentaries </th>
                            <th class=""> Action </th>
                            <th class=""> Action </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody > 
                        
                        @foreach ($providers as $provider )
                            <tr class="">
                                <td class=""> {{ $provider->name }}  </td>
                                <td class=""> {{ $provider->corporate_name }} </td>
                                <td class=""> {{ $provider->description }} </td> 
                                <td class=""> {{ $provider->telephone }} </td>
                                <td class=""> {{ $provider->cell_phone }} </td>
                                <td class=""> {{ $provider->web_page }} </td>
                                <td class=""> {{ $provider->email_1 }} </td>
                                <td class=""> {{ $provider->email_2 }} </td>
                                <td class=""> {{ $provider->contact_name_1 }} </td>
                                <td class=""> {{ $provider->contact_name_2 }} </td>
                                <td class=""> {{ $provider->address }} </td>
                                <td class=""> {{ $provider->path_image_logo }} </td>
                                <td class=""> {{ $provider->slogan }} </td>
                                <td class=""> {{ $provider->commentaries }} </td>                                                                                <!-- enjoyers/{enjoyer}/edit -->
                                <td class=""><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/editar.png') }}" title="Editar" height="20px" width="15px"><a href="/providers/{{ $provider->id }}/edit">EDIT</a> </td>
                                                            
                                <td class="">  

                                <form action="/providers/{{ $provider->id }}" method="POST"  >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete {{ $provider->name }}</button>
                                </form>
                            </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   

            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function() {
                $('#table_providers').DataTable ( {
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