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
                                        <h5>Thêm sản phẩm</h5>
                                    </div>

                                    <form action="" method="post" class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Tên sản phẩm</label>
                                            <div class="col-sm-9">
                                                <input name="name_product" class="form-control" type="text"
                                                       placeholder="Tên sản phẩm" value="{{old('name_product')}}">
                                            </div>
                                            @error('name_product')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Bộ nhớ trong</label>
                                            <div class="col-sm-9">
                                                <input name="memory_storage" class="form-control" type="text"
                                                       placeholder="Bộ nhớ trong" value="{{old('memory_storage')}}">
                                            </div>
                                            @error('memory_storage')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Mã Màu</label>
                                            <div class="col-sm-9">
                                                <input name="code_color" class="form-control" type="text"
                                                       placeholder="Mã Màu" value="{{old('code_color')}}">
                                            </div>
                                            @error('code_color')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Slug</label>
                                            <div class="col-sm-9">
                                                <input name="slug" class="form-control" type="text"
                                                       placeholder="Slug" value="{{old('slug')}}">
                                            </div>
                                            @error('slug')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Danh Mục cha</label>
                                            <div class="col-sm-9">
                                                <select name="parent_id" class="js-example-basic-single w-100">
                                                    <option disabled selected>Chọn danh mục</option>
                                                    @foreach($allCategory as $key => $value)
                                                        <option value="{{$value->id}}" {{old('parent_id')==$value->id?'selected':''}}>{{$value->cate_product}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('parent_id')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Đường dẫn ảnh</label>
                                            <div class="col-sm-9">
                                                <input name="image" class="form-control" type="text"
                                                       placeholder="Đường dẫn ảnh" value="{{old('image')}}">
                                            </div>
                                            @error('image')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Tổng số lượng</label>
                                            <div class="col-sm-9">
                                                <input name="quantity" class="form-control" type="text"
                                                       placeholder="Tổng số lượng" value="{{old('quantity')}}">
                                            </div>
                                            @error('quantity')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Giá</label>
                                            <div class="col-sm-9">
                                                <input name="price" class="form-control" type="text"
                                                       placeholder="Giá" value="{{old('price')}}">
                                            </div>
                                            @error('price')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Màu sắc</label>
                                            <div class="col-sm-9">
                                                <input name="color" class="form-control" type="text"
                                                       placeholder="Màu sắc" value="{{old('color')}}">
                                            </div>
                                            @error('color')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Mô tả</label>
                                            <div class="col-sm-9">
                                                <textarea  name="description" id="" cols="60" rows="10"
                                                          placeholder="Mô tả"> {{old('description')}}</textarea>

                                            </div>
                                            @error('description')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Danh Mục nổi
                                                bật</label>
                                            <div class="col-sm-9">
                                                <select name="feature_product" class="js-example-basic-single w-100">
                                                    <option disabled selected>Chọn</option>
                                                    <option value="1" {{old('feature_product')==1?'selected':''}}>Có</option>
                                                    <option value="0" {{old('feature_product')==0?'selected':''}}>Không</option>
                                                </select>
                                            </div>
                                            @error('feature_product')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        @csrf
                                        <button class="btn ms-auto theme-bg-color text-white">Thêm</button>
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
    <!-- Container-fluid End -->
@endsection
