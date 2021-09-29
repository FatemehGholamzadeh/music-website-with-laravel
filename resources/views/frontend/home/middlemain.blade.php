<!--Middle Part Start-->

<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">دانلود آهنگ </h3>
    @if($musics && count($musics)>0)
        @foreach($musics as $music)
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
                        <p></p>
                        <h2>{{$music->F_name}} {{$music->singer_Fname}}</h2>
                        <p></p>
                        <p>
                            <a href="https://nex1music.ir/tag/دانلود-آهنگ-جدید/">دانلود آهنگ جدید</a>
                            <strong><a href="https://nex1music.ir/tag/میلاد-جهان/">{{$music->singer_Fname}}</a></strong> به نام
                            <strong><a href="https://nex1music.ir/tag/سلطان-قلبم/">{{$music->F_name}}</a></strong></p>
                        <p><strong><a href="https://nex1music.ir/tag/milad-jahan/">{{$music->singer_Ename}}</a></strong> - <strong><a
                                        href="https://nex1music.ir/tag/soltane-ghalbam/">{{$music->E_name}}</a></strong>
                        </p>
                        <p>
                            <img src="{{asset($music->image_name)}}"
                                 data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                 alt="میلاد جهان سلطان قلبم | دانلود آهنگ میلاد جهان به نام سلطان قلبم" class="loaded"
                                 data-was-processed="true" width="480" height="480">
                        </p>
                    </div>
                </div>
                <div class="psdown">
                    <span>موضوع : <a href="https://nex1music.ir/music/" rel="category tag">{{$music->subject}}</a> ، <a
                                href="https://nex1music.ir/music/persian-music/" rel="category tag">موزیک {{$music->type}}</a> | 7,239 بازدید</span>
                    <a href="{{route('frontend.musics.details',$music->id)}}" class="more">دانلود آهنگ</a>
                </div>
            </div>
    </div>
        @endforeach
    @endif
</div>

