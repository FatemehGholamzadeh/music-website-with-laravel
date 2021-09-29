@extends('layouts.admin')
@section('content')
    <div class="col-md-9 col-lg-9">
        <h1>لیست فایل ها </h1>
        @include('users.notification')
        @if($musicvideos && count($musicvideos)>0)
            <table class="table table-bordered">
                <thead>
                @include('admin.musicvideo.item')
                </thead>
                @foreach($musicvideos as $musicvideo )
                    @include('admin.musicvideo.columns',$musicvideo)
                @endforeach
            </table>

        @endif
    </div>
@endsection
