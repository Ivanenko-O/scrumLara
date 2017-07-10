<!-- Sidebar -->

<div class="tab-content clearfix" id="tabs-1">
    <div id="popular-post-list-sidebar">

        @foreach($g_posts_cat_2 as $g_post_cat_2)
            <div class="spost clearfix">
                <div class="entry-image">
                    <a href="{{ url('/blog/'.$g_post_cat_2 -> slug)}}"> <img src="{{ Voyager::image($g_post_cat_2->image) }}" alt="{{ $g_post_cat_2->title }}"></a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h4><a href="{{url('/blog/'.$g_post_cat_2->slug)}}">{{ $g_post_cat_2->title }}</a></h4>
                    </div>
                </div>
                <ul class="entry-meta ">
                    <li><i class="icon-calendar"> {{ $g_post_cat_2->created_at->format('j M y') }}</i></li>
                </ul>
            </div>
        @endforeach
    </div>
</div>


<div class="tab-content clearfix" id="tabs-2">
    <div id="recent-post-list-sidebar">

        @foreach($g_posts_cat_1 as $g_post_cat_1)
            <div class="spost clearfix">
                <div class="entry-image">
                    <a href="{{ url('/blog/'.$g_post_cat_1 -> slug)}}"> <img src="{{ Voyager::image($g_post_cat_1->image) }}" alt="{{ $g_post_cat_1->title }}"></a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h4><a href="{{'/blog/'.url($g_post_cat_1->slug)}}">{{ $g_post_cat_1->title }}</a></h4>
                    </div>
                </div>
                <ul class="entry-meta ">
                    <li><i class="icon-calendar"> {{ $g_post_cat_1->created_at->format('j M y') }}</i></li>
                </ul>
            </div>
        @endforeach


    </div>
</div>


<!-- .sidebar end -->
