@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Doléances</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active"> Doléances</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <a href="{{route('doleance.create')}}">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light" style="background-color:#009640; border-style:none;"><i class=" fas fa-plus-circle"></i> Ajouter </button>
                    </a>
                    <br>
                    <!--Filter-->
                    <br>
                    <!--Filter-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('doleance.filter')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Date début</label>
                                                    <input name="date_debut" value="" type="date" class="form-control" id="validationCustom04"  >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date fin</label>
                                                    <input name="date_fin" value="" type="date" class="form-control" id="validationCustom05" placeholder="Zip" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Wilaya</label>
                                                    <select class=" select2 form-control" id="wilaya_select" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($wilayas as $wilaya)
                                                            <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" >
                                                                {{$wilaya->name}}   
                                                            </option>
                                                        @endforeach

                                                    </select>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <br>
                                                    <button class="btn btn-primary" type="submit" style="background-color:#009640; border-style:none;">Filtre</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!--Filter-->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr >
                                                <!--<th>ID</th>-->            
                                                <th>Date doléance</th>
                                                <th>Code </th>
                                                <th>Wilaya</th>
                                                <th>Secteur</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($doleances as $doleance)
                                                <tr  style="cursor: pointer;" data-href="{{route('doleance.edit',['doleance'=>$doleance->id])}}">
                                                    <!--<td>{{$doleance->id}}</td>-->
                                                    <td>{{$doleance->datedoleance ?? ''}}</td>
                                                    <td>{{$doleance->code_initial ?? ''}}</td>
                                                    <td>{{$doleance->getelt("wilaya") ?? ''}}</td>
                                              
                                                    <!--<td>{{$doleance->titre ?? ''}}</td>-->
                                                    <!--<td>{{$doleance->getelt("client") ?? ''}}</td>-->
                                                    <!--<td>{{$doleance->getelt("daira") ?? ''}}</td>-->
                                                    <!--<td>{{$doleance->getelt("commune") ?? ''}}</td>-->
                                                    <!--<td>{{$doleance->getelt("typerequete") ?? ''}}</td>-->
                                                    <td>{{$doleance->getelt("secteur") ?? ''}}</td>
                                                    <!--<td>{{$doleance->administration ?? ''}}</td>-->
                                                    <!--<td>{{$doleance->getelt("sujet") ?? ''}}</td>-->
                                                    <td>
                                                        <!--
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="{{route('requete.edit',['requete'=>$doleance->id])}}">
                                                            <i class=" fas fa-edit"></i>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;

                                                        <a href="{{route('requete.destroy',['requete'=>$doleance->id])}}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
-->
                                                            <a href="{{route('doleance.edit',['doleance'=>$doleance->id])}}""
                                                                class="text-white btn btn-primary">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>  
                                                            <a href="{{route('doleance.destroy',['doleance'=>$doleance->id])}}""
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
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

