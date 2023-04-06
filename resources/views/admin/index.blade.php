@extends('webadmin.index')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <!-- chart caard section start -->
                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                        <div class="custome-1-bg b-r-4 card-body">
                            <div class="media align-items-center static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Tổng doanh số</span>
                                    <h4 class="mb-0 counter">{{number_format($totalPrice)}}₫
                                        <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-database-2-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-2-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Đang xử lý</span>
                                    <h4 class="mb-0 counter">{{$countProcessing}}
                                        <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-shopping-bag-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                        <div class="custome-3-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Đơn hàng bị hủy</span>
                                    <h4 class="mb-0 counter">{{$cancel}}
                                        <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                            ADD NEW</a>
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-chat-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-4-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Đơn hàng thành công</span>
                                    <h4 class="mb-0 counter">{{$success}}
                                        <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-user-add-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Products List</h5>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Tên khách hàng</th>
                                            <th>Số điện thoại</th>
                                            <th>Tổng tiền</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Hành Động</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($allProduct as $key => $value)
                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{$value->image}}" class="img-fluid"
                                                             alt="">
                                                    </div>
                                                </td>

                                                <td>{{$value->name_product}}</td>

                                                <td>{{$value->name_user}}</td>

                                                <td>0{{$value->phone_number}}</td>

                                                <td class="td-price">{{number_format($value->total_price)}}₫</td>
                                                <td>{{$value->address}}</td>
                                                <td class="@if($value->id_status==5) {{'status-danger'}} @elseif($value->id_status==4) {{'status-success'}} @else {{'status-handle'}} @endif">
                                                    <span>{{$value->status}}</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        @if($value->id_status !=4&&$value->id_status !=5)
                                                            <li>
                                                                <a href="{{route('admin.changeStatus',['status'=>$value->id_status,'id'=>$value->id_cart,'name'=>$value->name_user])}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer End-->
    </div>
@endsection
