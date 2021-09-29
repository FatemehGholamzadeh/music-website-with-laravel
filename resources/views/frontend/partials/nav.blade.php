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
                <li class="contact-link"><a href="{{route('home')}}">ارتباط با ما</a></li>
                <li class="contact-link"><a href="{{route('home')}}">درباره ما</a></li>


            </ul>
        </div>
    </div>
</nav>