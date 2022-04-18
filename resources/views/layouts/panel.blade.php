<!DOCTYPE html>
<html lang="en" dir="rtl" >

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.ico')}}" type="image/x-icon"/>

    <!-- Title -->
    <title>
        {{ setting('name') }} @if (trim($__env->yieldContent('title'))) |
        @yield('title')@endif
    </title>

    <!-- Bootstrap css-->
    <link href="{{asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Icons css-->
    <link href="{{asset('dashboard/assets/plugins/web-fonts/icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('dashboard/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet"/>

    <!-- Style css-->
    <link href="{{asset('dashboard/assets/css-rtl/style/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css-rtl/skins.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css-rtl/dark-style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css-rtl/colors/default.css" rel="stylesheet')}}">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('dashboard/assets/css-rtl/colors/color.css')}}">

    <!-- Select2 css -->
    <link href="{{asset('dashboard/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="{{asset('dashboard/assets/plugins/multipleselect/multiple-select.css')}}">

    <!-- Sidemenu css-->
    <link href="{{asset('dashboard/assets/css-rtl/sidemenu/sidemenu.css')}}" rel="stylesheet">

    <!-- Switcher css-->
    <link href="{{asset('dashboard/assets/switcher/css/switcher-rtl.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/switcher/demo.css')}}" rel="stylesheet">


    <!-- CkEditor -->
    <script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>



    <!-- Include this in your blade layout -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @toastr_css

</head>

