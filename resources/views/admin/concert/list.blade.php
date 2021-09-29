@extends('layouts.admin')
@section('content')
    <div class="col-md-10 col-lg-9">
    <h1>لیست فایل ها </h1>
        @include('users.notification')
    @if($concerts && count($concerts)>0)
        <table class="table table-bordered">
            <thead>
            @include('admin.concert.item')
            </thead>
            @foreach($concerts as $concert )
                @include('admin.concert.columns',$concert)
            @endforeach
        </table>

    @endif
    </div>
@endsection
