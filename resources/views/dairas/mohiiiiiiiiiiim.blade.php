@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dairas</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Dairas</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter Daira</button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('daira.store')}}" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Code</label>
                                                                        <input type="text"  name="code" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Nom Daira</label>
                                                                        <input type="text" name="nom" class="form-control" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Wilaya</label>
                                                                        <select class="form-control" id="wilaya_select" name="wilaya">
                                                                            @foreach ($wilayas as $wilaya)
                                                                                <option value="{{$wilaya->id}}" >
                                                                                    {{$wilaya->name}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Sauvegarder</button>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>




                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="scroll-vertical-datatable" class="table  ">
                                        <thead>
                                            <tr>
                                                <th>Code Daira</th>
                                                <th>Nom</th>
                                                <th>Wilaya</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dairas as $daira)
                                                <tr>
                                                    <td>{{$daira->code ?? ''}}</td>
                                                    <td>{{$daira->nom ?? ''}}</td>
                                                    <td>{{$daira->wilaya()['name'] ?? ''}}</td>
                                                    <td>
                                                        <a  class="btn btn-danger " onclick="return confirm('Confirmé ?')" href="{{route('daira.destroy',['daira'=>$daira->id])}}"> Supprimer</a>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$daira->id}}"> Modifier  Daira</button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal{{$daira->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modififer </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('daira.update',['daira'=>$daira->id])}}" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Code</label>
                                                                        <input type="text"   value="{{$daira->code ?? ''}}" name="code" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Nom Daira</label>
                                                                        <input type="text" value="{{$daira->nom ?? ''}}" name="nom" class="form-control" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Wilaya</label>
                                                                        <select class="form-control" id="wilaya_select" name="wilaya">
                                                                            @foreach ($wilayas as $wilaya)
                                                                                <option value="{{$wilaya->id}}" @if($daira->wilaya == $wilaya->id) selected @endif >
                                                                                    {{$wilaya->name}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Sauvegarder</button>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                                            


                                                    
</td>
                                                    
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <!-- end card body-->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->


                    <!-- end row-->

@endsection