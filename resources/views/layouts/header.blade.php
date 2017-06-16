{{-- Header --}}
<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger" class="menu-icon">
                <div style="font-size: 12px">МЕНЮ</div>
                <i class="icon-reorder"></i></div>

            {{-- Logo --}}
            <div id="logo">
                <a href="/" class="standard-logo" data-dark-logo="../images/logo3b.png"><img
                            src="{{ URL::asset('images/logo3b.png') }}" alt="logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="../images/logo3retina.png"><img
                            src="{{ URL::asset('images/logo3retina.png') }}" alt="logo-retina"></a>
            </div>
            {{-- #logo end --}}

            {{-- Primary Navigation--}}
            <nav id="primary-menu" class="sub-title">

                <ul>
                    <li class="mega-menu ">
                        <a href="#">
                            <div>События</div>
                            <span>Наши мероприятия</span>
                        </a>
                        <div class="mega-menu-content style-2 clearfix ">
                            <ul class="mega-menu-column col-md-5">
                                <li class="mega-menu-title">
                                    <a href="#">
                                        <div>Все ближайшие мероприятия</div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('eventlist') }}">
                                                <div><i class="ico n-indent-right"></i>Список всех мероприятий</div>
                                            </a>
                                        </li>
                                        {{--<li><a href="eventcalendar.html">--}}
                                        {{--<div><i class="icon-calendar2"></i>Календарь мероприятий</div>--}}
                                        {{--</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-md-5">
                                <li class="mega-menu-title">
                                    <a href="#">
                                        <div>Scrum</div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('scrum0') }}">
                                                <div><i class="icon-calendar3"></i>"Scrum с нуля" - однодневный тренинг
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url ('master-of-scrum') }}">
                                                <div><i class="icon-calendar3"></i>"Мастер Scrum" - двухдневный тренинг
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url ('coming-soon') }}">
                                                <div><i class="icon-calendar3"></i>"Scrum Advanced" - трехдневный
                                                    практикум
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-title">
                                    <a href="#">
                                        <div>Agile</div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url ('management30') }}">
                                                <div><i class="icon-calendar3"></i>"Management 3.0" - 2 дня
                                                    Agile-практик для менеджеров
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url ('coming-soon') }}">
                                                <div><i class="icon-calendar3"></i>"Инструменты Scrum Мастера" -
                                                    однодневный тренинг
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">
                            <div>Услуги</div>
                            <span>Что мы умеем</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/services/corporate-study')}}">
                                    <div>Корпоративное обучение</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{url ('/services/analysis-and-implementation') }}">
                                    <div>Анализ и внедрение</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{url ('/services/coaching-and-support') }}">
                                    <div>Коучинг и сопровождение</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="{{url ('blog') }}">
                            <div>Блог</div>
                            <span>Наша жизнь</span></a>
                    </li>
                    {{--<li class="mega-menu"><a href="#"><div>Магазин</div><span>оСкрамь свою жизнь</span></a>--}}
                    {{--</li>--}}
                    <li><a href="#">
                            <div>О Нас</div>
                            <span>Познакомимся</span></a>
                        <ul>
                            <li><a href="{{url ('/about/aboutus') }}">
                                    <div>О компании</div>
                                </a></li>
                            <li><a href="{{url ('/about/andriipavlenko') }}">
                                    <div>О тренере</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="{{ url('contact') }}">
                            <div>Контакты</div>
                            <span>Как связаться</span></a>
                    </li>

                </ul>

            </nav>{{-- #primary-menu end --}}

        </div>

    </div>

</header>
{{-- #header end --}}
