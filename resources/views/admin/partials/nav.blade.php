<nav id="menu" class="navbar">
    <div class="container">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a class="home_link" title="خانه" href="{{route('home')}}"><span>خانه</span></a></li>
                <li class="dropdown"><a href="{{route('frontend.musics.index')}}">دانلود آهنگ</a>

                </li>
                <li class="menu_brands dropdown"><a href="{{route('frontend.musicvideo.index')}}">دانلود موزیک ویدئو</a>
                </li> <li class="menu_brands dropdown"><a href="{{route('frontend.album.index')}}">دانلود آلبوم</a>
                </li>
                <li class="menu_brands dropdown"><a href="{{route('frontend.concert.index')}}">کنسرت ها</a>
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
                <li class="contact-link"><a href="{{route('frontend.contact_us.index')}}">ارتباط با ما</a></li>
                <li class="contact-link"><a href="{{route('frontend.about_us.index')}}">درباره ما</a></li>

            <!--   <li class="dropdown messages-menu" style="float: left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">۴ پیام خوانده نشده</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            علیرضا
                                            <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                                        </h4>
                                        <p>متن پیام</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
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
                                            <img src="{{asset('dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
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
                                            <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
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
                                            <img src="{{asset('dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
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
                </li>-->
            </ul>
        </div>
    </div>
</nav>