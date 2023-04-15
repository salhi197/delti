<?php 
use App\Wilaya;
use App\Commune;
$wilayas = Wilaya::all();
$communes = Commune::all();

?>
@extends('layouts.master')
@section('content')
<section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_8f71">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h2 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1  pb-4"> انشاء حساب
                        جديد</h2>
                </div>
            </section>
            <section class="u-align-center u-clearfix u-section-2 " id="sec-6bea">

                <div class="u-clearfix u-sheet u-sheet-1 form-box mt-5 mb-3 p-3">
                    <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
                        <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled "
                            role="tablist">
                            <li class="u-tab-item" role="presentation">
                                <a id="userclick"
                                    class="active u-active-palette-1-base u-button-style u-custom-font u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1"
                                    id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5"
                                    aria-selected="true">مواطن</a>
                            </li>
                            <li class="u-tab-item" role="presentation">
                                <a id="companyclick"
                                    class="u-active-palette-1-base u-button-style u-custom-font u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2"
                                    id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7"
                                    aria-selected="false">شركة او
                                    متعامل اقتصادي</a>
                            </li>
                            <li class="u-tab-item ml-2 mr-2" role="presentation">
                                <a id="assocclick"
                                    class="u-active-palette-1-base u-button-style u-custom-font u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3"
                                    id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917"
                                    aria-selected="false">مجتمع
                                    مدني</a>
                            </li>
                        </ul>
                        <div class="container mt-4">
                            <form class="row " action="{{route('user.create')}}" method="POST">
                                @csrf

                                <div class="col-xl-12 col-lg-12">
                                </div>

                                <input type="hidden" name="usertype" id="usertype" value="1">

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">الولاية *</label>
                                    <select class="form-control" id="wilaya_select" name="wilaya">
                                        <option value="">{{ __('Please choose...') }}</option>
                                        @foreach ($wilayas as $wilaya)
                                            <option value="{{$wilaya->id}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
                                                {{$wilaya->name}}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">البلدية *</label>

                                    <select class="form-control" name="commune" id="commune_select">
                                        <option value="">{{ __('Please choose...') }}</option>
                                        @foreach ($communes as $commune)
                                            <option value="{{$commune->id}}" {{$commune->id == (old('commune_id') ?? ($member->commune_id ?? '')) ? 'selected' : ''}}>
                                                {{$commune->name}}
                                            </option>
                                        @endforeach
                                    </select>

                                    <input class="form-control valid" id="commune_select_loading" value="{{ __('Loading...') }}"

                                        readonly style="display: none;"/>

                                    @if ($errors->has('commune_id'))

                                        <p class="help-block">{{ $errors->first('commune_id') }}</p>

                                    @endif
                                    

                                </div>

                                <div id="association" class="col-12 row d-none">

                                    <div class="form-group col-12">
                                        <label class="rtl-text">نوع الجمعية *</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="1">جمعية احياء</option>
                                            <option value="2">ممثل قرية</option>
                                            <option value="3">جمعية وطنية</option>
                                            <option value="4">نقابة</option>
                                        </select>
                                    </div>

                                </div>

                                <div id="company" class=" col-12 row d-none">
                                    <div class="form-group col-12">
                                        <label class="rtl-text">رقم الاحصاء الوطني *</label>
                                        <input type="text" name="nit" id="nit" value="" class="form-control">
                                    </div>
                                </div>

                                <div id="user" class=" col-12 row m-0">


                                    <div class="form-group col-lg-12 col-xl-12 col-sm-12 col-xs-12 col-md-12 p-0 pr-3">
                                        <label class="rtl-text">رقم التعريف الوطني *</label>
                                        <input type="text" name="nia" id="nia" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12"
                                    class=" col-12 row ">
                                    <label class="rtl-text">الاسم *</label>
                                    <input type="text" name="nom" id="nom" value="" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">اللقب *</label>
                                    <input type="text" name="prenom" id="prenom" value="" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">تاريخ الميلاد *</label>
                                    <input type="date" name="naissance" id="naissance" value="" class="form-control"
                                        required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">الجنس *</label>
                                    <select class="form-control" name="sexe" id="sexe" required>
                                        <option value="1">ذكر</option>
                                        <option value="2">انثى</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">رقم بطاقة التعريف *</label>
                                    <input type="text" class="form-control" value="" name="identite" id="identite"
                                        required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">تاريخ الصدور *</label>
                                    <input type="date" class="form-control" value="" name="date_emission" id="date_emission"
                                        required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">البريد الاكتروني *</label>
                                    <input type="email" class="form-control" value="" name="email" id="email" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">رقم الهاتف *</label>
                                    <input type="text" name="telephone" id="telephone" value="" required class="form-control">
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">كلمة المرور *</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">تاكيد كلمة المرور *</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password_confirmation" required>
                                </div>

                                <div class="form-group col-12 w-100">
                                    <button type="submit" class="btn btn-success m-auto d-block p-2 pl-5 pr-5">طلب
                                        التسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

       
