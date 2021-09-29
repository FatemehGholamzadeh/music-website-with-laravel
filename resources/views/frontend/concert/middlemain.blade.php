<!--Middle Part Start-->

<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">رزرو کنسرت </h3>
    @if($concerts && count($concerts)>0)
        @foreach($concerts as $concert)
    <div class="sdr">
            <div class="ps anm">
                <div class="pstop ">
                    <h2 class="">
                        <i class="icon-blue"></i>
                        <span> رزرو کنسرت<span> {{$concert->singer_Fname}} </span>   </span>
                    </h2>

                    <span>{{$concert->created_at}}</span> | 2 نظر

                    <a id="p2_like" class="like f14" rel="85424" style="float: left"><i class="icn_like"></i> +44</a>
                </div>
                <div class="pcnt">
                    <div class="center">
                        <p></p>
                        <h2> {{$concert->singer_Fname}}</h2>
                        <p></p>
                        <p>
                            <a href="">رزرو کنسرت جدید</a>
                            <strong><a href="">{{$concert->singer_Fname}}</a></strong>
                        <p><strong><a href="">{{$concert->singer_Ename}}</a></strong>
                        </p>
                        <p>
                            <img src="{{asset("posters/{$concert->image_name}")}}"
                                 data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                 alt="" class="loaded"
                                 data-was-processed="true" width="480" height="480">
                        </p>
                    </div>
                    <div style="font-size: 20px">
                        <label><b>نام خواننده :</b> </label>
                        <label>{{$concert->singer_Fname}}</label>
                        <br>
                        <label><b>تاریخ برگزاری :</b> </label>
                        <label>{{$concert->date}}</label>
                        <br>
                        <label><b>ساعت برگزاری:</b> </label>
                        <label>{{$concert->clock}}</label>
                        <br>
                        <label><b>قیمت بلیط:</b> </label>
                        <label>{{$concert->price}}</label>
                        <br>
                    </div>
                </div>
                <div class="psdown">
                    <span>موضوع : <a href="" rel="category tag">{{$concert->subject}}</a> ، <a
                                href="" rel="category tag">کنسرت </a> | 7,239 بازدید</span>
                    <a href="{{route('frontend.reserve.reserve',$concert->id)}}" class="more">رزرو کنسرت</a>
                </div>
            </div>
    </div>
        @endforeach
    @endif
</div>

