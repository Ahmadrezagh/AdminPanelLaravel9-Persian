
@extends('layouts.panel')
@section('admins')
    active
@endsection
@section('roles')
    active
@endsection
@section('title')
    نقش ها
@endsection
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"> مدیریت </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">نقش ها</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-create">ایجاد نقش جدید</button>

                    <!-- Create Modal -->
                    <div class="modal fade" id="modal-create">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">ایجاد نقش جدید</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- form start -->
                                    <form  method="POST" action="{{route('roles.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" style="float: right">نام نقش</label>
                                                <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="نام نقش" required>
                                            </div>
                                            <div class="row col-md-12">
                                                @foreach($permissions as $permission)
                                                    <div class="form-check col-md-6">
                                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="{{ $permission->name }}" id="defaultCheck1">
                                                        <label class="form-check-label mx-3" for="defaultCheck1">
                                                            {{$permission->persian_name}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">ایجاد</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <table id="table" class="table table-bordered table-striped text-center mt-3">
                        <thead>
                        <tr>
                            <th>نام نقش</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach ($roles as $role)
                            <tr>
                                <td>
                                    {{$role->name}}
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-sliders-h"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <button type="button" class="btn btn-success dropdown-item" data-toggle="modal" data-target="#modal-edit{{$role->id}}" >ویرایش</button>
                                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-delete{{$role->id}}" >حذف</button>
                                    </div>
                                </td>

                            </tr>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="modal-delete{{$role->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">حذف نقش</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>آیا در حذف نقش  `{{$role->name}}`  مطمین هستید؟</h5>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                            <form action="{{route('roles.destroy',$role->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">حدف</button>

                                            </form>

                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <!-- /.modal -->
                            <!-- Change Modal -->
                            <div class="modal fade" id="modal-edit{{$role->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">ویرایش نقش</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- form start -->
                                            <form  method="POST" action="{{route('roles.update',$role->id)}}"  enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="id" value="{{$role->id}}">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">نام</label>
                                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="نام نقش" required value="{{$role->name}}" required>
                                                    </div>
                                                    <div class="row col-md-12">
                                                        @foreach($permissions as $permission)
                                                            <div class="form-check col-md-6" dir="ltr">
                                                                <input class="form-check-input" name="permissions[]" type="checkbox" value="{{ $permission->name }}" @if($role->permissions){{ $role->permissions->contains($permission) ? 'checked' : '' }}@endif id="defaultCheck1">
                                                                <label class="form-check-label mx-3" for="defaultCheck1">
                                                                    {{$permission->persian_name}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">ویرایش</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
