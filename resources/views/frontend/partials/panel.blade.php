<aside id="column-left" class="col-lg-3 col-md-3 col-sm-12 hidden-xs" style="background-color: rgba(43,84,44,0.2); height: 600px; width: 250px">
    <h3 class="subtitle">پنل مدیریتی</h3>
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-right image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
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
                <a href="{{route('admin.files.create')}}">آپلود آهنگ </a>
            </li>
            <li>
                <a href="{{route('admin.musicvideo.create')}}">آپلود موزیک ویدئو </a>
            </li>
            <li>
                <a href="category.html">آپلود آلبوم </a>
            </li>
            <li>
                <a href="{{route('admin.concert.create')}}">آپلود کنسرت  </a>
            </li>
            <li>
                <a href="category.html">تایید نظرات  </a>
            </li>
            <li>
                <a href="{{route('admin.user.list')}}">لیست کاربران </a>
            </li>
            <li>
                <a href="{{route('admin.files.list')}}">لیست آهنگ ها </a>
            </li>
            <li>
                <a href="{{route('admin.musicvideo.list')}}">لیست موزیک ویدئو ها </a>
            </li><li>
                <a href="{{route('admin.concert.list')}}"> لیست کنسرت ها </a>
            </li>
            <li>
                <a href="{{route('admin.files.list')}}">لیست آلبوم ها </a>
            </li>
            <li>
                <a href="{{route('admin.payments.list')}}">پرداخت ها </a>
            </li>
        </ul>
    </div>
</aside>