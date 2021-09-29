<!--Middle Part Start-->
<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">دانلود آهنگ </h3>
    @if($music)
            <div class="sdr">
                <div class="ps anm">
                    <div class="pstop ">
                        <h2 class="">
                            <i class="icon-blue"></i>
                            <span> دانلود آهنگ<span> {{$music->singer_Fname}} </span>به نام <span> {{$music->F_name}} </span>  </span>
                        </h2>

                        <span>{{$music->created_at}}</span> | 2 نظر

                        <a id="p2_like" class="like f14" rel="85424" style="float: left"><i class="icn_like"></i> +44</a>
                    </div>
                    <div class="pcnt">
                        <div class="center">

                            <p>
                                <img src="{{asset("posters/{$music->image_name}")}}"
                                     data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                     alt="میلاد جهان سلطان قلبم | دانلود آهنگ میلاد جهان به نام سلطان قلبم" class="loaded"
                                     data-was-processed="true" width="480" height="480">
                            </p>
                        </div>
                    </div>
                    <!--    <span>موضوع : <a href="https://nex1music.ir/music/" rel="category tag">موزیک</a> ، <a href="https://nex1music.ir/music/persian-music/" rel="category tag">موزیک ایرانی</a> | 7,239 بازدید</span>
                        <a href="https://nex1music.ir/آهنگ-میلاد-جهان-سلطان-قلبم/" class="more">دانلود آهنگ</a>-->
                    <div class="pscn1">
                        <div class="lnkdl animate">
                            <a href="{{route('frontend.musics.downloadtwo',$music->id)}}" >دانلود آهنگ با کیفیت 128</a>
                        </div>
                        <br>
                        <div class="cdfblg">
                            پخش آنلاین  (قبل از دانلود می توانید آنلاین گوش کنید)
                        </div>
                        <br>

                        <h4>پخش آنلاین آهنگ با کیفیت 128</h4>

                        <audio controls class="oudio">
                            <source src="{{asset("songs/{$music->file_name}")}}" type="audio/mpeg">
                        </audio>
                        <div class="lyrics">
                            <span>
                                {{$music->Lyrics }}
                            </span>
                    </div>
                </div>
            </div>

</div>

    @endif
</div>