@extends('layouts.client')
@section('content')
<body class="auth-body-bg">
                    <div class="wrapper-page">
                        <div class="container-fluid p-0">
                            <div class="card">
                                <div class="card-body">

                                    <div class="text-center mt-4">
                                        <div class="mb-3">
                                            <a href="index.html" class="auth-logo">
                                                <img src="assets/images/wassit2.png" height="30"
                                                    class="logo-dark mx-auto" alt="">
                                                <img src="assets/images/wassit2.png" height="50"
                                                    class="logo-light mx-auto" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <h4 class="text-muted text-center font-size-18"><b>Confirmer votre email</b></h4>

                                    <div class="p-3">
                                        <form class="form-horizontal mt-3" method="post" action="{{route('confirm')}}">
                                            @csrf
                                            <div class="form-group mb-3 row">
                                                <div class="col-12">
                                                    <input class="form-control" type="number" required=""
                                                        placeholder="code" name="code">
                                                </div>
                                            </div>





                                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                                <div class="col-12">
                                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                                        type="submit"
                                                        style="background-color: #009640;">Valider</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- end -->
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end container -->
                    </div>
                </body>
@endsection