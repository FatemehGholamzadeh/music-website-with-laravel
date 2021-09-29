@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="login.html">ورود</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                @include('frontend.users.notification')
                <div id="content" class="col-sm-9">

                    <h1 class="title">حساب کاربری ورود</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری جدید</h2>
                            <p><strong>ثبت نام حساب کاربری</strong></p>
                            <p>با ایجاد حساب کاربری میتوانید سریعتر خرید کرده، از وضعیت خرید خود آگاه شده و تاریخچه ی
                                سفارشات خود را مشاهده کنید.</p>
                            <a href="register.html" class="btn btn-success">ادامه</a></div>
                        <div class="col-sm-6">
                            @if(session('loginError'))
                                <div class="alert alert-danger">
                                    <p>
                                        {{session('loginError')}}
                                    </p>
                                </div>
                            @endif
                            <form class="form-horizontal" method="post" action="{{route('frontend.users.dologin')}}">
                                {{csrf_field()}}
                                <h2 class="subtitle">کاربر قبلی</h2>
                                <div class="form-group">
                                    <label class="control-label" for="input-email">آدرس ایمیل</label>
                                    <input type="text" name="email" value="{{old('email')}}" placeholder="آدرس ایمیل"
                                           id="input-email" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">رمز عبور</label>
                                    <input type="password" name="password" value="" placeholder="رمز عبور"
                                           id="input-password" class="form-control"/>
                                    <br/>
                                    <label>
                                        <input type="checkbox" name="remember"> مرا به خاطر بسپار
                                    </label>
                                </div>
                                <input type="submit" value="ورود" class="btn btn-success"/>
                            </form>

                        </div>
                    </div>
                </div>
                <!--Middle Part End -->
                <!--Right Part Start -->
                <aside id="column-right" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle">حساب کاربری</h3>
                    <div class="list-group">
                        <ul class="list-item">
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="register.html">ثبت نام</a></li>
                            <li><a href="#">فراموشی رمز عبور</a></li>
                            <li><a href="#">حساب کاربری</a></li>
                        </ul>
                    </div>
                </aside>
                <!--Right Part End -->
            </div>
        </div>
    </div>
@endsection