@endsection

@section('scripts')
    <script>


        function watchWilayaChanges() {
            $('#wilaya_select').on('change', function (e) {
                e.preventDefault();
                var $communes = $('#commune_select');
                var $communesLoader = $('#commune_select_loading');
                var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');
                var $iconDefault = $communes.parents('.input-group').find('.material-icons');
                $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();
                $communesLoader.show();
                $iconDefault.hide();
                $iconLoader.show();
                $.ajax({
                    dataType: "json",
                    method: "GET",
                    url: "/api/static/communes/ " + $(this).val()
                })
                    .done(function (response) {
                        $.each(response, function (key, commune) {
                            $communes.append($('<option>', {value: commune.id}).text(commune.name));
                        });
                        $communes.prop('disabled', '').show();
                        $communesLoader.hide();
                        $iconLoader.hide();
                        $iconDefault.show();
                    });
            });
        }


        $(document).ready(function () {
            watchWilayaChanges();
        });




        var hostadmin = "index.html";
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>






    <script>
        $("#assocclick").click(function () {
            $("#usertype").val(3);
            $("#association").removeClass("d-none");
            $("#company").addClass("d-none");
            $("#user").addClass("d-none");

            $("#nit").prop('required', false);
            $("#type_assoc").prop('required', true);
            $("#nia").prop('required', false);
            // $("#type").prop('required', false);

        });

        $("#userclick").click(function () {
            $("#usertype").val(1);
            $("#user").removeClass("d-none");
            $("#company").addClass("d-none");
            $("#association").addClass("d-none");

            $("#nit").prop('required', false);
            $("#type_assoc").prop('required', false);
            $("#nia").prop('required', true);
            // $("#type").prop('required', true);

        });

        $("#companyclick").click(function () {
            $("#usertype").val(2);
            $("#company").removeClass("d-none");
            $("#association").addClass("d-none");
            $("#user").addClass("d-none");

            $("#nit").prop('required', true);
            $("#type_assoc").prop('required', false);
            $("#nia").prop('required', false);
            // $("#type").prop('required', false);

        });


function watchWilayaChanges() {

            $('#wilaya_select').on('change', function (e) {

                e.preventDefault();

                var $communes = $('#commune_select');

                var $communesLoader = $('#commune_select_loading');

                var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');

                var $iconDefault = $communes.parents('.input-group').find('.material-icons');

                $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();

                $communesLoader.show();

                $iconDefault.hide();

                $iconLoader.show();

                $.ajax({

                    dataType: "json",

                    method: "GET",

                    url: "/api/static/communes/ " + $(this).val()

                })
                    .done(function (response) {
                        $.each(response, function (key, commune) {
                            $communes.append($('<option>', {value: commune.id}).text(commune.name));
                        });
                        $communes.prop('disabled', '').show();

                        $communesLoader.hide();

                        $iconLoader.hide();

                        $iconDefault.show();

                    });

            });
        }

        $(document).ready(function () {
            watchWilayaChanges();
        });

    </script>


    @endsection
