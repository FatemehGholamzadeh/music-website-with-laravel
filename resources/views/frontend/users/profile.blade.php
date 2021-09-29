@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container-fluid" style="width: 90%">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="category.html">پروفایل </a></li>
            </ul>
            <!--Left Part Start -->
            <!--Left Part End -->
            <!--Middle Part Start-->
            <div id="content" >
                <div class="sdr2">
                    <h1>پروفایل شما </h1>
                    <div class="ps2 anm">
                        <div class="pcnt">
                            <div class="center">
                                <div class="row">
                                    <div class="col-md-7">
                                        @include('frontend.users.profileTable',$user)

                                    </div>
                                <!--    <img src="image/profile.jpg" class="col-md-5 center profileImage"> -->
                                    <br>
                                    <br>
                                </div>
                                <!--this is table of information-->
                                <!--end of table of information-->

                                <!--Tickets-->

                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p class="profileEXE">بلیط های رزرو شده :  </p>
                                    <br>
                                    <br>
                                    <br>

                                </div>


                                @if($tickets )
                                    <table class="table table-bordered">
                                        @include('frontend.users.columns')
                                        @foreach($tickets as $ticket )
                                            @include('frontend.users.item',$ticket)
                                        @endforeach
                                    </table>

                                @endif



                                <br>
                                <br>
                                <br>
                                <br>
                                <a href="concert_upload.html">
                                    <button  align="left" class="ptofileButton" onClick="">ثبت کنسرت </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="psdown">
        </div>
    </div>
    @endsection