<body class="main-body leftmenu">
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<!-- Loader -->
<div id="global-loader">
    <img src="{{asset('dashboard/assets/img/loader.svg')}}" class="loader-img" alt="لودر">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">

    <!-- Sidemenu -->
    <div class="main-sidebar main-sidebar-sticky side-menu">
        <div class="sidemenu-logo">
            <a class="main-logo" href="#">
                <img src="{{url('logo/long.png')}}" class="header-brand-img desktop-logo" alt="UltimateSoft" style="width: 134px;height: 37px">
                <img src="{{url('logo/ico.png')}}" class="header-brand-img icon-logo" alt="UltimateSoft" style="width: 45px;height: 45px">
                <img src="{{url('logo/ico.png')}}" class="header-brand-img desktop-logo theme-logo" alt="لوگو">
                <img src="{{url('logo/ico.png')}}" class="header-brand-iultimate type png blue.pngmg icon-logo theme-logo" alt="لوگو">
            </a>
        </div>
        <div class="main-sidebar-body">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="fa fa-home sidemenu-icon"></i>
                        <span class="sidemenu-label">خانه</span></a>
                </li>
                @if ((Auth::user()->isAdmin() && Auth::user()->can('Admin')) || Auth::user()->isSuperAdmin() )
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-user-shield sidemenu-icon"></i>
                            <span class="sidemenu-label">مدیریت</span><i class="angle fe fe-chevron-left"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('admins.index')}}">مدیر ها</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('roles.index')}}">نقش ها</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if ((Auth::user()->isAdmin() && Auth::user()->can('Categories')) || Auth::user()->isSuperAdmin() )
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-clipboard-list sidemenu-icon"></i>
                            <span class="sidemenu-label">دسته بندی ها</span><i class="angle fe fe-chevron-left"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('categories.index')}}">دسته بندی</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if ((Auth::user()->isAdmin() && Auth::user()->can('User')) || Auth::user()->isSuperAdmin() )
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-users sidemenu-icon"></i>
                            <span class="sidemenu-label">مدیریت کاربران</span><i class="angle fe fe-chevron-left"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{route('users.index')}}">کاربران</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if ((Auth::user()->isAdmin() && Auth::user()->can('Setting')) || Auth::user()->isSuperAdmin() )
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-cogs sidemenu-icon"></i>
                            <span class="sidemenu-label">تنظیمات</span><i class="angle fe fe-chevron-left"></i></a>
                        <ul class="nav-sub">
                            @foreach($setting_groups as $group)
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{route('settings.show',$group->name)}}">{{$group->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
                <li class="nav-item mt-3">
                    <a class="nav-link" href="#">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <button class=" btn btn-danger logout mt-3"
                                style="width: 100%">
                            خروج
                        </button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidemenu -->		<!-- Main Header-->
    <div class="main-header side-header sticky">
        <div class="container-fluid">
            <div class="main-header-right">
                <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="{{route('home')}}"><img src="{{url('logo/long.png')}}" class="mobile-logo" alt="لوگو" style="width: 134px; height: 37px"></a>
                    <a href="{{route('home')}}"><img src="dashboard/assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="لوگو"></a>
                </div>
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <select class="form-control select2-no-search">
                            <option label="دسته بندی ها">
                            </option>
                            <option value="IT Projects">
                                پروژه های IT
                            </option>
                            <option value="Business Case">
                                مورد تجاری
                            </option>
                            <option value="Microsoft Project">
                                پروژه مایکروسافت
                            </option>
                            <option value="Risk Management">
                                مدیریت ریسک
                            </option>
                            <option value="Team Building">
                                تیم سازی
                            </option>
                        </select>
                    </div>
                    <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                    <button class="btn search-btn"><i class="fe fe-search"></i></button>
                </div>
            </div>
            <div class="main-header-right">
                <div class="dropdown header-search">
                    <a class="nav-link icon header-search">
                        <i class="fe fe-search header-icons"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="main-form-search p-2">
                            <div class="input-group">
                                <div class="input-group-btn search-panel">
                                    <select class="form-control select2-no-search">
                                        <option label="دسته بندی ها">
                                        </option>
                                        <option value="IT Projects">
                                            پروژه های IT
                                        </option>
                                        <option value="Business Case">
                                            مورد تجاری
                                        </option>
                                        <option value="Microsoft Project">
                                            پروژه مایکروسافت
                                        </option>
                                        <option value="Risk Management">
                                            مدیریت ریسک
                                        </option>
                                        <option value="Team Building">
                                            تیم سازی
                                        </option>
                                    </select>
                                </div>
                                <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                                <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link" href="#">
                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                    </a>
                </div>
                <div class="dropdown main-header-notification">
                    <a class="nav-link icon" href="#">
                        <i class="fe fe-bell header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <p class="main-notification-text">شما 1 اعلان خوانده نشده <span class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                        </div>
                        <div class="main-notification-list">
                            <div class="media new">
                                <div class="main-img-user online"><img alt="آواتار" src="dashboard/assets/img/users/5.jpg"></div>
                                <div class="media-body">
                                    <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p><span>15 بهمن  12:32 بعد از ظهر</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user"><img alt="آواتار" src="dashboard/assets/img/users/2.jpg"></div>
                                <div class="media-body">
                                    <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13 بهمن   02:56 صبح</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user online"><img alt="آواتار" src="dashboard/assets/img/users/3.jpg"></div>
                                <div class="media-body">
                                    <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p><span>12 بهمن  10:40 بعد از ظهر</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">مشاهده همه اعلان ها</a>
                        </div>
                    </div>
                </div>
                <div class="main-header-notification">
                    <a class="nav-link icon" href="chat.html">
                        <i class="fe fe-message-square header-icons"></i>
                        <span class="badge badge-success nav-link-badge">6</span>
                    </a>
                </div>
                <div class="dropdown main-profile-menu">
                    <a class="d-flex" href="#">
                        <span class="main-img-user"><img alt="{{auth()->user()->name}}" src="{{url(auth()->user()->profile())}}"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <h6 class="main-notification-title">{{auth()->user()->name}}</h6>
                            <p class="main-notification-text">
                                @if(auth()->user()->isSuperAdmin())
                                    مدیر ارشد وبسایت
                                @elseif(auth()->user()->isAdmin())
                                    {{auth()->user()->role()->first()->name ?? ' - '}}
                                @else
                                    مشتری
                                @endif
                            </p>
                        </div>
                        <a class="dropdown-item border-top" href="profile.html">
                            <i class="fe fe-user"></i> پروفایل من
                        </a>
                        <a class="dropdown-item logout" href="#">
                            <i class="fe fe-power"></i> خروج از سیستم
                        </a>
                    </div>
                </div>

                <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="تغییر پیمایش">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button><!-- Navresponsive closed -->
            </div>
        </div>
    </div>
    <!-- End Main Header-->		<!-- Mobile-header -->
    <div class="mobile-main-header">
        <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 mr-auto">
                    <div class="dropdown header-search">
                        <a class="nav-link icon header-search">
                            <i class="fe fe-search header-icons"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="main-form-search p-2">
                                <div class="input-group">
                                    <div class="input-group-btn search-panel">
                                        <select class="form-control select2-no-search">
                                            <option label="دسته بندی ها">
                                            </option>
                                            <option value="IT Projects">
                                                پروژه های IT
                                            </option>
                                            <option value="Business Case">
                                                مورد تجاری
                                            </option>
                                            <option value="Microsoft Project">
                                                پروژه مایکروسافت
                                            </option>
                                            <option value="Risk Management">
                                                مدیریت ریسک
                                            </option>
                                            <option value="Team Building">
                                                تیم سازی
                                            </option>
                                        </select>
                                    </div>
                                    <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                                    <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown ">
                        <a class="nav-link icon full-screen-link">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="#">
                            <i class="fe fe-bell header-icons"></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <p class="main-notification-text">شما 1 اعلان خوانده نشده <span class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                            </div>
                            <div class="main-notification-list">
                                <div class="media new">
                                    <div class="main-img-user online"><img alt="آواتار" src="dashboard/assets/img/users/5.jpg"></div>
                                    <div class="media-body">
                                        <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p><span>15 بهمن  12:32 بعد از ظهر</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user"><img alt="آواتار" src="dashboard/assets/img/users/2.jpg"></div>
                                    <div class="media-body">
                                        <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13 بهمن   02:56 صبح</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user online"><img alt="آواتار" src="dashboard/assets/img/users/3.jpg"></div>
                                    <div class="media-body">
                                        <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p><span>12 بهمن  10:40 بعد از ظهر</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">مشاهده همه اعلان ها</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-notification mt-2">
                        <a class="nav-link icon" href="chat.html">
                            <i class="fe fe-message-square header-icons"></i>
                            <span class="badge badge-success nav-link-badge">6</span>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user"><img alt="آواتار" src="dashboard/assets/img/users/1.jpg"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">{{auth()->user()->name}}</h6>
                                <p class="main-notification-text">
                                    @if(auth()->user()->isSuperAdmin())
                                        مدیر ارشد وبسایت
                                    @elseif(auth()->user()->isAdmin())
                                        {{auth()->user()->role()->first()->name ?? ' - '}}
                                    @else
                                        مشتری
                                    @endif
                                </p>
                            </div>
                            <a class="dropdown-item border-top" href="profile.html">
                                <i class="fe fe-user"></i> پروفایل من
                            </a>
                            <a class="dropdown-item logout" href="#">
                                <i class="fe fe-power"></i> خروج از سیستم
                            </a>
                        </div>
                    </div>
                    <div class="dropdown  header-settings">
                        <a href="#" class="nav-link icon" data-toggle="sidebar-left" data-target=".sidebar-left">
                            <i class="fe fe-align-left header-icons"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile-header closed -->
    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">

                @yield('content')

            </div>
        </div>
    </div>
    <!-- End Main Content-->

    <!-- Main Footer-->
    <div class="main-footer text-center">
        <div class="container">
            <div class="row row-sm">
                <div class="col-md-12">
                    <span>کپی رایت © {{date('Y')}}  . طراحی شده توسط <a href="https://ultimatesoft.co">UltimateSoft Co</a> کلیه حقوق محفوظ است.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->

