@extends('layouts.frontend')
@section('content')
    <!--Middle Part Start-->

    <div id="content" class="col-lg-7 col-md-7 col-sm-12">
        <h3 class="subtitle">رزرو بلیط کنسرت </h3>
        <div class="sdr">
            <div class="ps anm">
                <div class="pstop ">
                    <h2 class="">  اطلاعات بلیط :
                    </h2>
                </div>
                <div class="pcnt">
                    <table class="profileTable" align="center">
                        <thead style="border-bottom: 1px solid rgb(31, 31, 31);">
                        @include('frontend.reserve.info',$ticket)
                        </thead>
                    </table>
                    <h5 style="float: right">  لطفا شماره صندلی خود را انتخاب نمایید :
                    </h5>
                </div>
                <form action="{{route('frontend.reserve.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group col-md-3"  >
                    <br/>
                    <select id="inputState" name="seat_num" class="form-control" >

                        @foreach($numbers as $number)
                            <option value="{{$number}}">{{$number}}</option>
                            @endforeach

                    </select>
                        <input type="hidden" value="{{$ticket->id}}" name="ticket">

                </div>
                <div class="psdown">

{{--                    <a href="{{route('frontend.users.payment',$ticket)}}" class="more">تایید</a>--}}
                    <input type="submit" value="رزرو" class="more">

                </div>
                </form>


            </div>
        </div>

    </div>


@endsection