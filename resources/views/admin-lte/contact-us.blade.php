@extends('layouts.admin.main')

@section('title', 'Admin | Contact Us')

@section('css')
@parent
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin_lte/plugins/summernote/summernote-bs4.css')}}">

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
                <h1 class="m-0 text-dark">Contact Us Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Contact Us</li>
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
                    <form method="POST" action="{{ route('admin-contact-us-store') }}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <input type="hidden" name="id" @if(isset($list->id)) value="{{$list->id}}" @endif />
                        <div class="card-body">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" required placeholder="Metatag title" @if(isset($list->meta_title)) value="{{$list->meta_title}}" @endif>
                            </div>
                            <div class="form-group">
                                <label>Metatag Description</label>
                                <textarea class="form-control" name="meta_description" required placeholder="Metatag description">@if(isset($list->meta_description)) {{$list->meta_description}} @endif</textarea>
                            </div>

                            <div class="form-group">
                                <label>Contact</label>
                                <textarea class="textarea" name="contact" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($list)) {{$list->contact}} @endif
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label>Name Title</label>
                                <input type="text" class="form-control" required name="name_title" @if(isset($list->name_title)) value="{{$list->name_title}}" @endif placeholder="Type new field name">
                            </div>

                            <div class="form-group">
                                <label>Email Title</label>
                                <input type="text" class="form-control" required name="email_title" placeholder="Type new field name" @if(isset($list->email_title)) value="{{$list->email_title}}" @endif>
                            </div>

                            <div class="form-group">
                                <label>Message Title</label>
                                <input type="text" class="form-control" required name="message_title" placeholder="Type new field name" @if(isset($list->message_title)) value="{{$list->message_title}}" @endif>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Button Left: </label>
                                    <input type="text" class="form-control" required name="button_left" @if(isset($list->button_left)) value="{{$list->button_left}}" @endif placeholder="Type content">
                                </div>
                                <div class="col-md-6">
                                    <label>Button Right: </label>
                                    <input type="text" class="form-control" required name="button_right" @if(isset($list->button_right)) value="{{$list->button_right}}" @endif placeholder="Type content">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Note</label>
                                <textarea class="textarea" name="note" required style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($list->note)) {{$list->note}} @endif</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image_name">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    @if(isset($list->image_name))<img class="img-fluid" style="width: 20%;" src="{{asset($list->image_name)}}" alt="Photo">@endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
