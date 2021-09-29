<!--Middle Part Start-->

<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">دانلود آلبوم </h3>
    @if($albums && count($albums)>0)
        @foreach($albums as $album)
    <div class="sdr">
            <div class="ps anm">
                <div class="pstop ">
                    <h2 class="">
                        <i class="icon-blue"></i>
                        <span> دانلود آلبوم<span> {{$album->singer_Fname}} </span>به نام <span> {{$album->F_name}} </span>  </span>
                    </h2>

                    <span>{{$album->created_at}}</span> | 2 نظر

                    <a id="p2_like" class="like f14" rel="85424" style="float: left"><i class="icn_like"></i> +44</a>
                </div>
                <div class="pcnt">
                    <div class="center">
                        <p></p>
                        <h2>{{$album->F_name}} {{$album->singer_Fname}}</h2>
                        <p></p>
                        <p>
                            <a href="https://nex1music.ir/tag/دانلود-آهنگ-جدید/">دانلود آلبوم جدید</a>
                            <strong><a href="https://nex1music.ir/tag/میلاد-جهان/">{{$album->singer_Fname}}</a></strong> به نام
                            <strong><a href="https://nex1music.ir/tag/سلطان-قلبم/">{{$album->F_name}}</a></strong></p>
                        <p><strong><a href="https://nex1music.ir/tag/milad-jahan/">{{$album->singer_Ename}}</a></strong> - <strong><a
                                        href="https://nex1music.ir/tag/soltane-ghalbam/">{{$album->E_name}}</a></strong>
                        </p>
                        <p>
                            <img src="{{$album->image_name}}"
                                 data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                 alt="میلاد جهان سلطان قلبم | دانلود آهنگ میلاد جهان به نام سلطان قلبم" class="loaded"
                                 data-was-processed="true" width="480" height="480">
                        </p>
                    </div>
                </div>
                <div class="psdown">
                    <span>موضوع : <a href="https://nex1music.ir/music/" rel="category tag">{{$album->subject}}</a> ، <a
                                href="https://nex1music.ir/music/persian-music/" rel="category tag">آلبوم {{$album->type}}</a> | 7,239 بازدید</span>
                    <a href="{{route('frontend.album.index',$album->id)}}" class="more">دانلود آلبوم</a>
                </div>
            </div>
    </div>
        @endforeach
    @endif
</div>

