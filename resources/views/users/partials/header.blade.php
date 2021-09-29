<header class="header-row">
    <div class="container">
        <div class="table-container">
            <!-- Logo Start -->
            <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                <div id="logo"><a href="index.html"><img class="myImage" src="{{asset('image/hi.png')}}"
                                                         title="Top Music" alt="MarketShop"/><span
                                style="font-size: 27px ;   text-shadow: 2px 2px 5px rgb(87, 94, 92);"> وب سایت تاپ موزیک </span></a>

                </div>
            </div>
            <!-- Logo End -->
            <!-- جستجو Start-->
            <div class="col-table-cell col-lg-5 col-md-3 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                <div id="search" class="input-group">
                    <form action="{{route('frontend.musics.search')}}" method="POST">
                        {{csrf_field()}}
                        <input id="filter_name" type="text" name="search" value="" placeholder="جستجو"
                               class="form-control input-lg"/>
                        <button type="submit" class="button-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <!-- جستجو End-->
            <!-- Mini Cart Start-->
            <!--col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner-->
            <div class="col-md-1 col-table-cell col-lg-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('frontend.users.register')}}">
                        <button class="btn btn-success btn-sm" onClick=""
                                style="border-radius: 5px;padding: 5px;margin: 5px;float: left;"> ثبت نام
                        </button>
                    </a>
                    <a href="{{route('frontend.users.login')}}">
                        <button class="btn btn-success btn-sm" onClick=""
                                style="border-radius: 5px;padding: 5px;margin: 5px;float: left;"> ورود
                        </button>
                    </a>
                @else
                    <div style="float: left" class="col-md-11">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                               style="color:darkgreen;font-size: 20px">
                                <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::User()->F_name}}</span>
                                <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::User()->E_name.'  خوش آمدید'}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="/image/images5.jpg" class="img-circle" alt="User Image">
                                    <br>
                                    <br>
                                    <p style="text-align: center">
                                        <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::User()->F_name}}</span>
                                        <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::User()->E_name}}</span>
                                    </p>
                                </li>


                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="{{route('frontend.users.index')}}" class="btn btn-success btn-flat">پروفایل</a>
                                    </div>
                                    <div class="pull-left">
                                        <a href="{{route('frontend.users.logout')}}" class="btn btn-success btn-flat">خروج</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </div>
                @endif
            </div>

            <!-- Mini Cart End-->
        </div>
    </div>
</header>