

@extends('layouts.admin')

@section('content')
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Audiences</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                    <li class="breadcrumb-item active">Audiences</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <a href="add-audience.html">
                    <a href="{{route('audience.create')}}" class="btn btn-primary waves-effect waves-light">+ Ajouter Audience</a>
                </a>
                <br><br>
                <label for="validationCustom01" class="form-label">Filtre</label>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                    
                            <form action="{{route('requete.filter')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Date début</label>
                                                    <input name="date_debut" value="{{$date_debut}}" type="date" class="form-control" id="validationCustom04"  >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date fin</label>
                                                    <input name="date_fin" value="{{$date_fin}}" type="date" class="form-control" id="validationCustom05" placeholder="Zip" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Wilaya</label>
                                                    <select class=" select2 form-control" id="wilaya_select" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($wilayas as $wilaya)
                                                            <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" @if($_wilaya == $wilaya->id) selected @endif>
                                                                {{$wilaya->name}}   
                                                            </option>
                                                        @endforeach

                                                    </select>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <br>
                                                    <button class="btn btn-primary" type="submit">Filtre</button>

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
                                        <tr>
                                            <th>ID</th>
                                            <th>Sujet</th>
                                            <th>Codifcation</th>
                                            <th>Citoyen</th>
                                            <th>Action Audience</th>
                                            <th>Secteur</th>
                                            <th>Chargé de l'audience</th>
                                            <th>Date de l'audience</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($audiences as $audience)
                                        <tr data-href="{{route('audience.edit',['audience'=>$audience->id])}}">
                                            <a href="{{route('audience.edit',['audience'=>$audience->id])}}">
                                                <td>{{$audience->id}}</td>
                                                <td>{{$audience->sujet ?? ''}}</td>
                                                <td>{{$audience->code_initial ?? ''}}</td>
                                                <td>
                                                    
                                                    {{$audience->client()['nom'] ?? 'non identifie'}}
                                                    {{$audience->client()['prenom'] ?? 'non identifie'}}
                                                </td>

                                                <td>{{$audience->actione()}}</td>
                                                <td>{{$audience->secteur()}}</td>
                                                <td>
                                                    {{$audience->charger()['nom'] ?? 'non identifie'}}
                                                    {{$audience->charger()['prenom'] ?? 'non identifie'}}
                                                </td>
                                                
                                                <td>{{$audience->date_audience ?? ''}}</td>
                                                <td>
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
                                                </td>

                                            </a>
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