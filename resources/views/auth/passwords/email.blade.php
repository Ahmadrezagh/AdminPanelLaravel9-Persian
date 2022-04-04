@extends('layouts.auth')
@section('title')
   reset password
@endsection
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="#"><b> بازیابی </b>رمزعبور </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">آیا رمز عبور خود را فراموش کرده اید؟</p>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control text-right @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ایمیل" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">درخواست بازیابی رمز عبور</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mt-3 mb-1 text-right">
          <a href="/login">ورود</a>
        </p>
        <p class="mb-0 text-right">
          <a href="/register" class="text-center">ثبت نام در وبسایت</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection
