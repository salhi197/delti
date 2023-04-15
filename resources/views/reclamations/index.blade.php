@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('cirm/assets/css/statics.css')}}">
@endsection

@section('content')<div class="product-area gray-bg pt-50 pb-50 mt-5 mb-5">
    <div class="container">
        <div class="t-product-wrap">
            <div class="row">
                @include('includes.modals.side')

                <div class="col-lg-9 order-2 order-lg-1 mt-5">
                    <div class="col-md-12">
                    </div>
                    <div class="col-12">

                        <form method="GET" action="https://afrahkoum.com/cirm/doleances" class="input-group">

                            <input type="text" class="form-control form-control-navbar" name="query" value=""
                                placeholder="أدخل الرمز هنا">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-warning">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>

                        </form>

                    </div>

                    <div class="row card table-responsive w-100 m-auto p-2" style="min-height: 200px;">
                        <table class="u-table-entity u-table-entity-1 "
                            style="direction: rtl;text-align: right !important;">

                            <thead class="u-custom-font u-font-courier-new  u-table-header u-table-header-1">
                                <tr style="height: 60px;">
                                    <th class="u-table-cell">الرمز</th>
                                    <th class="u-table-cell">الموضوع</th>
                                    <th class="u-table-cell">عنوان العريضة</th>
                                    <th class="u-table-cell">التاريخ</th>
                                    <th class="u-table-cell">الحالة</th>
                                    <th class="u-table-cell">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody class="u-table-body">
                                @foreach($reclamations as $reclamation)
                                <tr>
                                    <td>{{$reclamation->id}}</td>
                                    <td>{{$reclamation->subject ?? $reclamation->public_subject}}</td>
                                    <td>{{$reclamation->title}}</td>
                                    <td>{{$reclamation->created_at}}</td>
                                    <td>{{$reclamation->id}}</td>
                                    <td>
                                        <div class="table-action">

                                            <a href="{{route('reclamation.destroy',['id_reclamation'=>$reclamation->id])}}"
                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">

                                                <i class="fas fa-trash"></i>

                                            </a>

                                            <!-- <a href="{{route('reclamation.edit',['reclamation'=>$reclamation])}}" class="btn btn-info text-white">
                                                <i class="fas fa-edit"></i>
                                            </a> -->

                                        </div>
                                    </td>
                                
                                </tr>
                                @endforeach
                            </tbody>


                        </table>
                        <div class="header-btn d-none d-block m-auto text-center ">

                        </div>

                        <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header " dir="ltr">
                                        <h5 class="modal-title">إرسال ملف أو رسالة</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="https://afrahkoum.com/cirm/doleances/addmessage" method="POST">

                                            <input type="hidden" name="_token"
                                                value="tX41aCR3IwFsKOwv4BpSm0gJdMz1CkNweyZoIxfo"> <input type="hidden"
                                                name="doleance_id" id="doleance_id" required>

                                            <div class="form-group col-12">
                                                <label for="mobile">ملف</label>
                                                <input type="file" class="form-control" name="file" id="file">
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="mobile">رسالة</label>
                                                <textarea name="comment" required class="form-control"
                                                    id="comment"></textarea>
                                            </div>

                                            <div class="d-block m-auto text-center">
                                                <button type="submit" class="btn btn-primary">إرسال</button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@endsection