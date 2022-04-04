@extends('layouts.auth')
@section('title')
    ثبت نام
@endsection
@section('content')


    <!-- Page -->
    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-5 p-2 pos-absolute">
                                <div class="clearfix"></div>
                                <img src="{{asset('dashboard/assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">حساب کاربری برای خود بسازید</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">برای ایجاد ، کشف و ارتباط با جامعه جهانی ثبت نام کنید</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <img src="assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                        <div class="clearfix"></div>
                                        <h5 class="text-right mb-2">ثبت نام رایگان</h5>
                                        <p class="mb-4 text-muted tx-13 ml-0 text-right">ثبت نام رایگان است و فقط یک دقیقه طول می کشد.</p>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group text-right">
                                                <label>نام</label>
                                                <input name="name" class="form-control" placeholder="اسمت را وارد کن" type="text">
                                            </div>
                                            <div class="form-group text-right">
                                                <label>پست الکترونیک</label>
                                                <input class="form-control" name="email" placeholder="ایمیل خود را وارد کنید" type="text">
                                            </div>
                                            <div class="form-group text-right">
                                                <label>کلمه عبور</label>
                                                <input class="form-control" name="password" placeholder="رمز ورود خود را وارد کنید" type="password">
                                            </div>
                                            <div class="form-group text-right">
                                                <label>تکرار کلمه عبور</label>
                                                <input class="form-control" name="password_confirmation" placeholder="رمز ورود خود را وارد کنید" type="password">
                                            </div>
                                            <button class="btn ripple btn-main-primary btn-block">ایجاد حساب</button>
                                        </form>
                                        <div class="text-right mt-5 ml-0">
                                            <p class="mb-0">در حال حاضر یک حساب کاربری دارید <a href="signin.html">ورود</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->
@endsection
