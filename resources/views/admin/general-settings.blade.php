@extends('layouts.admin.main')

@section('title', 'Admin | General Settings')

@section('css')
@parent
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin_lte/plugins/summernote/summernote-bs4.css')}}">

<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<style>
    .card-block{
        background-color: #f0f0f0 !important;
    }
</style>


@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">General Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                    <li class="breadcrumb-item active">General Settings</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Change the information bellow</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('admin-general-settings-store') }}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <input type="hidden" name="id" @if(isset($list->id)) value="{{$list->id}}" @endif />
                        <div class="card-body">
                            @foreach($list_menu as $list_menu_ind => $list_menu_array)
                                <div class="form-group">
                                    <input type="hidden" name="menu_id[]" value="{{$list_menu_array->id}}"/>
                                    <label>Menu Name</label>
                                    <input type="text" class="form-control" name="menu_name[]" required placeholder="Footer Address" value="{{$list_menu_array->menu_name}}">
                                </div>
                            @endforeach
                            <div class="form-group">
                                <label>Facebook account</label>
                                <input type="text" class="form-control" name="facebook_link" placeholder="http://wwww.domain.ca" required placeholder="Footer Address" @if(isset($list->facebook_link)) value="{{$list->facebook_link}}" @endif>
                            </div>
                            <div class="form-group">
                                <label>Facebook Icon &nbsp;</label>
                                <div class="icheck-primary d-inline">
                                    <div class="icheck-success d-inline">
                                        <input  class="form-control" type="radio" @if(isset($list->facebook_icon) and $list->facebook_icon == 'fa fa-facebook') checked @endif name="facebook_icon" value="fa fa-facebook" id="faceRadioSuccess1">
                                        <label for="faceRadioSuccess1">
                                            <span class="fa-stack">
                                                <i class="fab fa-lg fa-fw m-r-10 fa-facebook"></i>
                                            </span>
                                        </label>

                                    </div>
                                    <div class="icheck-success d-inline">
                                        <input  class="form-control" type="radio"  @if(isset($list->facebook_icon) and $list->facebook_icon == 'fa fa-facebook-square') checked @endif name="facebook_icon" value="fa fa-facebook-square" id="faceRadioSuccess2">
                                        <label for="faceRadioSuccess2">
                                            <i class="fab fa-lg fa-fw m-r-10 fa-facebook-square"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Twitter account</label>
                                <input type="text" class="form-control" name="twitter_link" placeholder="http://wwww.domain.ca" required placeholder="Footer Address" @if(isset($list->twitter_link)) value="{{$list->twitter_link}}" @endif>
                            </div>
                            <div class="form-group">
                                <label>Twitter Icon &nbsp;</label>
                                <div class="icheck-primary d-inline">
                                    <div class="icheck-success d-inline">
                                        <input  class="form-control" type="radio" @if(isset($list->twitter_icon) and $list->twitter_icon == 'fa fa-twitter') checked @endif name="twitter_icon" value="fa fa-twitter" id="twitterRadioSuccess1">
                                        <label for="twitterRadioSuccess1">
                                            <i class="fab fa-lg fa-fw m-r-10 fa-twitter"></i>
                                        </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                        <input  class="form-control" type="radio" @if(isset($list->twitter_icon) and $list->twitter_icon == 'fa fa-twitter-square') checked @endif name="twitter_icon" value="fa fa-twitter-square" id="twitterRadioSuccess2">
                                        <label for="twitterRadioSuccess2">
                                            <i class="fab fa-lg fa-fw m-r-10 fa-twitter-square"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Google Analytics</label>
                                <textarea class="form-control" name="google_analytics" placeholder="Google Analytics Tag" rows="10">{{ $list->google_analytics }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Facebook Pixel</label>
                                <textarea class="form-control" name="facebook_pixel" placeholder="Facebook Pixel" rows="10">{{ $list->facebook_pixel }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>No-index &nbsp;</label>
                                <div class="icheck-primary d-inline">
                                    <div class="icheck-success d-inline">
                                        <input  class="form-control" type="radio" @if(isset($list->show_noindex) and $list->show_noindex == true) checked @endif name="show_noindex" value="1" id="noIndexRadioSuccess1">
                                        <label for="noIndexRadioSuccess1">
                                            Active
                                        </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                        <input  class="form-control" type="radio" @if(isset($list->show_noindex) and $list->show_noindex == false) checked @endif name="show_noindex" value="0" id="noIndexRadioSuccess2">
                                        <label for="noIndexRadioSuccess2">
                                            Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo_image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <img class="img-fluid" style="width: 20%;" src="{{asset($list->logo_image)}}" alt="Photo">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- ./col -->
            </div>

        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('js')
@parent
<!-- ChartJS -->
<script src="{{ asset('admin_lte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Summernote -->
<script src="{{ asset('admin_lte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- bs-custom-file-input -->
<script src="{{ asset('admin_lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script>
$(function () {
  // Summernote
    $('.textarea').summernote({
        height: 100,
    });

    bsCustomFileInput.init();
})


</script>

@endsection
