@extends('webadmin.index')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
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
                                            <th>Tên Sản Phẩm</th>
                                            <th>Bộ Nhớ Trong</th>
                                            <th>Mã Màu</th>
                                            <th>Slug</th>
                                            <th>Ảnh</th>
                                            <th>Số Lượng</th>
                                            <th>Giá</th>
                                            <th>Màu Sắc</th>
                                            <th>Mô Tả</th>
                                            <th>Danh mục nổi bật</th>
                                            <th>Hành Động</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($allProduct as $key => $value)
                                            <tr>
                                                <td>{{$value->name_product}}</td>
                                                <td>{{$value->memory_storage}}</td>
                                                <td>{{$value->code_color}}</td>
                                                <td>{{$value->slug}}</td>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{$value->image}}" class="img-fluid"
                                                             alt="">
                                                    </div>
                                                </td>
                                                <td>{{$value->quantity}}</td>
                                                <td>{{number_format($value->price)}}₫</td>
                                                <td>{{$value->color}}</td>
                                                <td>{{$value->description}}</td>
                                                <td>@if($value->feature_product==1){{ "Danh mục nổi bật" }} @endif</td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('admin.editProduct',['id'=>$value->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('admin.deleteProduct',['id'=>$value->id])}}">
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
@endsection
