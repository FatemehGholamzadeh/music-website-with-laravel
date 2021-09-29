@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="about-us.html">درباره ما</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">

            @include('frontend.partials.errors')
            @include('frontend.users.notification')
            <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">درباره ما</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="image/AU.png" style="width: 300px;height:300px;float:right"/>

                            <p>وب سایت تاپ موزیک از تاریخ 22 تیر 1398 به طور رسمی کار خود را آغاز کرد.این وب سایت شامل
                                بخش های متعددی از جمله دانلود موزیک ، دانلود آلبوم ، کنسرت ها ، گالری و ... می باشد.
                                در بخش کنسرت ها کاربران می توانند کنسرت هایی را که خوانندگان مختلف در صفحه خود آن ها را
                                قرار داده اند مشاهده کرده و در صورت تمایل برای آن کنسرت بلیط رزرو کنند.
                            </p>
                            <blockquote>
                                <p>
                                    در بخش گالری آهنگ های مختلف به صورت دسته بندی شده براساس موضوع قرار داده شده اند.بخش
                                    دانلود آلبوم شامل بانك كامل اطلاعاتی آلبوم های داخلی می باشد هم چنین کاربران با
                                    مراجعه به بخش دانلود آهنگ می توانند آهنگ مورد نظر خود را دانلود نمایند.در بخش بالای
                                    سایت یک منوی جستجو برای کاربران در نظر گرفته شده است که می توانند آهنگ موردنظر را در
                                    بانک های کامل آهنگ های ما جست و جو کنند.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    @if($about_us && count($about_us)>0)
                        @foreach($about_us as $about_us )
                            <section class="post-author clearfix">
                                <div class="date">
                                    <ul class="author-social-icons">
                                        {{$about_us->created_at}}
                                    </ul>
                                </div>
                                <span class="post-author-avatar" itemprop="image"><img src="/image/profile.png" alt=""
                                                                                       class="avatar avatar-80 photo avatar-default b-loaded"
                                                                                       width="80" height="80"></span>

                                <div class="author-links">
                                    <ul class="author-social-icons">
                                        {{$about_us->full_name}}

                                    </ul>
                                </div>
                                <div class="post-author-bio" itemprop="description">
                                    <p>{{$about_us->text}}</p>
                                </div>
                                <span style="float: left">
                                   <a> 12+ <i class="glyphicon glyphicon-thumbs-up"></i></a>

                                </span>

                            </section>
                        @endforeach
                    @endif
                    <br>
                    <br>
                    <div id="content2" class="col-md-12 col-sm-12">
                        <h1 class="title">نظر سنجی</h1>
                        <h4>جهت ارتقاء سطح کیفی و تعامل بیشتر سایت تاپ میوزیک، لطفا از طریق راه های ارتباطی، ما را از
                            نظرات، پیشنهادات و انتقادات خود مطلع فرمایید.</h4>
                        <form class="form-horizontal" method="post">
                            {{csrf_field()}}

                            <h3 class="subtitle">لطفا نظرات خود را ثبت نمایید …</h3>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-name">نام شما</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" name="full_name" value="{{old('full_name')}}" id="input-name"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-email">آدرس ایمیل</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" name="email" value="{{old('email')}}" id="input-email"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 control-label" for="input-phone">شماره همراه</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" name="phone" value="{{old('phone')}}" id="input-phone"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">متن نظر</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea name="text" value="{{old('text')}}" rows="10" id="input-text"
                                              class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="pull-left">
                                    <input class="btn btn-primary" type="submit" value="ارسال"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection