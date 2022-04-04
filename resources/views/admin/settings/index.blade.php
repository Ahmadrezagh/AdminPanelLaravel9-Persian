
@extends('layouts.panel')
@section('Setting')
    active
@endsection
@section( $group->name )
    active
@endsection
@section('title')
{{$group->name}}
@endsection
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"> {{$group->name}} </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">تنظیمات</li>
                <li class="breadcrumb-item active" aria-current="page">{{$group->name}}</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">

                    <form role="form" action="{{route('settings.update',$group->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            @foreach($group->settings as $setting)
                                @if($setting->type == 'string')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{$setting->description}}</label>
                                        <input type="text" name="{{$setting->id}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$setting->value}}">
                                    </div>
                                @elseif($setting->type == 'email')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{$setting->description}}</label>
                                        <input type="email" name="{{$setting->id}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$setting->value}}">
                                    </div>
                                @elseif($setting->type == 'number')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{$setting->description}}</label>
                                        <input type="number" name="{{$setting->id}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$setting->value}}">
                                    </div>
                                @elseif($setting->type == 'textarea')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{$setting->description}}</label>
                                        <textarea name="{{$setting->id}}">{{$setting->value}}</textarea>
                                        <script>
                                            CKEDITOR.replace( '{{$setting->id}}' );
                                        </script>
                                    </div>
                                @elseif($setting->type == 'file')
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{$setting->description}}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="{{$setting->id}}" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ویرایش</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection
