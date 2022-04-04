
@extends('layouts.panel')
@section('home','active')
@section('title')
    خانه
@endsection
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">به داشبورد خوش آمدید</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">داشبورد پروژه</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
                <button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
                    وارد كردن<i class="fe fe-download mr-2"></i>
                </button>
                <button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
                    فیلتر<i class="fe fe-filter ml-2"></i>
                </button>
                <button type="button" class="btn btn-primary my-2 btn-icon-text">
                    گزارش را بارگیری کنید<i class="fe fe-download-cloud mr-2"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!--Row-->
    <div class="row row-sm">
        <div class="col-sm-12 col-lg-12 col-xl-8">

            <!--Row-->
            <div class="row row-sm  mt-lg-4">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary custom-card card-box">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                    <h4 class="d-flex  mb-3">
                                        <span class="font-weight-bold text-white ">سونیا تیلور!</span>
                                    </h4>
                                    <p class="tx-white-7 mb-1">شما دو پروژه برای اتمام دارید ، <b class="text-warning">57٪</b> از سطح ماهیانه خود را تکمیل کرده اید ، به سطح خود ادامه دهید
                                    </p></div>
                                <img src="dashboard/assets/img/pngs/work3.png" alt="user-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row -->

            <!--Row-->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon card-icon">
                                    <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"></rect><g><rect fill="none" height="24" width="24"></rect><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"></path><rect height="5" width="2" x="7" y="12"></rect><rect height="10" width="2" x="15" y="7"></rect><rect height="3" width="2" x="11" y="14"></rect><rect height="2" width="2" x="11" y="10"></rect></g></g></g></svg>
                                </div>
                                <div class="card-item-title mb-2">
                                    <label class="main-content-label tx-13 font-weight-bold mb-1">درآمد کل </label>
                                    <span class="d-block tx-12 mb-0 text-muted">ماه قبل در مقابل این ماه ها</span>
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-bold">5900.00 تومان</h4>
                                        <small><b class="text-success">55٪</b> بالاتر</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z" opacity=".3"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"></path></svg>
                                </div>
                                <div class="card-item-title mb-2">
                                    <label class="main-content-label tx-13 font-weight-bold mb-1">کارمندان جدید کارمندان </label>
                                    <span class="d-block tx-12 mb-0 text-muted">در این ماه پیوستند</span>
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-bold">15</h4>
                                        <small><b class="text-success">5٪</b> افزایش یافته</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon card-icon">
                                    <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z" opacity=".3"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"></path></svg>
                                </div>
                                <div class="card-item-title  mb-2">
                                    <label class="main-content-label tx-13 font-weight-bold mb-1">کل هزینه های </label>
                                    <span class="d-block tx-12 mb-0 text-muted">ماه قبل در مقابل این ماه ها</span>
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-bold">8500 تومان</h4>
                                        <small><b class="text-danger">12٪</b> کاهش</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End row-->

            <!--row-->
            <div class="row row-sm">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom-0">
                            <div>
                                <label class="main-content-label mb-2">بودجه پروژه بودجه </label> <span class="d-block tx-12 mb-0 text-muted">پروژه ابزاری است که توسط مدیران پروژه برای تخمین هزینه کل یک پروژه استفاده می شود</span>
                            </div>
                        </div>
                        <div class="card-body pl-0">
                            <div class="">
                                <div class="container">
                                    <canvas id="chartLine" class="chart-dropshadow2 ht-250"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header  border-bottom-0 pb-0">
                            <div>
                                <div class="d-flex">
                                    <label class="main-content-label my-auto pt-2">امروز وظایف</label>
                                    <div class="mr-auto mt-3 d-flex">
                                        <div class="ml-3 d-flex text-muted tx-13"><span class="legend bg-primary rounded-circle"></span>پروژه</div>
                                        <div class="d-flex text-muted tx-13"><span class="legend bg-light rounded-circle"></span>در حال پیش رفت</div>
                                    </div>
                                </div>
                                <span class="d-block tx-12 mt-2 mb-0 text-muted"> UX UI و توسعه Backend. </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-auto">
                                    <h6 class="mb-3 font-weight-normal">بودجه پروژه</h6>
                                    <div class="text-right">
                                        <h3 class="font-weight-bold ml-3 mb-2 text-primary">5240 تومان</h3>
                                        <p class="tx-13 my-auto text-muted">28 مه - 01 بهمن (2018)</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-auto">
                                    <div class="forth circle">
                                        <div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75٪</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header  border-bottom-0 pb-0">
                            <div>
                                <div class="d-flex">
                                    <label class="main-content-label my-auto pt-2">سوالات برتر</label>
                                </div>
                                <span class="d-block tx-12 mt-2 mb-0 text-muted"> کار پروژه شامل گروهی از دانشجویان است که در حال تحقیق هستند. </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mt-1">
                                <div class="col-5">
                                    <span class="">هویت نام تجاری</span>
                                </div>
                                <div class="col-4 my-auto">
                                    <div class="progress ht-6 my-auto">
                                        <div class="progress-bar ht-6 wd-80p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <span class="tx-13"><i class="text-success fe fe-arrow-up"></i><b>24.75٪</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-5">
                                    <span class="">طراحی UI و UX</span>
                                </div>
                                <div class="col-4 my-auto">
                                    <div class="progress ht-6 my-auto">
                                        <div class="progress-bar ht-6 wd-70p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <span class="tx-13"><i class="text-danger fe fe-arrow-down"></i><b>12.34٪</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-5">
                                    <span class="">طراحی محصول</span>
                                </div>
                                <div class="col-4 my-auto">
                                    <div class="progress ht-6 my-auto">
                                        <div class="progress-bar ht-6 wd-40p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <span class="tx-13"><i class="text-success  fe fe-arrow-up"></i><b>12.75٪</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-lg-12">
                    <div class="card custom-card mg-b-20">
                        <div class="card-body">
                            <div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
                                <div>
                                    <label class="main-content-label mb-2">وظایف </label> <span class="d-block tx-12 mb-3 text-muted">یک کار در یک مهلت تعیین شده انجام می شود و باید به اهداف مربوط به کار کمک کند.</span>
                                </div>
                                <div class="mr-auto">
                                    <a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"></a>
                                        <a class="dropdown-item" href="#">وضعیت </a><a class="dropdown-item" href="#">تیم </a>
                                        <a class="dropdown-item" href="#">وظیفه</a><a class="dropdown-item" href="#"></a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-cog ml-2"></i> تنظیمات</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive tasks">
                                <table class="table card-table table-vcenter text-nowrap mb-0  border">
                                    <thead>
                                    <tr>
                                        <th class="wd-lg-10p">وظیفه</th>
                                        <th class="wd-lg-20p">تیم</th>
                                        <th class="wd-lg-20p text-center">وظیفه باز</th>
                                        <th class="wd-lg-20p">برتری</th>
                                        <th class="wd-lg-20p">وضعیت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="font-weight-semibold d-flex"><label class="ckbox my-auto ml-4 mt-1"><input checked="" type="checkbox"><span></span></label><span class="mt-1">ارزیابی طرح</span></td>
                                        <td class="text-nowrap">
                                            <div class="demo-avatar-group my-auto float-right">
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/1.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/2.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/3.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/4.jpg">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">37<i class=""></i></td>
                                        <td class="text-primary">بالا</td>
                                        <td><span class="badge badge-pill badge-primary-light">تکمیل شده</span></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold d-flex"><label class="ckbox my-auto ml-4"><input checked="" type="checkbox"><span></span></label><span class="mt-1"> ایده هایی برای طراحی ایجاد کنید</span></td>
                                        <td class="text-nowrap">
                                            <div class="demo-avatar-group my-auto float-right">
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/5.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/6.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/7.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/8.jpg">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">37<i class=""></i></td>
                                        <td class="text-secondary">طبیعی</td>
                                        <td><span class="badge badge-pill badge-warning-light">در انتظار</span></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold d-flex"><label class="ckbox my-auto ml-4"><input type="checkbox"><span></span></label><span class="mt-1">مشکل را تعریف کنید</span></td>
                                        <td class="text-nowrap">
                                            <div class="demo-avatar-group my-auto float-right">
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/11.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/12.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/9.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/10.jpg">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">37<i class=""></i></td>
                                        <td class="text-warning">کم</td>
                                        <td><span class="badge badge-pill badge-primary-light">تکمیل شده</span></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold d-flex"><label class="ckbox my-auto ml-4"><input type="checkbox"><span></span></label><span class="mt-1">با کاربران همدردی کنید</span></td>
                                        <td class="text-nowrap">
                                            <div class="demo-avatar-group my-auto float-right">
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/7.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/9.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/11.jpg">
                                                </div>
                                                <div class="main-img-user avatar-sm">
                                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/12.jpg">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">37<i class=""></i></td>
                                        <td class="text-primary">بالا</td>
                                        <td><span class="badge badge-pill badge-danger-light">رد شد</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
            </div><!-- Row end -->
        </div><!-- col end -->
        <div class="col-sm-12 col-lg-12 col-xl-4 mt-xl-4">
            <div class="card custom-card card-dashboard-calendar pb-0">
                <label class="main-content-label mb-2 pt-1">ترجمه های اخیر </label>
                <span class="d-block tx-12 mb-2 text-muted">پروژه هایی که کار توسعه در حال اتمام است</span>
                <table class="table table-hover m-b-0 transcations mt-2">
                    <tbody>
                    <tr>
                        <td class="wd-5p">
                            <div class="main-img-user avatar-md">
                                <img alt="آواتار" class="rounded-circle ml-3" src="dashboard/assets/img/users/5.jpg">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-middle mr-3">
                                <div class="d-inline-block">
                                    <h6 class="mb-1">سوسو زدن</h6>
                                    <p class="mb-0 tx-13 text-muted">بهبود برنامه</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-left">
                            <div class="d-inline-block">
                                <h6 class="mb-2 tx-15 font-weight-semibold">45234 تومان<i class="fas fa-level-up-alt mr-2 text-success m-r-10"></i></h6>
                                <p class="mb-0 tx-11 text-muted">12 اسفند1399 </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="wd-5p">
                            <div class="main-img-user avatar-md">
                                <img alt="آواتار" class="rounded-circle ml-3" src="dashboard/assets/img/users/6.jpg">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-middle mr-3">
                                <div class="d-inline-block">
                                    <h6 class="mb-1">مسمومیت</h6>
                                    <p class="mb-0 tx-13 text-muted">نقطه عطف</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-left">
                            <div class="d-inline-block">
                                <h6 class="mb-2 tx-15 font-weight-semibold">23452 تومان<i class="fas fa-level-down-alt mr-2 text-danger m-r-10"></i></h6>
                                <p class="mb-0 tx-11 text-muted">23 اسفند 1399</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="wd-5p">
                            <div class="main-img-user avatar-md">
                                <img alt="آواتار" class="rounded-circle ml-3" src="dashboard/assets/img/users/7.jpg">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-middle mr-3">
                                <div class="d-inline-block">
                                    <h6 class="mb-1">دیجی وات</h6>
                                    <p class="mb-0 tx-13 text-muted">مجری فروش</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-left">
                            <div class="d-inline-block">
                                <h6 class="mb-2 tx-15 font-weight-semibold">78001 تومان<i class="fas fa-level-down-alt mr-2 text-danger m-r-10"></i></h6>
                                <p class="mb-0 tx-11 text-muted">4 بهمن1399 </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="wd-5p">
                            <div class="main-img-user avatar-md">
                                <img alt="آواتار" class="rounded-circle ml-3" src="dashboard/assets/img/users/8.jpg">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-middle mr-3">
                                <div class="d-inline-block">
                                    <h6 class="mb-1">سوسو زدن</h6>
                                    <p class="mb-0 tx-13 text-muted">نقطه عطف 2</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-left">
                            <div class="d-inline-block">
                                <h6 class="mb-2 tx-15 font-weight-semibold">37285 تومان<i class="fas fa-level-up-alt mr-2 text-success m-r-10"></i></h6>
                                <p class="mb-0 tx-11 text-muted">4 بهمن 1399  </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="wd-5p pb-0">
                            <div class="main-img-user avatar-md">
                                <img alt="آواتار" class="rounded-circle ml-3" src="dashboard/assets/img/users/4.jpg">
                            </div>
                        </td>
                        <td class="pb-0">
                            <div class="d-flex align-middle mr-3">
                                <div class="d-inline-block">
                                    <h6 class="mb-1">سوسو زدن</h6>
                                    <p class="mb-0 tx-13 text-muted">بهبود برنامه</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-left pb-0">
                            <div class="d-inline-block">
                                <h6 class="mb-2 tx-15 font-weight-semibold">25341 تومان<i class="fas fa-level-down-alt mr-2 text-danger m-r-10"></i></h6>
                                <p class="mb-0 tx-11 text-muted">4 بهمن 1399 </p>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card custom-card">
                <div class="card-body">
                    <div class="row row-sm">
                        <div class="col-6">
                            <div class="card-item-title">
                                <label class="main-content-label tx-13 font-weight-bold mb-2">پروژه راه اندازی </label>
                                <span class="d-block tx-12 mb-0 text-muted">پروژه در حال راه اندازی است</span>
                            </div>
                            <p class="mb-0 tx-24 mt-2"><b class="text-primary">145 روز</b></p>
                            <a href="#" class="text-muted">12 دوشنبه ، بهمن 1399 </a>
                        </div>
                        <div class="col-6">
                            <img src="dashboard/assets/img/pngs/work.png" alt="تصویر" class="best-emp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0 d-flex pl-3 ml-1">
                    <div>
                        <label class="main-content-label mb-2 pt-2">در پروژه های  بزرگ </label>
                        <span class="d-block tx-12 mb-2 text-muted">هایی که کار توسعه در آن به پایان می رسد</span>
                    </div>
                </div>
                <div class="card-body pt-2 mt-0">
                    <div class="list-card">
                        <div class="d-flex">
                            <div class="demo-avatar-group my-auto float-right">
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/1.jpg">
                                </div>
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/2.jpg">
                                </div>
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/3.jpg">
                                </div>
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/4.jpg">
                                </div>
                                <div class="">تیم طراحی</div>
                            </div>
                            <div class="mr-auto float-right">
                                <div class="">
                                    <a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-left" style="">
                                        <a class="dropdown-item" href="#">امروز </a>
                                        <a class="dropdown-item" href="#">هفته </a>
                                        <a class="dropdown-item" href="#">گذشته ماه </a>
                                        <a class="dropdown-item" href="#">گذشته سال گذشته</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-item mt-4">
                            <div class="card-item-icon bg-transparent card-icon">
                                <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#6259ca&quot;, &quot;rgba(204, 204, 204,0.3)&quot;], &quot;innerRadius&quot;: 15, &quot;radius&quot;: 20}">7/6</span>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <small class="tx-10 text-primary font-weight-semibold">25اسفند 1399</small>
                                    <h6 class=" mt-2">طراحی برنامه موبایل</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-card mb-0">
                        <div class="d-flex">
                            <div class="demo-avatar-group my-auto float-right">
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/5.jpg">
                                </div>
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/6.jpg">
                                </div>
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/7.jpg">
                                </div>
                                <div class="main-img-user avatar-xs">
                                    <img alt="آواتار" class="rounded-circle" src="dashboard/assets/img/users/8.jpg">
                                </div>
                                <div class="">تیم طراحی</div>
                            </div>
                            <div class="mr-auto float-right">
                                <div class="">
                                    <a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-left" style="">
                                        <a class="dropdown-item" href="#">امروز </a>
                                        <a class="dropdown-item" href="#">هفته </a>
                                        <a class="dropdown-item" href="#">گذشته ماه </a>
                                        <a class="dropdown-item" href="#">گذشته سال گذشته</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-item mt-4">
                            <div class="card-item-icon bg-transparent card-icon">
                                <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#6259ca&quot;, &quot;rgba(204, 204, 204,0.3)&quot;], &quot;innerRadius&quot;: 15, &quot;radius&quot;: 20}">5/7</span>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <small class="tx-10 text-primary font-weight-semibold">12 بهمن 1399</small>
                                    <h6 class=" mt-2">طراحی مجدد وب سایت</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-body">
                    <div class="d-flex">
                        <label class="main-content-label my-auto">طراحی وب سایت</label>
                        <div class="mr-auto  d-flex">
                            <div class="ml-3 d-flex text-muted tx-13">در حال دویدن</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <span class="tx-15 text-muted">کار به پایان رسید: 7/10</span>
                        </div>
                        <div class="container mt-2 mb-2">
                            <canvas id="bar-chart" class="ht-180"></canvas>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mt-4">
                                <div class="d-flex mb-2">
                                    <h5 class="tx-15 my-auto text-muted font-weight-normal">مشتری :</h5>
                                    <h5 class="tx-15 my-auto ml-3">جان دیو</h5>
                                </div>
                                <div class="d-flex mb-0">
                                    <h5 class="tx-13 my-auto text-muted font-weight-normal">ضرب الاجل :</h5>
                                    <h5 class="tx-13 my-auto text-muted ml-2">25 اسفند 1399</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col col-auto">
                            <div class="mt-3">
                                <div class="">
                                    <img alt="" class="ht-50" src="dashboard/assets/img/media/project-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- col end -->
    </div><!-- Row end -->

@endsection
