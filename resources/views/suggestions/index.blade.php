@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Suggestions</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">> Suggestions </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                   
                    <a href="https://cirm.power-evo.com/suggestion/show/create">                    
                    <a href="{{route('suggestion.show.create')}}">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light">+ Ajouter suggestion</button>
                    </a>
                    <br>
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
                                                <th>Nom Prénom</th>
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Sujet</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                                    @foreach($suggestions as $suggestion)
                                                        <tr style="cursor: pointer;" data-href="{{route('suggestion.edit',['suggestion'=>$suggestion->id])}}">
                                                            <!--<td>{{$suggestion->id ?? ''}}</td>-->
                                                            <td>{{$suggestion->id ?? ''}}</td>
                                                            <td>{{$suggestion->nom ?? ''}} {{$suggestion->prenom ?? ''}}</td>
                                                            <!--<td>{{$suggestion->getelt("client") ?? ''}}</td>-->
                                                            <td>{{$suggestion->getelt("wilaya") ?? ''}}</td>
                                                            <td>{{$suggestion->getelt("commune") ?? ''}}</td>
                                                            <td>{{$suggestion->objet ?? ''}}</td>
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
                                                                            <a class="dropdown-item" href="#">Détails de la
                                                                                suggestion</a>
                                                                            <a class="dropdown-item" href="#">Ajouter un fichier ou
                                                                                un message</a>
                                                                            <a class="dropdown-item" href="#">Imprimer la
                                                                                suggestion</a>
                                                                            <a class="dropdown-item" href="#"
                                                                                onclick="return confirm('etes vous sure  ?')">Retirer la suggestion</a>
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

