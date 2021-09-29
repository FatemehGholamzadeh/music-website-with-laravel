@extends('layouts.admin')
@section('content')
    <div class="wrapper-wide">
        <div id="header">
            <!-- Top Bar Start-->
            <!-- Top Bar End-->
            <!-- Header Start-->
            <header class="header-row">
                <div class="container">
                    <div class="table-container">
                        <!-- Logo Start -->
                        <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                            <div id="logo"><a href="index.html"><img class="myImage" src="image/hi.png"  title="Top Music" alt="MarketShop" /><span style="font-size: 27px ;   text-shadow: 2px 2px 5px rgb(87, 94, 92);"> وب سایت تاپ موزیک </span></a>

                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- جستجو Start-->
                        <div class="col-table-cell col-lg-5 col-md-3 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                            <div id="search" class="input-group">
                                <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                                <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- جستجو End-->
                        <!-- Mini Cart Start-->
                        <!--col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner-->
                        <div class="col-md-1 col-table-cell col-lg-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                            <a href="register.html"> <button class="btn btn-primary btn-sm" onClick=""  style="float: left; border: 5px solid dimgrey" > ثبت نام  </button></a>
                            <a href="login.html"> <button class="btn btn-primary btn-sm" onClick="" style="float: left;border: 5px solid dimgrey"> ورود  </button></a>
                        </div>

                        <!-- Mini Cart End-->
                    </div>
                </div>
            </header>
            <!-- Header End-->
            <!-- Main آقایانu Start-->
            <nav id="menu" class="navbar">
                <div class="container">
                    <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="home_link" title="خانه" href="index.html"><span>خانه</span></a></li>
                            <li class="dropdown"><a href="download_music1.html">دانلود آهنگ</a>

                            </li>
                            <li class="menu_brands dropdown"><a href="download_musicvideo1.html">دانلود موزیک ویدئو</a>
                            </li> <li class="menu_brands dropdown"><a href="download_album.html">دانلود آلبوم</a>
                            </li>
                            <li class="menu_brands dropdown"><a href="download_concert1.html">کنسرت ها</a>
                            </li>
                            <li class="dropdown information-link"><a>گالری</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="login.html">شاد</a></li>
                                        <li><a href="register.html">غمگین</a></li>
                                        <li><a href="category.html">پاپ</a></li>
                                        <li><a href="product.html">سنتی</a></li>
                                    </ul>

                                </div>
                            </li>
                            <li class="contact-link"><a href="contact-us.html">ارتباط با ما</a></li>
                            <li class="contact-link"><a href="about-us.html">درباره ما</a></li>

                            <li class="dropdown messages-menu" style="float: left">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">۴ پیام خوانده نشده</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        علیرضا
                                                        <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                                                    </h4>
                                                    <p>متن پیام</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        نگین
                                                        <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                                                    </h4>
                                                    <p>متن پیام</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        نسترن
                                                        <small><i class="fa fa-clock-o"></i> امروز</small>
                                                    </h4>
                                                    <p>متن پیام</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        نگین
                                                        <small><i class="fa fa-clock-o"></i> دیروز</small>
                                                    </h4>
                                                    <p>متن پیام</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        نسترن
                                                        <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                                                    </h4>
                                                    <p>متن پیام</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
                                </ul>
                            </li>


                            <li class="dropdown notifications-menu" style="float: left">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">۱۰</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">۱۰ اعلان جدید</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> ۲۵ رزرو بلیط جدید
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">نمایش همه</a></li>
                                </ul>
                            </li>
                            <!--   <li class="custom-link-right"><a href="#" target="_blank">پیشنهاد های ویژه</a></li>-->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Main آقایانu End-->
        </div>
        <div id="container">
            <div class="container-fluid" style="width: 98%;">
                <!--end of pictures-->
                <!--Left Part Start -->
                <div class="row">
                    <aside id="column-left" class="col-lg-3 col-md-3 col-sm-12 hidden-xs" style="background-color: rgba(43,84,44,0.2); height: 500px; width: 250px">
                        <h3 class="subtitle">پنل مدیریتی</h3>
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel">
                            <div class="pull-right image">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <div class="pull-right info">
                                <p>علیرضا حسینی زاده</p>
                                <!-- Status -->
                                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
                            </div>
                        </div>

                        <!-- search form (Optional) -->
                        <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="جستجو">
                                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <br>
                        <div class="box-category">
                            <ul id="cat_accordion">
                                <li>
                                    <a href="category.html" class="active">داشبورد</a>
                                </li>
                                <li>
                                    <a href="category.html">آپلود آهنگ </a>
                                </li>
                                <li>
                                    <a href="category.html">آپلود موزیک ویدئو </a>
                                </li>
                                <li>
                                    <a href="category.html">آپلود آلبوم </a>
                                </li>
                                <li>
                                    <a href="category.html">آپلود کنسرت  </a>
                                </li>
                                <li>
                                    <a href="category.html">تایید نظرات  </a>
                                </li>
                                <li>
                                    <a href="category.html">مشاهده کاربران </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <section class="content">
                        <h1>لیست کاربران</h1>


                    </section>
                </div>
            </div>
        </div>
        <!--Footer Start-->
        <footer id="footer">
            <div class="fpart-first">
                <div class="container">
                    <div class="row">
                        <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">

                            <h2 class="logo "> <img class="logo_image animate" src="image/images.jpeg"  >  </h2>

                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5> آرشیو برخی هنرمندان </h5>
                            <ul>
                                <li><a href="#">میثم ابراهیمی</a></li>
                                <li><a href="#">میثم ابراهیمی</a></li>
                                <li><a href="#">امیرعباس گلاب</a></li>
                                <li><a href="#">محمد علیزاده</a></li>
                                <li><a href="#">محسن یگانه</a></li>
                                <li><a href="#">سینا سرلک</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>برترین آهنگ ها</h5>
                            <ul>
                                <li><a href="#">شهاب مظفری </a></li>
                                <li><a href="#">محمدرضا گلزار</a></li>
                                <li><a href="#">احسان خواجه امیری</a></li>
                                <li><a href="#">پویا بیاتی</a></li>
                                <li><a href="#">محسن چاوشی</a></li>
                                <li><a href="#">پازل بند</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>جدید ترین آهنگ ها</h5>
                            <ul>
                                <li><a href="#">مهدی یراحی </a></li>
                                <li><a href="#">فرزاد فرزین</a></li>
                                <li><a href="#">هوروش بند</a></li>
                                <li><a href="#">محسن ابراهیم زاده</a></li>
                                <li><a href="#">بابک جهانبخش</a></li>
                                <li><a href="#">بهنام بانی</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <h5>اطلاعات تماس</h5>
                            <ul>
                                <li class="address"><i class="fa fa-map-marker"></i>میدان تایمز، شماره 77، نیویورک</li>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><i class="fa fa-envelope"></i>برقراری ارتباط از طریق <a href="contact-us.html">تماس با ما</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fpart-second">
                <div class="container">
                    <div id="powered" class="clearfix">
                        <div class="powered_text pull-left flip">
                            <p>Copyright 2008-2017 © www.TopMusic.com<a href="https://mrcode.ir" target="_blank"></a></p>
                        </div>
                        <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
                    </div>
                    <div class="bottom-row">
                        <div class="custom-text text-center">
                            <img alt="" src="image/logo3.png">
                            <p> کلیه حقوق و امتیازات این سایت متعلق به گروه موسیقی ما است | استفاده از مطالب سایت موسیقی ما تنها با ذکر منبع و تنها برای رسانه‌های داخل کشور که دارای مجوز رسمی از وزارت فرهنگ و ارشاد اسلامی هستند مجاز است</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
        </footer>
        <!--Footer End-->
    </div>
@endsection