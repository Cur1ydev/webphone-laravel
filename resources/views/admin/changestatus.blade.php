@extends('webadmin.index')
@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-8 col-lg-10 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Thay đổi trạng thái</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form" method="post" action="{{route('admin.statusPost',['id'=>$request->id,'name'=>$request->name])}}">
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Danh sách trạng thái</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="statusChange">
                                                    <option disabled>Chọn trạng thái</option>
                                                    @foreach($status as $key => $value)
                                                    <option value="{{$value->id}}" {{$value->id==$request->status?'selected':''}}>{{$value->status}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @csrf
                                        <button class="btn ms-auto theme-bg-color text-white">Thay đổi trạng thái</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer End -->
    </div>
@endsection
