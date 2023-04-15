

@extends('layouts.admin')

@section('content')
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{trans('main.audience')}}</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                    <li class="breadcrumb-item active">{{trans('main.audience')}}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="add-audience.html">
                    <a href="{{route('audience.create')}}" class="btn btn-primary waves-effect waves-light" style="background-color:#EBB02D; border-style:none;"><i class=" fas fa-plus-circle"></i> Ajouter</a>
                </a>
                <br><br>
                <label for="validationCustom01" class="form-label">Filtre</label>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                    <form action="{{route('audience.filter')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Date début</label>
                                                    <input type="date" max="{{date('Y-m-d')}}" class="form-control" name="date_debut" placeholder="City" >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date fin</label>
                                                    <input type="date" max="{{date('Y-m-d')}}" class="form-control" name="date_fin" id="validationCustom05" placeholder="Zip" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Wilaya</label>
                                                    <select class=" select form-select" id="wilaya_select" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($wilayas as $wilaya)
                                                            <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
                                                                {{$wilaya->name}}   
                                                            </option>
                                                        @endforeach

                                                    </select>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <br>
                                                    <button class="btn btn-primary" type="submit" style="background-color:#EBB02D; border-style:none; margin-top:5px;">Filtre</button>
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
                                            <th>Date de l'audience</th>
                                            <th>Codifcation</th>
                                            <th>Citoyen</th>
                                            <th>Wilaya</th>
                                            <!--<th>Secteur</th>-->
                                            <!--<th>Administration</th>-->
                                            <!--<th>Sujet</th>-->
                                            <th>Action</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        @foreach($audiences as $audience)
                                        <tr style="cursor: pointer;" data-href="{{route('audience.edit',['audience'=>$audience->id])}}">
                                                <!--<td>{{$audience->id}}</td>-->
                                                <td>{{$audience->date_audience ?? ''}}</td>
                                                <td>{{$audience->code_initial ?? ''}}</td>
                                                <td>                                                    
                                                    {{$audience->client()['nom'] ?? 'non identifie'}}
                                                    {{$audience->client()['prenom'] ?? 'non identifie'}}
                                                </td>
                                                <td>{{$audience->wilaya()['name'] ?? ''}}</td>
                                                <!--<td>{{$audience->secteur()}}</td>-->
                                                <!--<td>{{$audience->getadministration()}}</td>-->
                                                <!--<td>{{$audience->sujet ?? ''}}</td>-->
                                                <td>
                                                    <!--
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="{{route('audience.edit',['audience'=>$audience->id])}}">
                                                        <i class=" fas fa-edit"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="{{route('audience.destroy',['audience'=>$audience->id])}}"
                                                    onclick="return confirm('Confirmer ?')"
                                                    >
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
-->
                                                            <a href="{{route('audience.edit',['audience'=>$audience->id])}}"
                                                                class="text-white btn btn-primary">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>  
                                                            <a href="{{route('audience.destroy',['audience'=>$audience->id])}}"
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