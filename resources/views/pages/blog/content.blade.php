{{-- Page Title --}}
<section id="page-title">

    <div class="container clearfix">
        <h1>Блог</h1>
        <span>Наши последние статьи и новости из жизни Scrummasters</span>
        <ol class="breadcrumb">
            <li><a href="index">Главная</a></li>
            <li class="active">Блог</li>
        </ol>
    </div>

</section>{{-- #page-title end --}}

{{-- Content --}}

@foreach( $categories as $category)

   {{$category->id}} m{{$category->title}}

    @endforeach

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            {{-- Post Content --}}
            <div class="postcontent nobottommargin clearfix">

                {{-- Posts --}}
                <div id="posts" class="post-timeline clearfix">

                    <div class="timeline-border"></div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            25<span>Апреля 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/scrummaster-info-pt1"><img class="image_fade"
                                                                     src="images/blog/scrummaster-info-pt1.jpg"
                                                                     alt="how to get serctificate of scrummaster"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="scrummaster-info-pt1">Скрам Мастер - кто он такой? Часть 1</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Наша жизнь</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Scrum - один из самых популярных фреймворков для Agile-проектов в мире (58% Agile-проектов мира используют Скрам), об этом
                                свидетельствует последний отчет от “VersionOne”, обзор которого мы делали в...</p>
                            <a href="scrummaster-info-pt1" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            24<span>Апреля 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/agile-world-statistics-2016"><img class="image_fade"
                                                                            src="images/blog/agile-statisctics-2016.jpg"
                                                                            alt="how to get serctificate of scrummaster"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/agile-world-statistics-2016">Мировая статистика по Agile за 2016 год</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="coming-soon"><i class="icon-user"></i>Анастасия Кочегарова</a></li>
                            <li><i class="icon-folder-open"></i> <a>Наша жизнь</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Отчет о применении Agile за 2016 год и тенденциях в мире от “VersionOne”.<br>
                                Компания «VersionOne» – в апреле 2017 года выпустила 11 отчет «State of Agile». Это ежегодный отчет о мировых тенденциях применения
                                Agile.</p>
                            <a href="blog/agile-world-statistics-2016" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            13<span>Апреля 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/how-to-get-certificate"><img class="image_fade"
                                                                       src="images/blog/how-to-get-certificate-tittle.jpg"
                                                                       alt="how to get serctificate of scrummaster"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/how-to-get-certificate">Как получить сертификат Scrum Master</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Наша жизнь</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Вопрос сертификации Скрам-мастеров - самый распространенный вопрос тематики всех Scrum-сертификаций и тренингов. Чуть ли не каждый
                                второй посетитель моих тренингов или долгосрочного Scrum-обучения планирует сертифицироваться в дальнейшем как Скрам Мастер.</p>
                            <a href="blog/how-to-get-certificate" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            4<span>Апреля 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/trening-master-scrum"><img class="image_fade"
                                                                     src="images/blog/trening-master-scrum.jpg"
                                                                     alt="master-scrum"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/trening-master-scrum">Тренинг "Мастер Scrum" от Андрея Павленко</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="coming-soon"><i class="icon-user"></i>Анастасия Кочегарова</a></li>
                            <li><i class="icon-folder-open"></i> <a>Наша жизнь</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Мы развенчиваем мифы о том, что Scrum – это фреймворк, который можно применять только в IT.<br>
                                Scrum имеет свою специфическую терминологию, но нельзя говорит о ней только в ключе IT-терминов...</p>
                            <a href="blog/trening-master-scrum" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            30<span>Март 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/scrum-and-agile"><img class="image_fade"
                                                                src="images/blog/scrum-and-agile.jpg"
                                                                alt="scrum agile"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/scrum-and-agile">Agile и Scrum разница</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Наша жизнь</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Одной из запутанный тем в мире Agile является тождественное приравнивание Scrum к Agile. Этот вопрос часто поднимается и среди клиентов
                                нашей компании. Для тех, кто не любит читать много букв буду краток: Scrum ≢ Agile.</p>
                            <a href="blog/scrum-and-agile" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            28<span>Март 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/master-scrum-in-vector"><img class="image_fade"
                                                                       src="images/blog/master-scrum-in-vector-title.jpg"
                                                                       alt="master-scrum"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/master-scrum-in-vector">Master Scrum 17-18 марта в БЦ "Вектор"</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="coming-soon"><i class="icon-user"></i>Анастасия Кочегарова</a></li>
                            <li><i class="icon-folder-open"></i> <a>Наша жизнь</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Тренинг "Мастер Scrum" был полон новых открытий и динамики.
                                Активно велись дискуссии между участниками и тренером - <a href="../about/andriipavlenko.php">Андреем Павленко</a>...</p>
                            <a href="blog/master-scrum-in-vector" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            27<span>Март 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/what-is-management30"><img class="image_fade"
                                                                     src="images/blog/what-is-management30-title.jpg"
                                                                     alt="Management30"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/what-is-management30">Чем является Management30? История и описание</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-user"></i>Анастасия Кочегарова</a></li>
                            <li><i class="icon-folder-open"></i> <a>Статьи</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>О Management30 начали много говорить в 2010 году после выхода в свет одноименной книги “Management30”, написанной Jurgen Appelo.
                                Идея создания нового адаптивного набора практик для управления - Management30 возникла у Юргена во время...</p>
                            <a href="blog/what-is-management30" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            19<span>Март 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/top-10-fails-of-scrum-teams" data-lightbox="image"><img class="image_fade"
                                                                                                  src="images/blog/10-fails-of-scrum-teams.jpg"
                                                                                                  alt="10 fails of Scrum teams"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/top-10-fails-of-scrum-teams">ТОП-10 ошибок, которые делают 90% Scrum-команд</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Статьи</a>, <a>Agile, Scrum</a></li>
                            <li><a><i class="icon-camera-retro"></i></a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Один из способов предотвратить или минимизировать потери – избежать ошибок или же
                                устранить их в самом начале пути. Однако на ранних этапах имплементации Скрама команду
                                подстерегает огромное количество острых углов и скользких моментов, упускать из виду
                                которые не стоит уже в самом начале рабочего процесса.
                                О самых распространенных ошибках, которые допускают 99% Скрам-команд, и вариантах их
                                решения – читайте дальше в статье.</p>
                            <a href="blog/top-10-fails-of-scrum-teams" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            02<span>Март 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/30-metrics-to-scrum-team-succes" data-lightbox="image"><img class="image_fade"
                                                                                                      src="images/blog/30-metrix-title.jpg"
                                                                                                      alt="30 metrics of Scrum teams"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/30-metrics-to-scrum-team-succes">30 метрик успешности для
                                    Scrum-команд</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Статьи</a>, <a>Agile, Scrum</a></li>
                            <li><a><i class="icon-camera-retro"></i></a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Скорость – одна из самых часто используемых и, одновременно, обманчивых метрик в
                                Скраме. Многие Скрам-команды и стейкхолдеры вновь и вновь попадаются в ловушку
                                собственных стереотипов, основывающихся на ложном убеждении: «со скоростью растет и
                                производительность». На практике оказывается, что производительность - локальная
                                метрика, которая часто слабо коррелирует с общей эффективностью бизнес-системы.</p>
                            <a href="blog/30-metrics-to-scrum-team-succes" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            15<span>Февраль 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/5-tricks-for-daily" data-lightbox="image"><img
                                        class="image_fade" src="images/blog/5-tricks-for-daily.jpg"
                                        alt="5 tricks for Daily Scrum"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/5-tricks-for-daily">5 тактических приемов на Daily Scrum</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Блог</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Итак, сегодня четверг, и мы снова приготовили для вас кое-что интересное.<br>
                                Скажите, как часто вам приходилось сталкиваться с фразами: «Этот Ежедневный Скрам
                                отвлекает меня от работы…» или «Мы слишком много обсуждаем, зачем это нужно…»</p>
                            <a href="blog/5-tricks-for-daily" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            04<span>Февраль 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/17-steps" data-lightbox="image"><img class="image_fade"
                                                                               src="images/blog/17-steps.jpg"
                                                                               alt="17 steps for Scrum Product Owner"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/17-steps">Владелец Продукта: 17 шагов от хорошего к великому</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Статьи</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Рады всех приветствовать, и сегодня мы подготовили для вас более фундаментальный пост
                                :)<br>
                                А тема весьма актуальная: «Как уоовершенствоваться Владельцу Продукта, превратившись из
                                просто хорошего Product Owner’а в по-настоящему великого?»…</p>
                            <a href="blog/17-steps" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            18<span>Январь 2017</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/top-5-dev-team-main-characteristics" data-lightbox="image"><img class="image_fade"
                                                                                                          src="images/blog/top-5-title.jpg"
                                                                                                          alt="Top characteristics of Scrum Development team"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/top-5-dev-team-main-characteristics">ТОП-5 обязательных характеристик
                                    Команды Разработки</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Блог</a>, <a>Agile, Scrum</a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Друзья, мы уверены, что вы наверняка знаете, что в Скраме есть 5 основных ценностей. Все они с дотошной четкостью перечислены в Скрам
                                Гайде.
                                И все же,
                                проверьте себя! Попробуйте мысленно их перечислить, прежде, чем обращаться к
                                инфографике увидеть ценности для Scrum-команд…</p>
                            <a href="blog/top-5-dev-team-main-characteristics" class="more-link">Читать
                                дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            25<span>Декабрь 2016</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/4-fails" data-lightbox="image"><img class="image_fade"
                                                                              src="images/blog/4-fails-title.png"
                                                                              alt="4 reasons on why Agile project fails"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/4-fails">4 причины, почему проваливаются Agile-проекты</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Блог</a>, <a>Agile</a></li>
                            <li><a><i class="icon-camera-retro"></i></a></li>
                        </ul>
                        <div class="entry-content">
                            <p> Привет, друзья! Скажите, помните ли вы какой-нибудь несложившийся Agile-проект?
                                О том, какие признаки часто сопровождают Agile-проекты на пути к “dead route” – в
                                нашем сегодняшнем посте...</p>
                            <a href="blog/4-fails" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            14<span>Ноябрь 2016</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="blog/scrum-history" data-lightbox="image"><img class="image_fade"
                                                                                    src="images/blog/scrum-history.jpg"
                                                                                    alt="Scrum History"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog/scrum-history">Scrum History, или как все начиналось</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="about/andriipavlenko"><i class="icon-user"></i>Андрей Павленко</a></li>
                            <li><i class="icon-folder-open"></i> <a>Статьи</a>, <a>Agile, Scrum</a></li>
                            <li><a><i class="icon-camera-retro"></i></a></li>
                        </ul>
                        <div class="entry-content">
                            <p>Оглядываясь обратно на несколько десятков лет, не всегда удается «прощупать» ту самую
                                лакуну, в которой зародился Scrum. Отправная точка в истории становления данного
                                фреймворка, порой, кажется весьма размытой, и это неудивительно. Scrum на заре
                                своего появления представлял большой «конгломерат» революционных по своему характеру
                                мыслей и взглядов.</p>
                            <a href="blog/scrum-history" class="more-link">Читать дальше...</a>
                        </div>
                    </div>

                </div>{{-- #posts end --}}

            </div>{{-- .postcontent end --}}

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
            {{-- .sidebar end --}}
        </div>

    </div>

</section>
{{-- #content end --}}