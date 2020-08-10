@extends('layouts.main')

@if(isset($list->meta_title))
    @section('title', $list->meta_title)
@endif

@section('meta_description')
    <meta name="description" @if(isset($list->meta_description)) content="{{ $list->meta_description }}" @endif />
@endsection

@section('css')
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('admin_lte/plugins/toastr/toastr.min.css')}}">
@endsection

@section('content')
<!-- Header - set the background image for the header in the line below -->
<header class="py-1 bg-image-full" style="background-image: url({{ asset($list->image_name) }});">
</header>

<!-- Content section -->
<section class="py-5">
    <div class="container">
        <div class="col-md-12 d-sm-block w-100">
            {!!$list->contact!!}
        </div>
    </div>
</section>

<!-- Content section -->
<section class="py-5">
    <div class="container">
        <div class="d-md-flex contato">
            <div class="col-md-12 d-sm-block w-100">
                <div class="contato-content bg-white">
                    <form method="POST" action="{{ route('contact-us-mail') }}">
                         {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="" class="text-uppercase font-weight-bold">{!! $list->name_title !!}</label>
                                <input type="text" class="form-control" name="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-uppercase font-weight-bold">{!! $list->email_title !!}</label>
                                <input type="email" name="email" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-uppercase font-weight-bold">{!! $list->message_title !!}</label>
                                <textarea name="message" id="message" cols="30" rows="10"
                                          class="form-control"></textarea>
                            </div>
        					<button type="reset" class="btn btn-secondary text-uppercase">{!! $list->button_left !!}</button>
                            <button type="submit" class="btn btn-primary text-uppercase">{!! $list->button_right !!}</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="col-md-12 d-sm-block w-100">
            {!!$list->note!!}
        </div>
    </div>
</section>
@endsection

@section('js')
    @parent

    <script>

    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "progressBar": true,
                "preventDuplicates": false,
                "positionClass": "toast-top-center",
                "onclick": null,
                "showDuration": "400",
                "hideDuration": "1000",
                "timeOut": "7000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            @if (!is_null(session('message-insert')))
                toastr.success('{{session('message-insert')}}');
            @elseif(!is_null(session('message-delete')))
                toastr.error('{{ session("message-delete") }}');
            @elseif(!is_null(session('message-error')))
                toastr.error('{{ session("message-error") }}');
            @elseif(!is_null(session('message-success')))
                toastr.success('{{ session("message-success") }}');
            @elseif(isset($message_success) and $message_success == true)
                toastr.success('{{ $message_success }}');
            @endif
        }, 1300);
    });

    </script>

@endsection
