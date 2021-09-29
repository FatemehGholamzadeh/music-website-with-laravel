<!--Middle Part Start-->

<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">دانلود موزیک ویدئو </h3>
    @if($musicvideo)
{{--        @foreach($musicvideos as $musicvideo)--}}
            <div class="sdr">
                <div class="ps anm">
                    <div class="pstop ">
                        <h2 class="">
                            <i class="icon-blue"></i>
                            <span> دانلود موزیک ویدئو<span> {{$musicvideo->singer_Fname}} </span>به نام <span> {{$musicvideo->F_name}} </span>  </span>
                        </h2>

                        <span>{{$musicvideo->created_at}}</span> | 2 نظر

                        <a id="p2_like" class="like f14" rel="85424" style="float: left"><i class="icn_like"></i> +44</a>
                    </div>
                    <div class="pcnt">
                        <div class="center">

                            <p>
                                <img src="{{asset("posters/{$musicvideo->image_name}")}}"
                                     data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                     alt="" class="loaded"
                                     data-was-processed="true" width="480" height="480">
                            </p>
                        </div>
                    </div>
                 <!--   <div class="psdown">
                    <span>موضوع : <a href="https://nex1music.ir/music/" rel="category tag">{{$musicvideo->subject}}</a> ، <a
                                href="https://nex1music.ir/music/persian-music/" rel="category tag">موزیک ویدئو {{$musicvideo->type}}</a> | 7,239 بازدید</span>
                        <a href="{{route('frontend.musicvideo.index',$musicvideo->id)}}" class="more">دانلود موزیک ویدئو</a>
                    </div>
-->
                    <div class="pscn1">
                        <div class="lnkdl animate">
                            <a href="{{route('frontend.musicvideos.downloadtwo',[$musicvideo->id])}}">دانلود ویدئو با کیفیت 1080</a>
                            <a href="{{route('frontend.musicvideos.downloadtwo',[$musicvideo->id])}}">دانلود ویدئو با کیفیت 720</a>
                            <a href="{{route('frontend.musicvideos.downloadtwo',[$musicvideo->id])}}">دانلود ویدئو با کیفیت 480</a>
                        </div>
                        <br>
                        <div class="cdfblg">
                            پخش آنلاین موزیک ویدئو با کیفیت 720 (قبل از دانلود می توانید آنلاین ببینید)
                        </div>
                        <br>

                        <video width="600" controls>
                            <source src="{{route('frontend.musicvideos.downloadthree',[$musicvideo->id])}}">  </video>


                    </div>
                </div>
            </div>
{{--        @endforeach--}}
    @endif
</div>

