@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Clients</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Nouveaux </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                   
                    <a href="{{route('client.show.create')}}">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light">+ Ajouter Client</button>
                    </a>
                    <br>
                    <!--Filter-->
                    <br>
           
                    <!--Filter-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr >
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($clients as $client)
                                                <tr data-href="{{route('client.edit',['client'=>$client->id])}}">
                                                    <td>{{$client->id}}</td>
                                                    <td>{{$client->email}}</td>
                                                    <td>{{$client->password_text ?? ''}}</td>
                                                    
                                                    <td>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="{{route('client.edit',['client'=>$client->id])}}">
                                                            <i class=" fas fa-edit"></i>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="{{route('client.destroy',['client'=>$client->id])}}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>


                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

@endsection

@section('scripts')
<script>
            $('#scroll-vertical-datatable').on('click', 'tbody tr', function() {
                window.location.href = $(this).data('href');
            })    
</script>
@endsection

