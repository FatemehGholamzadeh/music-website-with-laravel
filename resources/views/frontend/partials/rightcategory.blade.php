<!--right Part Start -->
    <aside id="column-left" class="col-lg-3 col-md-3 col-sm-12 hidden-xs">
        <h3 class="subtitle">دسته بندی ها</h3>
        <div class="box-category">
            <ul id="cat_accordion">
                    <ul>

                        <li><a>آهنگ ها</a> <span class="down"></span>
                            <ul>
                                @foreach($cat as $item)
                                <li><a href="{{route('frontend.musics.happy',$id=$item->id)}}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a>موزیک ویدئو</a>
                            <span class="down"></span>
                            <ul>
                                @foreach($cat as $item)
                                    <li><a href="{{route('frontend.musicvideos.happy',$id=$item->id)}}">{{$item->name}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li><a> آلبوم </a> <span class="down"></span>
                            <ul>
                                @foreach($cat as $item)
                                    <li><a href="{{route('frontend.musicvideos.happy',$id=$item->id)}}">{{$item->name}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                    </ul>
            </ul>
        </div>
    </aside>
    <!--right Part End -->

