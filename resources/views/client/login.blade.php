@extends('web.index')
@section('content')

        <!--Body Container-->
        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"></div>
                    <div class="collection-hero__title-wrapper container">
                        <h1 class="collection-hero__title">Login</h1>
                        <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="{{route('client.home')}}" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Login</span></div>
                    </div>
                </div>
            </div>
            <!--End Collection Banner-->
            @if(session()->has('client'))
                <h3 align="center">Bạn đã đăng nhập với username là <span style="color: red">{{session('client')}}</span>.Bạn có thể đăng nhập tài khoản khác nếu muốn</h3>
            @endif
            <!--Container-->
            <div class="container">
                <!--Main Content-->
                <div class="login-register pt-2 pt-lg-5">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                            <div class="inner">
                                <form method="post" action="" class="customer-form">
                                    <h3 class="h4 text-uppercase">REGISTERED CUSTOMERS</h3>
                                    <p>If you have an account with us, please log in.</p>
                                    @if(session('mess'))
                                        <p style="color: red">{{session('mess')}}</p>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                                <input type="email" name="email" placeholder="Email" id="CustomerEmail" value="{{old('email')}}" required />
                                                @error('email')
                                                <h4 style="color: red">{{$message}}</h4>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                <input type="password" name="password" placeholder="Password" id="CustomerPassword" value="{{old('password')}}" required />
                                                @error('password')
                                                <h4 style="color: red">{{$message}}</h4>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                                            <p class="d-flex-center">
                                                <input type="submit" class="btn rounded me-auto" value="Sign In">
                                                <a href="forgot-password.html">Forgot your password?</a>
                                            </p>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="inner">
                                <h3 class="h4 text-uppercase">NEW CUSTOMER?</h3>
                                <p>Registering for this site allows you to access your order status and history. We’ll get a new account set up for you in no time. For this will only ask you for information necessary to make the purchase process faster and easier</p>
                                <a href="register.html" class="btn rounded">Create an account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
            <!--End Container-->
        </div>
        <!--End Body Container-->

@endsection
