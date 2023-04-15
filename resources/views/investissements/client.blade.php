@extends('layouts.client')

@section('content')

                <div class="row">
                        <div class="col-md-6">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suiver des investissements</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="button" style="  position: absolute;  right: 16px;">
                                <a href="{{route('investissement.create.client')}}">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="background-color: #e30613; border-style: none;">+
                                        Ajouter
                                        un
                                        investissement</button>
                                </a>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">   
                            <input type="text" class="form-control form-control-navbar" name="query" value="" placeholder=" Entrez le code de la requête" id="myInput">
                            <!-- <div class="input-group-append">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fas fa-search"></i>
                                    </button>

                            </div> -->

                            </div>
                        </div>

                    </div>
                    <br>


                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">


                                    <br>
                                    <br>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                                    <tr >
                                                    <!--<th> Id </th>-->
                                                    <th>Date investissement</th>
                                                    <th>Code</th>
                                                    <!--<th>Citoyen</th>-->
                                                    <th>Wilaya</th>
                                                    <!--<th>Secteur</th>-->
                                                    <!--<th>Administration</th>-->
                                                    <!--<th>Type de Requête</th>-->
                                                    <th>Etat de Requête</th>
                                                    <!--<th>Investisseur</th>-->
                                                    <!--<th>Sujet</th>-->
                                                    <th>Action</th>                                    
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($investissements as $investissement)
                                                        <tr style="cursor: pointer;" data-href="{{route('investissement.edit',['investissement'=>$investissement->id])}}">
                                                            <!--<td>{{$investissement->id ?? ''}}</td>-->
                                                            <td>{{$investissement->created_at ?? ''}}</td>
                                                            <td>{{$investissement->code_initial ?? ''}}</td>
                                                            <!--<td>{{$investissement->getelt("client") ?? ''}}</td>-->
                                                            <td>{{$investissement->getelt("wilaya") ?? ''}}</td>
                                                            <!--<td>{{$investissement->getelt("secteur") ?? ''}}</td>-->

                                                            <!--<td>{{$investissement->getelt("administration") ?? ''}}</td>-->
                                                            <!--<td>{{$investissement->getelt("typeinvestissement") ?? ''}}</td>-->
                                                            <td>{{$investissement->getelt("etatinvestissement") ?? 'nouvelle'}}</td>
                                                            <!--<td>{{$investissement->etatinvestissement ?? ''}}</td>-->
                                                            <!--<td>{{$investissement->investisseur ?? ''}}</td>-->
                                                            <!--<td>{{$investissement->getelt("sujet") ?? ''}}</td>-->
                                                            <td>
                                                                <div class="btn-group-vertical" role="group"
                                                                    aria-label="Vertical button group">
                                                                    <div class="btn-group" role="group">
                                                                        <button id="btnGroupVerticalDrop1" type="button"
                                                                            class="btn btn-light dropdown-toggle"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false" style="background-color:#ffc107;">
                                                                             Action<i
                                                                                class="mdi mdi-chevron-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="btnGroupVerticalDrop1">
                                                                            <a class="dropdown-item" href="{{route('investissement.edit.client',['investissement'=>$investissement->id])}}">Détails de la
                                                                                investissement</a>
                                                                            <a class="dropdown-item" href="#">Ajouter un fichier ou
                                                                                un message</a>
                                                                            <a class="dropdown-item" href="#">Imprimer la
                                                                                investissement</a>
                                                                            <a class="dropdown-item" href="{{route('investissement.destroy',['investissement'=>$investissement->id])}}"
                                                                                onclick="return confirm('etes vous sure  ?')">Retirer la investissement</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            

                                                        </tr>

                                                    @endforeach


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>


@endsection

