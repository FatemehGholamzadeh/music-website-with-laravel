@extends('layouts.admin')
@section('content')
    <div class="col-md-10 col-lg-9">
        @include('frontend.users.notification')
    <h1>لیست نظرات </h1>
    @if($about_us && count($about_us)>0)
        <table class="table table-bordered">
            <thead>
            @include('admin.about_us.item')
            </thead>
            @foreach($about_us as $about_us )
                @include('admin.about_us.columns',$about_us)
            @endforeach
        </table>
    @endif
    </div>
@endsection