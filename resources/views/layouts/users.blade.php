<!DOCTYPE html>
<html dir="rtl">
@include('frontend.partials.head')
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <!-- Top Bar End-->
        <!-- Header Start-->
        @include('frontend.partials.header')
        <!-- Header End-->
        <!-- Main آقایانu Start-->
       @include('frontend.partials.nav')
        <!-- Main آقایانu End-->
    </div>

    @yield('content')
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