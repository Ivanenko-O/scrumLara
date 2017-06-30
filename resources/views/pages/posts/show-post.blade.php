<?php  include(app_path().'/date_of_traning/date_of_traning.php');?>
@extends('index')

@section('content')

    {{--Page Title --}}
    <section id="page-title">
        <div class="container clearfix">
            <h1> {{ $post-> title }} </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}">Главная</a></li>
                <li><a href="../blog">Блог</a></li>
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
                                    <div class="widget clearfix">

                                        <h4>Тренинги</h4>
                                        <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="7000">

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../master-of-scrum">
                                                            <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <!--                            <h3><a href="../master-of-scrum">Master Scrum</a></h3>-->
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i><?php echo $date1_master." ".$month1_master?> </a></li>
                                                            <li><i class="icon-map-marker2"></i> <?php echo $city1_master ?></a></li>
                                                        </ul>
                                                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../scrum0">
                                                            <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i> <?php echo $date1_scrum0." ".$month1_scrum0 ?></li>
                                                            <li><i class="icon-map-marker2"></i> <?php echo $city1_scrum0 ?></li>
                                                        </ul>
                                                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../master-of-scrum">
                                                            <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i> <?php echo $date2_master." ".$month2_master?></a></li>
                                                            <li><i class="icon-map-marker2"></i>  <?php echo $city2_master ?></a></li>
                                                        </ul>
                                                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../scrum0">
                                                            <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><a href="#"><i class="icon-time"></i> <?php echo $date2_scrum0." ".$month2_scrum0 ?></a></li>
                                                            <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city2_scrum0 ?></a></li>
                                                        </ul>
                                                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../master-of-scrum">
                                                            <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i> <?php echo $date3_master." ".$month3_master?></a></li>
                                                            <li><i class="icon-map-marker2"></i>  <?php echo $city3_master ?></a></li>
                                                        </ul>
                                                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../scrum0">
                                                            <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><a href="#"><i class="icon-time"></i> <?php echo $date3_scrum0." ".$month3_scrum0 ?></a></li>
                                                            <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city3_scrum0 ?></a></li>
                                                        </ul>
                                                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
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