<!-- REQUIRED SCRIPTS -->
@jquery
@toastr_js
@toastr_render
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="{{asset('dashboard/assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('dashboard/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/bootstrap/js/bootstrap-rtl.js')}}"></script>

<!-- Perfect-scrollbar js -->
<script src="{{asset('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

<!-- Sidemenu js -->
<script src="{{asset('dashboard/assets/plugins/sidemenu/sidemenu-rtl.js')}}"></script>

<!-- Sidebar js -->
<script src="{{asset('dashboard/assets/plugins/sidebar/sidebar-rtl.js')}}"></script>

<!-- Select2 js-->
<script src="{{asset('dashboard/assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Internal Chart.Bundle js-->
<script src="{{asset('dashboard/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Peity js-->
<script src="{{asset('dashboard/assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- Internal Morris js -->
<script src="{{asset('dashboard/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/morris.js/morris.min.js')}}"></script>

<!-- Circle Progress js-->
<script src="{{asset('dashboard/assets/js/circle-progress.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/chart-circle.js')}}"></script>

<!-- Internal Dashboard js-->
<script src="{{asset('dashboard/assets/js/index.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('dashboard/assets/js/sticky.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('dashboard/assets/js/custom.js')}}"></script>

<!-- Switcher js -->
<script src="{{asset('dashboard/assets/switcher/js/switcher-rtl.js')}}"></script>

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
<!-- CK Editor for all textarea -->
<script>
    $("textarea").not(".no_ck_editor").each(function() {
        CKEDITOR.replace(this);
    });
</script>
<!-- Page script -->
<script>

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    $(document).ready(function() {
        $('.s2').select2();
    });
</script>
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{$error}}')
    </script>
@endforeach
@yield('js')

<script>
    $('.logout').on('click',function(){
        event.preventDefault();
        document.getElementById('logout-form').submit();
    })
</script>

</body>
</html>