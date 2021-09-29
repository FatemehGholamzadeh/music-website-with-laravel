
@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="contact-us.html">ارتباط با ما</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">

            @include('frontend.partials.errors')
            @include('frontend.users.notification')
            <!--Middle Part Start-->
                @if( $contact_us && count( $contact_us)>0)
                    @foreach( $contact_us as  $contact_us )
                        <section class="post-author clearfix">
                            <div class="date">
                                <ul class="author-social-icons">
                                    {{ $contact_us->created_at}}
                                </ul>
                            </div>
                            <span class="post-author-avatar" itemprop="image"><img src="/image/profile.png" alt=""
                                                                                   class="avatar avatar-80 photo avatar-default b-loaded"
                                                                                   width="80" height="80"></span>

                            <div class="author-links">
                                <ul class="author-social-icons">
                                    {{ $contact_us->full_name}}

                                </ul>
                            </div>
                            <div class="post-author-bio" itemprop="description">
                                <p>{{ $contact_us->text}}</p>
                            </div>
                            <span style="float: left">
                                   <a> 12+ <i class="glyphicon glyphicon-thumbs-up"></i></a>
                                </span>
                        </section>
                    @endforeach
                @endif
                <br>
                <br>
                <div id="content" class="col-sm-12">

<div class="row">
    <div id="content2" class="col-md-9 col-sm-9">
        <h1 class="title">ارتباط با ما</h1>
        <h4>جهت ارتقاء سطح کیفی و تعامل بیشتر سایت تاپ میوزیک، لطفا از طریق راه های ارتباطی، ما را از نظرات، پیشنهادات و انتقادات خود مطلع فرمایید.</h4>
        <form class="form-horizontal" method="post">
            {{csrf_field()}}

            <h3 class="subtitle">لطفا با ما در ارتباط باشید…</h3>
            <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-name">نام شما</label>
                <div class="col-md-10 col-sm-9">
                    <input type="text" name="full_name"  value="{{old('full_name')}}" id="input-name" class="form-control" />
                </div>
            </div>
            <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-email">آدرس ایمیل</label>
                <div class="col-md-10 col-sm-9">
                    <input type="text" name="email"  value="{{old('email')}}" id="input-email" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 col-sm-3 control-label" for="input-phone">شماره همراه</label>
                <div class="col-md-10 col-sm-9">
                    <input type="text" name="phone" value="{{old('phone')}}" id="input-phone" class="form-control" />
                </div>
            </div>
            <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">متن نظر</label>
                <div class="col-md-10 col-sm-9">
                    <textarea name="text" value="{{old('text')}}" rows="10" id="input-text" class="form-control"></textarea>
                </div>
            </div>

            <div class="buttons">
                <div class="pull-left">
                    <input class="btn btn-primary" type="submit" value="ارسال" />
                </div>
            </div>
        </form>
    </div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
        <div class="list-group">
            <h2 class="subtitle">تعامل با سایت </h2>
            <p>
                ما آماده دریافت هرگونه نظر و ایده های شما در هرچه بهتر ارائه دادن خدمات به شما کاربران عزیز و گرامی خود هستیم،   </p>
            <p>تاپ موزیک مجموعه ای مستقل با اهداف بلند مدت است، اما در عین حال نقطه نظرات کاربران همیشگی خود را با ارزش میداند</p>
            <p>  ما با شما یک مجموعه هستیم :)</p>
        </div>
        <div class="banner owl-carousel">
            <div class="item"> <a href="#"><img src="image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
        </div>
    </aside>
</div>

                </div>
                <!--Middle Part End -->

            </div>
        </div>
    </div>
@endsection