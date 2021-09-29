@extends('layouts.users')
@section('content')

    <div id="container" style="background-color: white">
        <div class="container">
            <!-- Breadcrumb Start-->
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="login.html">حساب کاربری</a></li>
                    <li><a href="register.html">ثبت نام</a></li>
                </ul>
            </div>

            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                @include('users.partials.errors')
                @include('users.notification')
                <div class="col-sm-9" id="content">
                    <h1 class="title">ثبت نام حساب کاربری</h1>
                    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه
                        کنید.</p>
                    <form class="form-horizontal" method="post">
                        {{csrf_field()}}
                        <fieldset id="account">
                            <legend>اطلاعات شخصی شما</legend>
                            <div style="display: none;" class="form-group required">
                                <label class="col-sm-2 control-label">گروه کاربران</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="1" name="customer_group_id">
                                            پیشفرض</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group required ">
                                <label for="username" class="col-sm-2 control-label">نام کاربری </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="نام کاربری"
                                           value="{{old('username')}}" name="username">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="F_name" class="col-sm-2 control-label"> نام کامل (فارسی)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="F_name" placeholder="نام"
                                           value="{{old('F_name')}}" name="F_name">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="E_name" class="col-sm-2 control-label">نام کامل(انگلیسی)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="E_name"
                                           placeholder="نام خانوادگی" value="{{old('E_name')}}" name="E_name">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="email" class="col-sm-2 control-label">آدرس ایمیل</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="آدرس ایمیل"
                                           value="{{old('email')}}" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">شماره تلفن</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="phone" placeholder="شماره تلفن" value="{{old('phone')}}"
                                           name="phone">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="role" class="col-sm-2 control-label">نوع کاربر</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="role" name="role">
                                        <option value="{{old('role')}}"> --- لطفا انتخاب کنید ---</option>
                                        <option value="عادی">عادی</option>
                                        <option value="خواننده">خواننده</option>

                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="address">
                            <div class="form-group ">
                                <label for="city" class="col-sm-2 control-label">شهر</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" placeholder="شهر" value="{{old('city')}}"
                                           name="city">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="state" class="col-sm-2 control-label">شهر / استان</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="state" name="state">
                                        <option value="{{old('state')}}"> --- لطفا انتخاب کنید ---</option>
                                        <option value="تهران">تهران</option>
                                        <option value="اصفهان">اصفهان</option>
                                        <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                        <option value="قم">قم</option>
                                        <option value="فارس">فارس</option>
                                        <option value="مرکزی">مرکزی</option>
                                        <option value="کرمان">کرمان</option>
                                        <option value="یزد">یزد</option>
                                        <option value="خراسان رضوی">خراسان رضوی</option>
                                        <option value="خوزستان">خوزستان</option>
                                        <option value="کردستان">کردستان</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>رمز عبور شما</legend>
                            <div class="form-group required">
                                <label for="password" class="col-sm-2 control-label">رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-password"
                                           placeholder="رمز عبور" value="" name="password">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="confirm"
                                           placeholder="تکرار رمز عبور" value="" name="confirm">
                                </div>
                            </div>
                        </fieldset>

                        <div class="buttons">
                            <div class="pull-right">
                                <input type="checkbox" value="1" name="agree">
                                &nbsp;من <a class="agree" href="#"><b>سیاست حریم خصوصی</b> را خوانده ام و با آن موافق
                                    هستم</a> &nbsp;
                                <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                            </div>
                        </div>
                    </form>
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