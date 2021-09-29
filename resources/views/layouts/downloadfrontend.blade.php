<!DOCTYPE html>
<html dir="rtl">
@include('frontend.partials.head')
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Header Start-->
    @include('frontend.partials.header')
    <!-- Header End-->
        <!-- nav start-->
    @include('frontend.partials.nav')
    <!-- nav end-->

    </div>
    <div id="container">
        <div class="container-fluid" style="width: 98%;">
            <div class="row">
                <!--rightcategory start-->
            @include('frontend.partials.rightcategory')
            <!--rightcategory end-->
            @yield('content')
            <!--leftcategory start-->
            @include('frontend.partials.leftcategory')
            <!--leftcategory end-->

            </div>


        </div>
    </div>
    <!--Footer Start-->
@include('frontend.partials.footer')
<!--Footer End-->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>