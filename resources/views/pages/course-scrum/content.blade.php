<section id="page-title">

    <div class="container clearfix">
        <h1>НАЗВАНИЕ КУРСА</h1>
    </div>

</section>

<div class="clearfix"></div>

<div id="page-menu">

    <div id="page-menu-wrap">

        <div class="container clearfix center">
            <nav>
                <ul class="clear">
                    @if (Route::has('login'))
                        @if (Auth::check())
                            <li class="current">
                                <a href="{{ url('/home') }}">Кабинет</a>
                            </li>
                        @else
                            <li><a href="{{ url('/login') }}">Войти</a></li>
                            <li><a href="{{ url('/register') }}">Регистрация</a></li>
                        @endif
                    @endif
                </ul>
            </nav>
            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

        </div>

    </div>

</div>
<div class="clearfix"></div>


<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap notoppadding">

        <!-- Video
        ============================================= -->
        <div class="section dark center notopmargin">
            <div class="container clearfix">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/Qk1f2wMKZ5U?ecver=1" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
        <!-- .video end -->

        <div class="container clearfix">

            <div class="postcontent col_last nobottommargin">

                <!-- Portfolio Single Content
                ============================================= -->
                <div class="col_three_fifth portfolio-single-content nobottommargin">

                    <!-- Portfolio Single - Description
                    ============================================= -->
                    <div class="fancy-title title-dotted-border">
                        <h2>Описание курса:</h2>
                    </div>

                    <p>Скрам Мастер – это служитель процессов в Скрам. Само слово процесс по определению означает
                        последовательность действий, ход событий и т.д., которые должны привести к какому-либо
                        результату.</p>
                    <ol>Зачастую эта роль непонятна не только членам команды, но и самому Скрам Мастеру. Чтобы
                        разобраться чем же занимается Scrum Masterв команде, предлагаем распределить круг обязанностей
                        Скрам Мастера по таким направлениям:
                        <li>Для Команды Разработки</li>
                        <li>Для Владельца Продукта</li>
                        <li>Для Компании</li>
                    </ol>
                    <ul>В этом ролике поговорим об обязанностях Скрам Мастера по отношению к Владельцу Продукта:
                        <li>Помогает найти наиболее эффективные техники для управления Бэклогом Продукта.</li>
                        <li>Объясняет Скрам‐команде необходимость кратких и понятных элементов Бэклога Продукта.</li>
                        <li>Объясняет ход планирования продукта в эмпирической среде.</li>
                        <li>Помогает Владельцу Продукта упорядочить Бэклог Продукта с целью получить максимальную
                            ценность продукта.
                        </li>
                        <li>Способствует лучшему пониманию и применению основ гибкой разработки.</li>
                        <li>Фасилитирует Скрам-события при необходимости.</li>
                    </ul>
                    <p>Посмотреть больше о роли Скрам Мастера можно в предыдущих наших видео:<br>
                        <a href="https://www.youtube.com/watch?v=6vwkrvOSJeQ" target="_blank" rel="nofollow">Обязанности
                            Скрам Мастера по отношению к Команде Разработки</a></p>
                    <!-- Portfolio Single - Description End -->

                </div><!-- .portfolio-single-content end -->

                <div class="col_two_fifth col_last nobottommargin">

                    <!-- Portfolio Single - Meta
                    ============================================= -->
                    <div class="panel panel-default events-meta">
                        <div class="panel-body">
                            <ul class="portfolio-meta nobottommargin">
                                <li><span><i class="icon-user"></i>Автор:</span> John Doe</li>
                                <li><span><i class="icon-calendar3"></i>Создан:</span> 17th March 2014</li>
                                <li><span><i class="icon-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Portfolio Single - Meta End -->

                    <!-- Portfolio Single - Share
                    ============================================= -->
                    <div class="si-share noborder clearfix">
                        <span>Поделиться:</span>
                        <div>
                            <a href="#" class="social-icon si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                            <a href="#" class="social-icon si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>
                            <a href="#" class="social-icon si-borderless si-rss">
                                <i class="icon-rss"></i>
                                <i class="icon-rss"></i>
                            </a>
                            <a href="#" class="social-icon si-borderless si-email3">
                                <i class="icon-email3"></i>
                                <i class="icon-email3"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Single - Share End -->

                </div>

                <div class="clear"></div>

                <div class="divider divider-center"><i class="icon-circle"></i></div>

                <!-- Related Portfolio Items
                ============================================= -->
                <h4>Больше знаний:</h4>

                <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20"
                     data-nav="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-lg="3">

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/blog/sm-po.jpg" alt="ALT">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/blog/sm-po.jpg" alt="ALT">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/blog/sm-po.jpg" alt="ALT">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/blog/sm-po.jpg" alt="ALT">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/blog/sm-po.jpg" alt="ALT">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/blog/sm-po.jpg" alt="ALT">
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>

                </div><!-- .portfolio-carousel end -->

                <div class="clearfix"></div>

                <!-- Comments
                        ============================================= -->
                <div id="comments" class="clearfix">

                    <div class="fancy-title title-dotted-border">
                        <h3>Коментарии:</h3>
                    </div>

                    <!-- Comments List
                    ============================================= -->
                    <ol class="commentlist clearfix">

                        <li class="comment even thread-even depth-1" id="li-comment-1">

                            <div id="comment-1" class="comment-wrap clearfix">

                                <div class="comment-meta">

                                    <div class="comment-author vcard">

													<span class="comment-avatar clearfix">
													<img alt=''
                                                         src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                         class='avatar avatar-60 photo avatar-default' height='60'
                                                         width='60'/></span>

                                    </div>

                                </div>

                                <div class="comment-content clearfix">

                                    <div class="comment-author">John Doe<span><a href="#"
                                                                                 title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span>
                                    </div>

                                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id
                                        nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                                        dapibus posuere velit aliquet.</p>

                                    <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                </div>

                                <div class="clear"></div>

                            </div>


                            <ul class='children'>

                                <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                                    <div id="comment-3" class="comment-wrap clearfix">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

															<span class="comment-avatar clearfix">
															<img alt=''
                                                                 src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G'
                                                                 class='avatar avatar-40 photo' height='40' width='40'/></span>

                                            </div>

                                        </div>

                                        <div class="comment-content clearfix">

                                            <div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a
                                                            href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span>
                                            </div>

                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                            <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>

                            </ul>

                        </li>

                        <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                            id="li-comment-2">

                            <div id="comment-2" class="comment-wrap clearfix">

                                <div class="comment-meta">

                                    <div class="comment-author vcard">

													<span class="comment-avatar clearfix">
													<img alt=''
                                                         src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G'
                                                         class='avatar avatar-60 photo' height='60' width='60'/></span>

                                    </div>

                                </div>

                                <div class="comment-content clearfix">

                                    <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb'
                                                                   rel='external nofollow'
                                                                   class='url'>SemiColon</a><span><a href="#"
                                                                                                     title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span>
                                    </div>

                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                    <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                </div>

                                <div class="clear"></div>

                            </div>

                        </li>

                    </ol><!-- .commentlist end -->

                    <div class="clear"></div>

                    <!-- Comment Form
                    ============================================= -->
                    <div id="respond" class="clearfix">

                        <h3>Leave a <span>Comment</span></h3>

                        <form class="clearfix" action="#" method="post" id="commentform">

                            <div class="col_one_third">
                                <label for="author">Name</label>
                                <input type="text" name="author" id="author" value="" size="22" tabindex="1"
                                       class="sm-form-control"/>
                            </div>

                            <div class="col_one_third">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                       class="sm-form-control"/>
                            </div>

                            <div class="col_one_third col_last">
                                <label for="url">Website</label>
                                <input type="text" name="url" id="url" value="" size="22" tabindex="3"
                                       class="sm-form-control"/>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="comment">Comment</label>
                                <textarea name="comment" cols="58" rows="7" tabindex="4"
                                          class="sm-form-control"></textarea>
                            </div>

                            <div class="col_full nobottommargin">
                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                                        class="button button-3d nomargin">Submit Comment
                                </button>
                            </div>

                        </form>

                    </div><!-- #respond end -->
                </div><!-- #comments end -->
            </div>

            {{-- Sidebar --}}
            <div class="sidebar clearfix">
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
            {{-- sidebar end --}}

        </div>

    </div>

</section><!-- #content end -->