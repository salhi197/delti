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
                                <h3 class="mb-sm-0">Bienvenue {{Auth::guard('client')->user()->nom ?? Auth::guard('client')->user()->name ?? ''}}</h3>
                                <h6 class="mb-sm-0">deltti.com/c/{{Auth::guard('client')->user()->id}}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                                <div class="qty mt-5">
                                    <span class="minus bg-dark">-</span>
                                    <span type="number" class="count" name="qty" >{{Auth::guard('client')->user()->count}}</span>
                                    <span class="plus bg-dark">+</span>
                                </div>                            
                        </div><!-- end col -->
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                    {!! QrCode::size(100)->generate('https://deltti.com/compteur/'.Auth::guard('client')->user()->id); !!}
                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <form method="post" action="{{route('set.count')}}">
                                            @csrf
                                            <div class="input-group">
                                               <input type="text" name="count"  class="form-control" >

                                                <span class="input-group-btn">
                                                <button  type="submit" class="btn btn-success"  ><i class="fa fa-clone"></i>
                                                </button>
                                                </span>
                                            </div>                                                                       

                                        </form>

                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->
                    </div>

@endsection