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
                                <li><a href="andriipavlenko"><i class="icon-user"> <?php echo  $post -> authorId -> name ?></i></a>
                                <li><a href="andriipavlenko"><i class="icon-folder"> <?php echo  $post -> category -> name ?></i></a>
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
                            <a href="{{ URL::to( $prev ) }}"> &lArr; Предыдущая статья</a>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <a href="{{ URL::to( $next ) }}">Следующая статья &rArr; </a>
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

@section('custom-scripts')
    <script type="text/javascript">

        jQuery(window).load( function(){
            var barChartData = {
                labels : ["Scrum","Scrum/XP гибрид","Скрамбан","Канбан"],
                datasets : [
                    {
                        fillColor : "rgba(26,46,60,0.8)",
                        strokeColor : "rgba(26,187,155,1)",
                        data : [58,10,8,5]
                    }
                ]

            };
            var barChart2Data = {
                labels : ["Планирование спринта","Daily","Ретроспектива","Обзор спринта","Короткие спринты"],
                datasets : [
                    {
                        fillColor : "rgba(26,46,60,0.8)",
                        strokeColor : "rgba(26,187,155,1)",
                        data : [90,88,83,81,71]
                    }
                ]

            };


            var doughnutChartData = [
                {
                    value : 50,
                    color : "#1A2E3C",
                    label : "Страны Северной Америки"
                },
                {
                    value : 28,
                    color : "#284350",
                    label : "Страны Европы"
                },
                {
                    value : 10,
                    color : "#2D5A5D",
                    label : "Страны Азии"
                },
                {
                    value : 5,
                    color : "#198A75",
                    label : "Южная Америка"
                },
                {
                    value : 4,
                    color : "#19AE91",
                    label : "Страны Океании"
                },
                {
                    value : 2,
                    color : "#22DFBA",
                    label : "Страны Африки"
                }
            ];
            var doughnutChart2Data = [
                {
                    value: 23,
                    color: "#1A2E3C",
                    label: "IT"
                },
                {
                    value : 14,
                    color : "#213746",
                    label: "Финансы"
                },
                {
                    value: 12,
                    color: "#263E4D",
                    label: "Консалтинг"
                },
                {
                    value: 6,
                    color: "#2A4853",
                    label: "Страхование"
                },
                {
                    value: 6,
                    color: "#2D5359",
                    label: "Медицина"
                },
                {
                    value: 5,
                    color: "#276763",
                    label: "Государственный сектор"
                },
                {
                    value: 4,
                    color: "#1D7F6F",
                    label: "Телекоммуникации"
                },
                {
                    value: 4,
                    color: "#17947C",
                    label: "Транспорт"
                },
                {
                    value: 4,
                    color: "#19A68B",
                    label: "Производство"
                },
                {
                    value: 3,
                    color: "#1AB99A",
                    label: "Образование"
                },
                {
                    value: 1,
                    color: "#1DC8A6",
                    label: "другие"
                },
            ];
            var doughnutChart3Data = [
                {
                    value: 39,
                    color: "#1A2E3C",
                    label: "< 1000 сотрудников в штате"
                },
                {
                    value: 26,
                    color: "#2D5359",
                    label: "> 20 000 сотрудников в штате"
                },
                {
                    value: 18,
                    color: "#17937B",
                    label: "1000 - 5000 сотрудников в штате "
                },
                {
                    value: 17,
                    color: "#1DC8A6",
                    label: "5000 - 20 000 сотрудников"
                },
            ];
            var doughnutChart4Data = [
                {
                    value: 34,
                    color: "#1A2E3C",
                    label: "101 - 1000 сотрудников в штате"
                },
                {
                    value: 32,
                    color: "#2D5359",
                    label: "< 100 сотрудников в штате"
                },
                {
                    value: 19,
                    color: "#17937B",
                    label: "> 5 001 сотрудника в штате"
                },
                {
                    value: 15,
                    color: "#1DC8A6",
                    label: "1000 - 5000 сотрудников"
                },
            ];
            var doughnutChart5Data = [
                {
                    value: 23,
                    color: "#1A2E3C",
                    label: "Project/Program менеджеры"
                },
                {
                    value: 19,
                    color: "#243B4A",
                    label: "Скрам Мастера"
                },
                {
                    value: 15,
                    color: "#294753",
                    label: "Сотрудники из разработки"
                },
                {
                    value: 14,
                    color: "#2E555A",
                    label: "Консультанты и тренера"
                },
                {
                    value: 13,
                    color: "#237269",
                    label: "Руководители разработки"
                },
                {
                    value: 6,
                    color: "#179079",
                    label: "Владельцы продуктов"
                },
                {
                    value: 5,
                    color: "#19AA8D",
                    label: "Бизнес-аналитики"
                },
                {
                    value: 3,
                    color: "#1BC1A0",
                    label: "ТОП-менеджмент"
                },
                {
                    value: 2,
                    color: "#1DC8A6",
                    label: "IT-персонал"
                },
            ];
            var doughnutChart6Data = [
                {
                    value: 32,
                    color: "#1A2E3C",
                    label: "От 3 до 5 лет"
                },
                {
                    value: 28,
                    color: "#2D5359",
                    label: "Свыше 5 лет опыта"
                },
                {
                    value: 25,
                    color: "#17937B",
                    label: "1-2 года опыта"
                },
                {
                    value: 15,
                    color: "#1DC8A6",
                    label: "Менее одного года "
                },
            ];
            var doughnutChart7Data = [
                {
                    value: 44,
                    color: "#1A2E3C",
                    label: "Профессиональный уровень*"
                },
                {
                    value: 28,
                    color: "#2D5359",
                    label: "Хороший уровень**"
                },
                {
                    value: 11,
                    color: "#17937B",
                    label: "Незначительный/отсутствует опыт***"
                },
                {
                    value: 7,
                    color: "#1DC8A6",
                    label: "Средний уровень****"
                },
            ];


            var globalGraphSettings = {animation : Modernizr.canvas};

            function showBarChart(){
                var ctx = document.getElementById("barChartCanvas").getContext("2d");
                new Chart(ctx).Bar(barChartData,globalGraphSettings);
            }
            function showBarChart2(){
                var ctx = document.getElementById("barChart2Canvas").getContext("2d");
                new Chart(ctx).Bar(barChart2Data,globalGraphSettings);
            }



            function showDoughnutChart(){
                var ctx = document.getElementById("doughnutChartCanvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChartData,globalGraphSettings);
            }
            function showDoughnutChart2(){
                var ctx = document.getElementById("doughnutChart2Canvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChart2Data,globalGraphSettings);
            }
            function showDoughnutChart3(){
                var ctx = document.getElementById("doughnutChart3Canvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChart3Data,globalGraphSettings);
            }
            function showDoughnutChart4(){
                var ctx = document.getElementById("doughnutChart4Canvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChart4Data,globalGraphSettings);
            }
            function showDoughnutChart5(){
                var ctx = document.getElementById("doughnutChart5Canvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChart5Data,globalGraphSettings);
            }
            function showDoughnutChart6(){
                var ctx = document.getElementById("doughnutChart6Canvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChart6Data,globalGraphSettings);
            }
            function showDoughnutChart7(){
                var ctx = document.getElementById("doughnutChart7Canvas").getContext("2d");
                new Chart(ctx).Doughnut(doughnutChart7Data,globalGraphSettings);
            }

            $('#barChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showBarChart,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#barChart2').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showBarChart2,300); },{accX: 0, accY: -155},'easeInCubic');

            $('#doughnutChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#doughnutChart2').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart2,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#doughnutChart3').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart3,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#doughnutChart4').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart4,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#doughnutChart5').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart5,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#doughnutChart6').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart6,300); },{accX: 0, accY: -155},'easeInCubic');
            $('#doughnutChart7').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart7,300); },{accX: 0, accY: -155},'easeInCubic');

        });
    </script>
@endsection
