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
                                <h5>All Category</h5>
                            </div>
                            <div class="table-responsive category-table">
                                <div>
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Vai trò</th>
                                            <th>Hành Động</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($allUser as $key => $value)
                                            <tr>
                                                <td>{{$value->username}}</td>

                                                <td>{{$value->email}}</td>

                                                <td>0{{$value->phone_number}}</td>
                                                <td>{{$value->role==0?'Người quản trị':'Người dùng'}}</td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('admin.editUser',['id'=>$value->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('admin.deleteUser',['id'=>$value->id])}}">
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
        <!-- All User Table Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>
    <!-- Container-fluid end -->
@endsection
