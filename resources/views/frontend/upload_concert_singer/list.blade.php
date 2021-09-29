@extends('layouts.admin')
@section('content')
    <div class="col-md-10 col-lg-9">
    <h1>لیست فایل ها </h1>
        @include('frontend.users.notification')
    @if($concerts && count($concerts)>0)
        <table class="table table-bordered">
            <thead>
            @include('frontend.upload_concert_singer.item')
            </thead>
            @foreach($concerts as $concert )
                @include('frontend.upload_concert_singer.columns',$concert)
            @endforeach
        </table>
    @endif
    </div>
@endsection
