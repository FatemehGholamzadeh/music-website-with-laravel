@extends('layouts.admin')
@section('content')
    <div class="col-md-9 col-lg-9">
    <h1>لیست کاربران </h1>
    @include('users.notification')
    @if($users && count($users)>0)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>شناسه</th>
                <th>نام کاربری</th>
                <th>نام و نام خانوادگی</th>
                <th>تلفن</th>
                <th>ایمیل</th>
                <th>نقش کاربری</th>
                <th>شهر</th>
                <th>استان</th>
                <th>عملیات</th>
            </tr>
            </thead>
            @foreach($users as $user )
                @include('admin.user.item',$user)
            @endforeach
        </table>
    @endif
    </div>
@endsection