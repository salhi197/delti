@extends('layouts.client')

@section('content')
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h3 class="mb-sm-0">File D'attente :  {{$client->nom ?? $client->prenom ?? ''}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                                <div class="qty mt-5">
                                    <input type="number" class="count" name="qty" value="{{$count ?? 0}}">
                                </div>                            
                        </div><!-- end col -->

@endsection