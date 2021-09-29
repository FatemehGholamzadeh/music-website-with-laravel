@extends('layouts.frontend')
@section('content')
    <!--Middle Part Start-->

    <div id="content" class="col-lg-7 col-md-7 col-sm-12">
        <h3 class="subtitle">رسید خرید </h3>
                <div class="sdr">
                    <div class="ps anm">
                        <div class="pstop ">
                            <h2 class="">رسید خرید بلیط کنسرت شما
                            </h2>
                        </div>
                        <div class="pcnt">
                            <table class="profileTable" align="center">
                                <thead style="border-bottom: 1px solid rgb(31, 31, 31);">
                               @include('frontend.payment.factor',$ticket)
                                </thead>
                            </table>
                        </div>
                        <div class="psdown">

                            <a href="{{route('frontend.users.index')}}" class="more">تایید</a>

                        </div>

                    </div>
                </div>

    </div>


@endsection