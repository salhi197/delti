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
                                                <img src="{{asset('cirm/admin/assets/images/wassit.png')}}" height="50" class="logo-dark mx-auto" alt="">
                                                <img src="{{asset('cirm/admin/assets/images/wassit.png')}}" height="50" class="logo-light mx-auto" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="text-muted text-center font-size-18"><b>Connexion</b></h4>

                                    <div class="p-3">
                                        <form class="form-horizontal mt-3" method="post" action="{{route('forget')}}">
                                            @csrf

                                            <div class="form-group mb-3 row">
                                                <div class="col-12">
                                                    <input class="form-control" type="email" name="email" required=""
                                                        placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                                <div class="col-12">
                                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                                        type="submit" style="background-color: #009640;">Envoyer
                                                        </button>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 row mt-2">
                                                <div class="col-sm-5 mt-3">
                                                    <a href="{{route('inscription')}}" class="text-muted"><i
                                                            class="mdi mdi-account-circle"></i> Créer un compte</a>
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
                    <!-- end -->

                    <!-- JAVASCRIPT -->
                    <script src="assets/libs/jquery/jquery.min.js"></script>
                    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
                    <script src="assets/libs/simplebar/simplebar.min.js"></script>
                    <script src="assets/libs/node-waves/waves.min.js"></script>

                    <script src="assets/js/app.js"></script>

                </body>@endsection

@section('scripts')
<script>
            $('#scroll-vertical-datatable').on('click', 'tbody tr', function() {
                window.location.href = $(this).data('href');
            })    
</script>
@endsection

