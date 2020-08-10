@extends('layouts.admin.main')

@section('title', 'Admin')

@section('css')
@parent

<style>
    .card-block{
        background-color: #f0f0f0 !important;
    }
</style>

<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin_lte/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home Admin</a></li>
                    <li class="breadcrumb-item active">Edit Home</li>
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
                    <form method="POST" action="{{ route('admin-home-store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" @if(isset($list)) value="{{$list->id}}" @endif />
                        <div class="card-body">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" required placeholder="Metatag title" @if(isset($list)) value="{{$list->meta_title}}" @endif>
                            </div>
                            <div class="form-group">
                                <label>Metatag Description</label>
                                <textarea class="form-control" name="meta_description" required placeholder="Metatag description">@if(isset($list)) {{$list->meta_description}} @endif</textarea>
                            </div>

                            <div class="form-group">
                               <label for="exampleInputFile">Banner Text</label>
                                <div class="mb-3">
                                    <textarea class="banner" name="banner_title" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($list)) {{$list->banner_title}} @endif
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                               <label for="exampleInputFile">Body Content</label>
                                <div class="mb-3">
                                    <textarea class="textarea" name="body_text" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($list)) {{$list->body_text}} @endif
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Banner Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="banner_image" class="custom-file-input" @if(isset($list)) value="{{$list->banner_image}}" @endif>
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <img class="img-fluid" style="width: 20%;" src="{{asset($list->banner_image)}}" alt="Photo">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
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

<!-- Summernote -->
<script src="{{ asset('admin_lte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- bs-custom-file-input -->
<script src="{{ asset('admin_lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>


<script>
$(function () {
  // Summernote
  $('.banner').summernote({
      height: 100
  });

  $('.textarea').summernote({
      height: 300,
  });

  bsCustomFileInput.init();
})
</script>

@endsection
