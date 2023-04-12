@extends('webadmin.index')
@section('content')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <!-- All User Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Giỏ Hàng</h5>
                            </div>

                            <div class="table-responsive category-table">
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Bộ nhớ trong</th>
                                        <th>Danh mục cha</th>
                                        <th>Hình ảnh</th>
                                        <th>Tổng số lượng</th>
                                        <th>Màu sắc</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($cart as $key => $value)
                                    <tr>
                                        <td>{{$value->name_product}}</td>

                                        <td>{{$value->memory_storage}}</td>

                                        <td>{{$value->cate_product}}</td>

                                        <td><img src="{{$value->image}}" alt="" width="100px"></td>

                                        <td>{{$value->total_quantity}}</td>

                                        <td>{{$value->color}}</td>

                                        <td>{{number_format($value->price)}}₫</td>

                                        <td>{{$value->status}}</td>

                                        <td>{{$value->username}}</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{route('admin.deleteCart',['id'=>$value->id])}}">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
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
        <!-- All User Table Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>
    <!-- Container-fluid end -->
@endsection
