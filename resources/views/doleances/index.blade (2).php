@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Requêtes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Nouveaux Requêtes</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <a href="{{route('requete.create')}}">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light">+ Ajouter Requete</button>
                    </a>
                    <br>
                    <!--Filter-->
                    <br>
                    <!--Filter-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Date début</label>
                                                    <input type="date" class="form-control" id="validationCustom04" placeholder="City" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date fin</label>
                                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Wilaya</label>
                                                    <select class="form-select" id="validationCustom03" required>
                                                        <option selected disabled value="">Choose...</option>
                                                        <option>...</option>
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
                                            <tr >
                                                <th>ID</th>
                                                <th>Titre</th>
                                                <th>Code Initial</th>
                                                <th>Client</th>
                                                <th>Wilaya</th>
                                                <th>Daira</th>
                                                <th>Commune</th>
                                                <th>Type de Requête</th>
                                                <th>Secteur</th>
                                                <th>Administration</th>
                                                <th>Sujet</th>
                                                <th>Date</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($requetes as $requete)
                                                <tr data-href="{{route('requete.edit',['requete'=>$requete->id])}}">
                                                    <td>{{$requete->id}}</td>
                                                    <td>{{$requete->titre ?? ''}}</td>
                                                    <td>{{$requete->code_initial ?? ''}}</td>
                                                    <td>{{$requete->getelt("client") ?? ''}}</td>
                                                    <td>{{$requete->getelt("wilaya") ?? ''}}</td>
                                                    <td>{{$requete->getelt("daira") ?? ''}}</td>
                                                    <td>{{$requete->getelt("commune") ?? ''}}</td>
                                                    <td>{{$requete->getelt("typerequete") ?? ''}}</td>
                                                    <td>{{$requete->getelt("secteur") ?? ''}}</td>
                                                    <td>{{$requete->administration ?? ''}}</td>
                                                    <td>{{$requete->getelt("sujet") ?? ''}}</td>
                                                    <td>{{$requete->daterequete ?? ''}}</td>
                                                    <td>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="{{route('requete.edit',['requete'=>$requete->id])}}">
                                                            <i class=" fas fa-edit"></i>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="{{route('requete.destroy',['requete'=>$requete->id])}}">
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

