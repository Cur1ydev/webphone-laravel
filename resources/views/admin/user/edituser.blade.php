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
                                        <h5>Sửa người dùng</h5>
                                    </div>

                                    <form action="" method="post" class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Username</label>
                                            <div class="col-sm-9">
                                                <input name="username" class="form-control" type="text"
                                                       placeholder="Username" value="{{$getUser->username}}">
                                            </div>
                                            @error('username')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Email</label>
                                            <div class="col-sm-9">
                                                <input name="email" class="form-control" type="email"
                                                       placeholder="Email" value="{{$getUser->email}}">
                                            </div>
                                            @error('email')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Số điện thoại</label>
                                            <div class="col-sm-9">
                                                <input name="phone_number" class="form-control" type="number"
                                                       placeholder="Số điện thoại" value="0{{$getUser->phone_number}}">
                                            </div>
                                            @error('phone_number')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="form-label-title col-sm-3 mb-0">Mật khẩu</label>
                                            <div class="col-sm-9">
                                                <input name="password" class="form-control" type="password" placeholder="Mật khẩu" value="{{$getUser->password}}">
                                            </div>
                                            @error('password')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Vai trò</label>
                                            <div class="col-sm-9">
                                                <select name="role" class="js-example-basic-single w-100">
                                                    <option value="" disabled selected>Chọn</option>
                                                    <option value="1" {{$getUser->role==1?'selected':''}}>Người dùng</option>
                                                    <option value="0" {{$getUser->role==0?'selected':''}}>Người quản trị</option>
                                                </select>
                                            </div>
                                            @error('role')
                                            <h5  style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        @csrf
                                        <button class="btn ms-auto theme-bg-color text-white">Sửa</button>
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
