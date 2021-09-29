@extends('layouts.admin')
@section('content')
    <div class="col-md-9 col-lg-9">

    <h1>لیست فایل ها </h1>
        @include('users.notification')
    @if($files && count($files)>0)
        <table class="table table-bordered">
            <thead>
            @include('admin.music.item')
            </thead>
            @foreach($files as $file )
                @include('admin.music.columns',$file)
            @endforeach
        </table>

    @endif
    </div>
@endsection