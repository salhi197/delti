@extends('layouts.admin')

@section('content')

<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Nouveaux Requêtes</h4>

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

                    <!--Filter-->
                    <label for="validationCustom01" class="form-label">Filtre</label>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" action="{{route('audience.filter')}}" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label  class="form-label">Date début</label>
                                                    <input type="date" name="date_debut" value="{{$date_debut ?? ''}}" class="form-control"  placeholder="City" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label  class="form-label">Date fin</label>
                                                    <input type="date" name="date_fin" value="{{$date_fin ?? ''}}" class="form-control"  placeholder="Zip" required>
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

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Titre</th>
                                                <th>Nom et Prénom</th>
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($requetes as $requete)
                                                <tr>
                                                    <td>1</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
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