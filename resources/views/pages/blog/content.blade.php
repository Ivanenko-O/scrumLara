{{-- Page Title --}}
<section id="page-title">
    <div class="container clearfix">
        <h1>Блог</h1>
        <span>Наши последние статьи и новости из жизни Scrummasters</span>
        <ol class="breadcrumb">
            <li><a href="{{url('')}}">Главная</a></li>
            <li class="active">Блог</li>
        </ol>
        {{--<form action="/search" class="search_form" method="get" autocomplete="off">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="form-field">--}}
                {{--<input type="text" name="s" class="search_keyword" id="search_keyword_id"--}}
                       {{--placeholder="Поиск " required/>--}}
                {{--<button type="submit" class="search_button" onclick="submitdata()">Поиск</button>--}}
                {{--<div id="result">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
    </div>


</section>
{{-- #page-title end --}}

{{-- Content --}}
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Post Content -->
            <div class="postcontent nobottommargin clearfix">
                <div id="posts" class="post-timeline clearfix">
                    <div class="timeline-border"></div>


                    @foreach ($posts as $post)
                        <div class="entry clearfix">
                            <div class="entry-timeline">
                                {{ $post -> created_at -> format('j') }}
                                <span>{{ $post -> created_at -> format('M y') }}</span>
                                <div class="timeline-divider"></div>
                            </div>
                            <div class="entry-image">

                                @if(!empty($post->image))
                                    <a href="{{ url('/blog/'. $post -> slug) }}"> <img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}" width="800" height="600" /> </a>

                                @endif

                            </div>
                            <div class="entry-title">
                                <h2> <a href="{{ url('/blog/'.$post -> slug) }}"> {{ $post->title  }} </a></h2>
                                {{--                                <a href="{{ route('pages.posts.show-post', $post->slug) }}" class="btn btn-primary"><h2> {{ $post -> title }}</h2></a>--}}
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><a href="/about/andriipavlenko"><i class="icon-user"></i>{{ $post -> authorId -> name }}</a> </li>
                                <li><i class="icon-folder-open"></i>{{ $post -> category -> name }}</li>
                            </ul>
                            <div class="entry-content">
                            {{ $post -> excerpt }}
                            </div>
                        </div>
                     @endforeach

                    {{ $posts->links() }}

                </div>
            </div>

            {{-- Sidebar --}}
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">

                    <div class="widget clearfix">

                        <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                            <ul class="tab-nav clearfix">
                                <li><a href="#tabs-1">Статьи</a></li>
                                <li><a href="#tabs-2">Наша жизнь</a></li>
                            </ul>

                            <div class="tab-container">
                                @include("partials.right-widget-blog")
                                @include("partials.right-widget-event")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- .sidebar end --}}

        </div>
    </div>
</section>
{{-- #content end --}}