@extends('layouts.main')

@if(isset($list->meta_title))
    @section('title', $list->meta_title)
@endif

@section('meta_description')
    <meta name="description" @if(isset($list->meta_description)) content="{{ $list->meta_description }}" @endif />
@endsection

@section('content')

    <div class="banner bg-grey w-100">
        <div class="container">
            <div class="row">
                <div class="banner-content col-md-6 p-sm-5 px-md-0 py-2" id="extraContainer9">
                    {{-- <div class="centered"> --}}
                        {!! $list->banner_title !!}
                        <hr />
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content section -->
<section class="py-5">
    <div class="container">
        {!! $list->body_text !!}
    </div>
</section>

@endsection

@section('js')
@parent


@endsection
