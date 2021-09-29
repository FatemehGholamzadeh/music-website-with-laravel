<!DOCTYPE html>
<html dir="rtl">
@include('admin.partials.head')
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Header Start-->
       @include('admin.partials.header')
        <!-- Header End-->
        <!-- nav start-->
        @include('admin.partials.nav')
        <!-- nav end-->
    </div>
    <div id="container">
        <div class="container-fluid" style="width: 98%;">
            <div class="row">
                @include('admin.partials.panel')
                @yield('content')
            </div>
        </div>
    </div>
    <!--Footer Start-->
   @include('admin.partials.footer')
    <!--Footer End-->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('js/custom-admin.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\select2\dist\js\select2.full.min.js')}}"></script>


<!-- JS Part End-->
</body>
</html>