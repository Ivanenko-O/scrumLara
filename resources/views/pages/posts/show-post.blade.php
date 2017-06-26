
@extends('index')

@section('content')

    {{--Page Title --}}
    <section id="page-title">
        <div class="container clearfix">
            <h1> {{ $post-> title }} </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}">Главная</a></li>
                <li><a href="blog">Блог</a></li>
                <li class="active">Статья</li>
            </ol>
        </div>
    </section>
    {{-- #page-title end --}}
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                {{--  Post Content --}}
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">

                        {{--  Single Post --}}
                        <div class="entry clearfix">
                            <h2><?php echo $post->title; ?></h2>

                            {{--  Entry Meta --}}
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i><?php echo $post -> created_at ->format(' j M y') ?></li>
                                <li><a href="../about/andriipavlenko"><i class="icon-user"> <?php echo  $post -> authorId -> name ?></i></a>
                                <li><a href="../about/andriipavlenko"><i class="icon-folder"> <?php echo  $post -> category -> name ?></i></a>
                                </li>
                            </ul>
                            {{--  .entry-meta end --}}

                            <?php echo $post->body; ?>
                            @include('partials.share-buttons')
                        </div>

                    </div>
                    {{--  Post Author Info --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Автор <span> {{ $post -> authorId -> name }}</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <img src="{{ Voyager::image($post-> authorId -> avatar) }}" alt="" class="img-circle">
                            </div>
                            {{ $post-> authorId -> auth_descrip }}
                        </div>
                    </div>
                    {{--  Post Single - Author End --}}

                    <div class="line"></div>

                    {{--  Post Navigation --}}
                    <div class="post-navigation clearfix">
                        <div class="col_half nobottommargin">
                            <a href="{{ URL::to( '/blog/'.$prev ) }}"> &lArr; Предыдущая статья</a>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <a href="{{ URL::to( '/blog/'.$next ) }}">Следующая статья &rArr; </a>
                        </div>
                    </div>
                    {{--  .post-navigation end --}}



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
                                    @include("partials.right-widget-subscribing")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- .sidebar end --}}
        </div>

        </div>

    </section>

@endsection

@push('custom-scripts')
    <script type="text/javascript" src="{{ URL::asset ('js/custom-scripts.js') }}"></script>
@endpush


