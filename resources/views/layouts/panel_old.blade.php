<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        {{ setting('name') }} @if (trim($__env->yieldContent('title'))) |
        @yield('title')@endif
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('/')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{URL::to('/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::to('/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::to('/')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{URL::to('/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{URL::to('/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{URL::to('/')}}/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{URL::to('/')}}/dist/css/custom.css">
    <style>
        @font-face {
            font-family: IranYekan;
            src: url(/fonts/ttf/iranyekanwebboldfanum.ttf);
        }
    </style>
    <!-- CkEditor -->
    <script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
    <!-- Include this in your blade layout -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Toastr css -->
    @toastr_css
</head>
<body style="font-family: IranYekan" class="hold-transition sidebar-mini layout-fixed">
@include('sweet::alert')
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
{{--            <div class="input-group input-group-sm">--}}
{{--                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-navbar" type="submit">--}}
{{--                        <i class="fas fa-search"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto-navbav">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-comments"></i>--}}
{{--                    <span class="badge badge-danger navbar-badge">3</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="{{URL::to('/')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Brad Diesel--}}
{{--                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">Call me whenever you can...</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="{{URL::to('/')}}/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    John Pierce--}}
{{--                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">I got your message bro</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="{{URL::to('/')}}/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Nora Silvester--}}
{{--                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">The subject goes here</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
{{--                </div>--}}
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
{{--                    <i class="far fa-bell"></i>--}}
{{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
{{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">--}}
{{--                    <i class="fas fa-th-large"></i>--}}
{{--                </a>--}}
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{URL::to('/').Auth::user()->profile()}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <li class="nav-item">
                                            <a href="{{route('home')}}" class="nav-link @yield('home')">

                                                <i class="fas fa-home"></i>
                                                <p>
                                                    خانه
                                                </p>
                                            </a>
                                        </li>
                                        @if ((Auth::user()->isAdmin() && Auth::user()->can('Admin')) || Auth::user()->isSuperAdmin() )
                                        <li class="nav-item has-treeview ">
                                            <a href="#" class="nav-link @yield('admins')">
                                                <i class="fas fa-user-shield"></i>
                                                <p>
                                                    مدیریت
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{route('admin.index')}}" class="nav-link @yield('admins_list')">
                                                        <p>مدیر ها</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('roles.index')}}" class="nav-link @yield('roles')">
                                                        <p>نقش ها</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        @endif
                                        @if ((Auth::user()->isAdmin() && Auth::user()->can('Categories')) || Auth::user()->isSuperAdmin() )
                                            <li class="nav-item has-treeview ">
                                                <a href="#" class="nav-link @yield('Categories')">
                                                    <i class="fas fa-clipboard-list"></i>
                                                    <p>
                                                        دسته بندی ها
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                        <li class="nav-item">
                                                            <a href="{{route('categories.index')}}" class="nav-link @yield('Category')">
                                                                <p>دسته بندی</p>
                                                            </a>
                                                        </li>
                                                </ul>
                                            </li>
                                        @endif
                                        @if ((Auth::user()->isAdmin() && Auth::user()->can('User')) || Auth::user()->isSuperAdmin() )
                                            <li class="nav-item has-treeview ">
                                                <a href="#" class="nav-link @yield('User')">
                                                    <i class="fas fa-users"></i>
                                                    <p>
                                                        مدیریت کاربران
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="{{route('users.index')}}" class="nav-link @yield('Users')">
                                                            <p>کاربران</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif

                                        @if ((Auth::user()->isAdmin() && Auth::user()->can('Setting')) || Auth::user()->isSuperAdmin() )
                                            <li class="nav-item has-treeview ">
                                                <a href="#" class="nav-link @yield('Setting')">
                                                    <i class="fas fa-cogs"></i>
                                                    <p>
                                                        تنظیمات
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    @foreach($setting_groups as $group)
                                                        <li class="nav-item">
                                                            <a href="{{route('settings.show',$group->id)}}" class="nav-link @yield($group->name)">
                                                                <p>{{$group->name}}</p>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                        <li >
                                            <a class="nav-link btn btn-danger" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <p>خروج</p>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
        @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer" >
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
           طراحی و توسعه : <a href="https://ahmadrezaghanbari.ir">احمدرضا قنبری</a>
        </div>
        <!-- Default to the left -->
        <strong>  تمامی حقوق مادی و معنوی برای وبسایت <a href="{{setting('url')}}">{{setting('name')}}</a> محفوض است </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@jquery
@toastr_js
@toastr_render
<!-- jQuery -->
<script src="{{URL::to('/').'/plugins/jquery/jquery.min.js'}}"></script>

<!-- Bootstrap 4 -->
<script src="{{URL::to('/').'/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('/').'/dist/js/adminlte.min.js'}}"></script>

<!-- jQuery -->
<script src="{{URL::to('/').'/plugins/datatables/jquery.dataTables.min.js'}}"></script>
<script src="{{URL::to('/').'/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'}}"></script>
<script src="{{URL::to('/').'/plugins/datatables-responsive/js/dataTables.responsive.min.js'}}"></script>
<script src="{{URL::to('/').'/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'}}"></script>
<script>
    $(function () {
      $("#table").DataTable({
        "responsive": true,
        "autoWidth": false,
          "rtl" : true,
          "language": {
              "paginate": {
                  "previous": "قبلی",
                  "next" : "بعدی"
              },
              "sLengthMenu": "تعداد رکورد در صفحه _MENU_ ",
              "sSearch" : "جستجو:",
              "emptyTable":     "هیچ داده ای برای نمایش موجود نیست",
              "info":           "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
              "infoEmpty":      "نمایش 0 تا 0 از 0 رکورد",

              "infoFiltered":   "(نتیجه جستجو بین _MAX_ رکورد)",
              "zeroRecords":    "اطلاعاتی مبنی بر جستجو شما موجود نیست...",
          },



      });
    });
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  </script>

<script src="{{URL::to('/')}}/dist/js/demo.js"></script>
<!-- CK Editor for all textarea -->
<script>
    $("textarea").each(function(){
        CKEDITOR.replace( this );
    });
</script>
<!-- Page script -->

@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{$error}}')
    </script>
    <script>

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endforeach
@yield('js')

</body>
</html>
