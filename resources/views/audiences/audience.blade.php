

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
                        <button type="button" class="btn btn-primary waves-effect waves-light">+ Ajouter Audience</button>
                    </a>
                    <br><br>
                    <label for="validationCustom01" class="form-label">Filtre</label>
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

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date de l'audience</th>
                                                <th>Sujet</th>
                                                <th>Chargé de l'audience</th>
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>                                                <td>2011/04/25</td>
                                                <td>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="edit-audience.html">
                                                        <i class=" fas fa-folder-open"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <i class="fas fa-trash-alt"></i>
                                                </td>

                                            </tr>






                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
@endsection