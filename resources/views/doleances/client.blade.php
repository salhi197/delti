@extends('layouts.client')

@section('content')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suiver des doleances</h4>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="button" style="  position: absolute;  right: 16px;">
                                <a href="{{route('doleance.create.client')}}">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="background-color: #e30613; border-style: none;">
                                        <i class="fa fa-calendar-plus"></i>
                                        Ajouter
                                        une
                                        doleance</button>
                                        <a href="{{route('investissement.create.client')}}">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="">
                                        <i class="fa fa-calendar-plus"></i>
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
                                                    <th>Code </th>
                                                    <th>Sujet de la doleance</th>
                                                    <th>Titre de la doleance</th>
                                                    <th>Date</th>
                                                    <!--<th>Citoyen</th>-->
                                                    <!--<th>Secteur</th>-->
                                                    <!--<th>Administration</th>-->
                                                    <!--<th>Type de Requête</th>-->
                                                    <th>Status</th>
                                                    <!--<th>Investisseur</th>-->
                                                    <!--<th>Sujet</th>-->
                                                    <th>Action</th>                                    
                                                    </tr>
                                                </thead>

                                                <tbody id="myTable">
                                                    @foreach($doleances as $doleance)
                                                        <tr style="cursor: pointer;" data-href="{{route('doleance.edit',['doleance'=>$doleance->id])}}">
                                                            <!--<td>{{$doleance->id ?? ''}}</td>-->
                                                            <td>{{$doleance->code_initial ?? ''}}</td>
                                                            <td>{{$doleance->getelt("sujet") ?? ''}}</td>

                                                            <td>{{$doleance->titre ?? ''}}</td>
                                                            <td>{{$doleance->created_at ?? ''}}</td>
                                                            <!--<td>{{$doleance->getelt("client") ?? ''}}</td>-->
                                                            <!--<td>{{$doleance->getelt("secteur") ?? ''}}</td>-->

                                                            <!--<td>{{$doleance->getelt("administration") ?? ''}}</td>-->
                                                            <!--<td>{{$doleance->getelt("typedoleance") ?? ''}}</td>-->
                                                            <td>{{$doleance->getelt("etatdoleance") ?? 'nouvelle'}}</td>
                                                            <!--<td>{{$doleance->etatdoleance ?? ''}}</td>-->
                                                            <!--<td>{{$doleance->investisseur ?? ''}}</td>-->
                                                            <!--<td>{{$doleance->getelt("sujet") ?? ''}}</td>-->
                                                            <td>
                                                                <div class="btn-group-vertical" role="group"
                                                                    aria-label="Vertical button group">
                                                                    <div class="btn-group" role="group">
                                                                        <button id="btnGroupVerticalDrop1" type="button"
                                                                            class="btn btn-light dropdown-toggle"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false" style="background-color:#ffc107;">
                                                                             action
                                                                             <i class="fas fa-cogs"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="btnGroupVerticalDrop1">
                                                                            <a class="dropdown-item" href="{{route('doleance.edit.client',['doleance'=>$doleance->id])}}">Détails de la
                                                                                doleance</a>
                                                                            <a class="dropdown-item" href="#">Ajouter un fichier ou
                                                                                un message</a>
                                                                            <a class="dropdown-item" href="{{route('doleance.print',['doleance'=>$doleance->id])}}">Imprimer la
                                                                                doleance</a>
                                                                            <a class="dropdown-item" href="{{route('doleance.destroy',['doleance'=>$doleance->id])}}"
                                                                                onclick="return confirm('etes vous sure  ?')">Retirer la doleance</a>
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


@section('scripts')
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection