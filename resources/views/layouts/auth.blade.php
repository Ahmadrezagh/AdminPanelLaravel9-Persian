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

<!-- Loader -->
<div id="global-loader">
  <img src="{{asset('dashboard/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->


<!-- Page -->
<div class="page main-signin-wrapper">

@yield('content')

</div>
<!-- End Page -->

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

<script>
  $('.logout').on('click',function(){
    event.preventDefault();
    document.getElementById('logout-form').submit();
  })
</script>






</body>

</html>