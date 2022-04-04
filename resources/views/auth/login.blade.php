@extends('layouts.auth')
@section('title')
ورود
@endsection
@section('content')

  <!-- Row -->
  <div class="row signpages text-center">
    <div class="col-md-12">
      <div class="card">
        <div class="row row-sm">
          <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
            <div class="mt-5 pt-4 p-2 pos-absolute">
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
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h5 class="text-right mb-2">به حساب خود وارد شوید</h5>
                    <p class="mb-4 text-muted tx-13 ml-0 text-right">برای ایجاد ، کشف و ارتباط با جامعه جهانی وارد سیستم شوید</p>
                    <div class="form-group text-right">
                      <label>پست الکترونیک</label>
                      <input class="form-control" name="email" placeholder="ایمیل خود را وارد کنید" type="text">
                    </div>
                    <div class="form-group text-right">
                      <label>کلمه عبور</label>
                      <input class="form-control" name="password" placeholder="رمز ورود خود را وارد کنید" type="password">
                    </div>
                    <button class="btn ripple btn-main-primary btn-block">ورود</button>
                  </form>
                  <div class="text-right mt-5 ml-0">
                    <div class="mb-1"><a href="#">رمز عبور خود را فراموش کرده اید؟</a></div>
                    <div>حساب ندارید؟ <a href="{{route('register')}}">اینجا ثبت نام کنید</a></div>
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
@endsection
