<?php  include(app_path().'/date_of_traning/date_of_traning.php'); ?>
<?php echo $__env->make("partials.modal-contact", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="slider-parallax swiper_wrapper full-screen clearfix dark">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('images/scrum0-bg.png'); width:100vw; height: 90vh;">
                    <div class="container clearfix vertical-middle">
                        <div class="slider-caption slider-caption-center">
                            <h1>Scrum с нуля</h1>
                            <p data-animate="fadeInUp" data-delay="200">Однодневный игровой тренинг для новичков в
                                Скрам</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Page Sub Menu -->
    <div id="page-menu">

        <div id="page-menu-wrap">

            <div class="container clearfix">

                <div class="menu-title"><span>SCRUM </span>с нуля</div>

                <nav>
                    <ul>
                        <li><a href="#" data-scrollto="#about">
                                <div>Описание</div>
                            </a></li>
                        <li><a href="#" data-scrollto="#plan">
                                <div>Программа</div>
                            </a></li>
                        <li><a href="#" data-scrollto="#price">
                                <div>Цена</div>
                            </a></li>
                        <li><a href="#" data-scrollto="#date">
                                <div>Даты</div>
                            </a></li>
                        <li><a href="#" data-scrollto="#feedbacks">
                                <div>Отзывы</div>
                            </a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">
                                <div>Регистрация</div>
                            </a></li>
                    </ul>
                </nav>

                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

            </div>
        </div>

    </div><!-- #page-menu end -->


    <!-- Content -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix" id="about">
                <div class="fancy-title title-dotted-border title-center">
                    <h3>ДЕТАЛИ</h3>
                </div>
                <div class="heading-block title-center page-section">
                    <span class="h3">Scrum - это гибкий, адаптирующийся под Ваши условия, каркас процессного управления для Вашей Команды и Компании</span>
                </div>
                <p class="center">Одна из идей Scrum состоит в том, чтобы наладить работу в Вашей среде таким образом,
                    чтобы Ваша команда превратилась из "роботов" в креативную, самоорганизующуюся,
                    высокопроизводительную команду.</p>
                <p class="center">
                    Это однодневный тренинг для начинающих свой путь в Scrum или всех, у кого практический опыт
                    использования Скрам меньше 1 года.
                    С помощью серии игр тренинг поможет полностью увидеть картину Scrum и почувствовать в деталях все
                    его основные аспекты.
                    Играй с нами в Scrum - выиграй знания!
                </p>
            </div>

            <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

            <div class="section noborder dark nomargin" style="padding: 80px 0;">
                <div class="container center clearfix">

                    <div class="heading-block">
                        <h2>Мы не только говорим о возможностях<br>Мы делаем их реальностью</h2>
                    </div>

                    <div class="center">
                        <h4>Длительность тренинга: 9 часов</h4>

                        <div class="progress">
                            <div class="progress-bar" style="width: 44%; background-color: #fff; color: #1A2E3C">
                                <span>10:00 - 13:00</span>
                            </div>
                            <div class="progress-bar" style="width: 12%; background-color: #1ABC9C">
                                <span>13:00 - 14:00</span>
                            </div>
                            <div class="progress-bar" style="width: 44%; background-color: #fff; color: #1A2E3C">
                                <span>14:00 - 19:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col_half center ">
                        <div class="center h3 bottommargin">Для кого:</div>
                        <div class="rounded-skill nobottommargin" data-color="#1ABC9C" data-size="200" data-from="0"
                             data-percent="10" data-width="10" data-speed="2500">
                            <div class="counter counter-inherit" style="font-size: 70%">Новичок в Скрам</div>
                        </div>
                    </div>

                    <div class="col_half center col_last ">
                        <div class="center h3 bottommargin">Цель:</div>
                        <div class="rounded-skill nobottommargin" data-color="#1ABC9C" data-size="200" data-from="0"
                             data-percent="85" data-width="10" data-speed="2500">
                            <div class="counter counter-inherit" style="font-size: 70%">Вся база по Скрам</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

            <div class="container clearfix">
                <div id="section-features" class="heading-block title-center page-section">
                    <h2>Особенности тренинга <span>"Scrum с нуля"</span></h2>
                    <span>Преимущества, нашего тренинга</span>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn">
                            <a href="#"><img src="images/events/scrum0/1.png" alt="icon"></a>
                        </div>
                        <p>Вам не нужно быть из ИТ-сферы, тренинг предназначен для людей из разных областей</p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="100">
                            <a href="#"><img src="images/events/scrum0/2.png" alt="icon"></a>
                        </div>
                        <p>Вы будете владеть полной терминологией Скрам</p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="150">
                            <a href="#"><img src="images/events/scrum0/3.png" alt="icon"></a>
                        </div>
                        <p>За 9 часов вы пройдете полное погружение в Скрам узнав все его важные особенности и
                            аспекты</p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="180">
                            <a href="#"><img src="images/events/scrum0/4.png" alt="icon"></a>
                        </div>
                        <p>Вы получите прочную основу Скрам, закрепленную играми и упражнениями</p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="300">
                            <a href="#"><img src="images/events/scrum0/5.png" alt="icon"></a>
                        </div>
                        <p>Вы хотите понять, подходит ли Scrum для моей сферы или специфики работы</p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="350">
                            <a href="#"><img src="images/events/scrum0/6.png" alt="icon"></a>
                        </div>
                        <p>Тренинг ведет Андрей Павленко – ученик одного из со-основателей Скрам – Джеффа МакКенны</p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="400">
                            <a href="#"><img src="images/events/scrum0/7.png" alt="icon"></a>
                        </div>
                        <p>После тренинга будет выделено время для вопросов и ответов тренера</p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="420">
                            <a href="#"><img src="images/events/scrum0/8.png" alt="icon"></a>
                        </div>
                        <p>После тренинга у вас будет возможность вступить в Скрам группу, где вы сможете задавать и
                            получать ответы на вопросы, касающиеся внедрения Скрам, применения Скрам и реализации Скрам
                            от тренера</p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon" data-animate="bounceIn" data-delay="450">
                            <a href="#"><img src="images/events/scrum0/9.png" alt="icon"></a>
                        </div>
                        <p>Наш диплом после окончания тренинга</p>
                    </div>
                </div>
            </div>

            <!-- adventure of training -->
            <div class="section" style="background: #F9F9F9">
                <div class="container">

                    <div class="heading-block center topmargin">
                        <h3 class="divcenter font-body center"
                            style="max-width: 700px; font-size: 25px;">
                            Scrum с нуля <span>тренинг для меня</span> если:</h3>
                    </div>

                    <div class="col-md-4 col-sm-6 bottommargin">

                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a><i class="icon-line-heart"></i></a>
                            </div>
                            <h3>Я не имею</h3>
                            <p>много знаний и представления о Scrum, но я читал "Скрам-революционный подход" Джеффа
                                Сазерленда</p>
                        </div>

                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-paper"></i></a>
                            </div>
                            <h3>Я хочу</h3>
                            <p>понять подходит ли Scrum для моей сферы бизнеса или специфики работы<br><br></p>
                        </div>

                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-layers"></i></a>
                            </div>
                            <h3>Я хочу</h3>
                            <p>понять что такое Scrum и увидеть все его основные элементы</p>
                        </div>

                    </div>

                    <div class="col-md-4 hidden-sm bottommargin center">
                        <img src="images/scrum0-man.png" alt="scrum0">
                    </div>

                    <div class="col-md-4 col-sm-6 bottommargin">

                        <div class="feature-box topmargin" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-power"></i></a>
                            </div>
                            <h3>Я имею</h3>
                            <p>до 1 года опыта работы по Scrum или не имею опыта вовсе</p>
                        </div>

                        <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-check"></i></a>
                            </div>
                            <h3>Я хочу</h3>
                            <p>иметь представление о современных инструментах менеджмента для применения в своем
                                бизнесе</p>
                        </div>

                        <div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-bulb"></i></a>
                            </div>
                            <h3>или Я хочу</h3>
                            <p>перейти работать в IT и мне нужны знания по самому распространенному в мире каркасу
                                адаптивного управления</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- adventure of training end -->

            <div class="container clearfix" id="plan">
                <div id="section-specs" class="heading-block title-center page-section">
                    <h2>Программа тренинга</h2>
                </div>

                <div id="side-navigation">

                    <div class="col_one_third">

                        <ul class="sidenav">
                            <li class="ui-tabs-active"><a href="#snav-content1"><i class="icon-screen"></i>10:00 - 11:20
                                    Вступление<i class="icon-chevron-right"></i></a></li>
                            <li><a href="#snav-content2"><i class="icon-magic"></i>11:30 - 13:00 Основы<i
                                            class="icon-chevron-right"></i></a></li>
                            <li><a href="#snav-content3"><i class="icon-tint"></i>13:00 - 14:00 Обед <i
                                            class="icon-chevron-right"></i></a></li>
                            <li><a href="#snav-content4"><i class="icon-gift"></i>14:00 - 15:20 Практика<i
                                            class="icon-chevron-right"></i></a></li>
                            <li><a href="#snav-content5"><i class="icon-adjust"></i>15:30 - 19:00 Закрепление и
                                    Заключение<i class="icon-chevron-right"></i></a></li>
                        </ul>

                    </div>

                    <div class="col_two_third col_last">

                        <div id="snav-content1">
                            <h3>Вступление</h3>
                            <ol>
                                <li>Истории успеха компаний, которые внедрили у себя Scrum.</li>
                                <li>Истории провала Scrum. В чем его сложности внедрения.</li>
                                <li>Без чего Скрам не работает?</li>
                                <li>История Scrum.</li>
                                <li>Какие проблемы решает Скрам, Чего хотели достичь и избежать создатели Скрам.</li>
                            </ol>
                        </div>

                        <div id="snav-content2">
                            <h3>Основы</h3>
                            <ol>
                                <li>Каркас Скрам. База, на которой строится Скрам.</li>
                                <li>Обязательные и необязательные встречи в Скрам.</li>
                                <li>Какие роли в Скрам? Какие у них функции, инструкции? Какие отношения между ними?
                                </li>
                                <li>Связь Ролей Скрам с ролями классического проектного управления.</li>
                                <li>Артефакты в Скрам. Каким целям они служат?</li>
                            </ol>
                        </div>

                        <div id="snav-content3">
                            <h3>Обед</h3>
                            Совместный обед и обсуждение своего опыта.
                        </div>

                        <div id="snav-content4">
                            <h3>Практика</h3>
                            Большая игра - проведи свой проект по Скрам Всего за полтора часа мы потренируемся
                            распределять роли внутри команды, Потренируемся в кроссфункциональности и ответственности.
                            Потренируем понимание понятие качества в Скрам. Попрактикуем основные роли и мероприятия в
                            Скрам, пройдемся по уровням роста команды и научимся чувствовать Скрам.
                        </div>

                        <div id="snav-content5">
                            <h3>Закрепление и Заключение</h3>
                            <ol>
                                <li>Философия Agile.</li>
                                <li>Как Скрам связан с Agile.</li>
                                <li>Современные адаптивные каркасы и способы управления.</li>
                                <li>Виды метрик в Agile-среде.</li>
                                <li>Виды сертификации по Скрам. Основные отличия школ по Scrum-сертификации. Плюсы и
                                    минусы каждой из школ.
                                </li>
                                <li>Внедрение Скрам у себя. Основные этапы и цели каждого из них. С чего начинать.</li>
                                <li>Что дальше? Как продолжить свое обучение по Скрам? Где черпать информацию?</li>
                            </ol>
                        </div>

                    </div>

                </div>
            </div>

            <div class="section nomargin noborder dark" id="price">
                <div class="container clearfix">
                    <div id="section-pricing" class="heading-block title-center nobottomborder page-section">
                        <h2>Цена</h2>
                    </div>

                    <div class="pricing-box pricing-extended bottommargin clearfix">

                        <div class="pricing-desc">
                            <div class="pricing-title">
                                <h3>За нашу цену "все включено" вы получаете: </h3>
                            </div>
                            <div class="pricing-features">
                                <ul class="iconlist-color clearfix">
                                    <li><i class="icon-desktop"></i> Материалы в электронном виде после тренинга</li>
                                    <li><i class="icon-eye-open"></i> Наш диплом об окончании курса</li>
                                    <li><i class="icon-beaker"></i> Ответы на вопросы после тренинга</li>
                                    <li><i class="icon-magic"></i> Вкусный обед</li>
                                    <li><i class="icon-font"></i> План по первым шагам к внедрению Скрам</li>
                                    <li><i class="icon-file2"></i> План улучшения своих знаний по Скрам</li>
                                    <li><i class="icon-support"></i> Участие в группе по Скрам после тренинга, с
                                        возможностью задавать вопросы касательно реализации Скрам и полученных знаний
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pricing-action-area">
                            <div class="pricing-meta">
                                выгодное предложение
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit"></span>4000<span class="price-tenure">ГРН.</span>
                            </div>


                            <div class="pricing-action">
                                <a href="#" class="button button-3d button-large btn-block nomargin "
                                   data-toggle="modal" data-target="#myModal">Регистрация</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <section class="page-section topmargin-lg" id="date">

                <div class="heading-block center">
                    <h2>Даты</h2>
                    <span>Следующих событий</span>
                </div>




                <div class="container clearfix">

                    <div class="pricing bottommargin clearfix">
                        <div class="col-md-4" data-animate="fadeInDown" data-delay="150">
                            <div class="pricing-box best-price">
                                <div class="pricing-title">
                                    <h3><?php echo $city1_scrum0 ?></h3>
                                </div>
                                <div class="pricing-price">
                                    <span class="price-unit"> <?php echo $date1_scrum0; ?><span
                                    class="price-tenure"><?php echo $month1_scrum0; ?></span></span>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-dark btn-block btn-lg " data-toggle="modal"
                                       data-target="#myModal">Регистрация</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4" data-animate="fadeInLeft">
                            <div class="pricing-box">
                                <div class="pricing-title">
                                    <h3><?php echo $city2_scrum0 ?></h3>
                                </div>
                                <div class="pricing-price">
                                    <span class="price-unit"><?php echo $date2_scrum0; ?><span
                                    class="price-tenure"><?php echo $month2_scrum0; ?></span></span>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-green btn-block btn-lg" data-toggle="modal"
                                       data-target="#myModal">Регистрация</a>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-4" data-animate="fadeInUp" data-delay="500">
                            <div class="pricing-box">
                                <div class="pricing-title">
                                    <h3><?php echo $city3_scrum0 ?></h3>
                                </div>
                                <div class="pricing-price">
                                    <span class="price-unit"><?php echo $date3_scrum0; ?> <span
                                    class="price-tenure"><?php echo $month3_scrum0; ?></span></span>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-green btn-block btn-lg" data-toggle="modal"
                                       data-target="#myModal">Регистрация</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </section>


            <div class="section nomargin">

                <div class="container clearfix" id="feedbacks">

                    <div id="section-testimonials" class="heading-block title-center page-section">
                        <h2>Отзывы</h2>
                        <span>Что пишут посетители, побывавшие на тренинге "Scrum  с нуля"</span>
                    </div>

                    <ul class="testimonials-grid grid-3 clearfix">
                        <li>
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="http://eleks.com/" target="_blank"><img
                                                src="images/testimonials/eleks.png"
                                                alt="ELEKS"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Как для новичка, такого как я, это было достаточно доступно преподнесено. Также,
                                        там было много моментов, которые я прояснила</p>
                                    <div class="testi-meta">
                                        Larysa Stepanyshyna
                                        <span>ELEKS</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="http://ooobadm.dp.ua/RUS%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8FENGHomeUKR%D0%93%D0%BE%D0%BB%D0%BE%D0%B2%D0%BD%D0%B0/tabid/36/language/uk-UA/Default.aspx"
                                       target="_blank"><img src="images/testimonials/badm.png"
                                                            alt="БаДМ"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Этот был лучший тренинг в моей жизни</p>
                                    <div class="testi-meta">
                                        Olha Bavchenkova
                                        <span>БаДМ</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="http://eleks.com/" target="_blank"><img
                                                src="images/testimonials/eleks.png"
                                                alt="ELEKS"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Я узнал все о Scrum. Особенно мне понравились практические методы обучения</p>
                                    <div class="testi-meta">
                                        Sergii Golovachev
                                        <span>ELEKS</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <div class="testi-image">
                                </div>
                                <div class="testi-content">
                                    <p>It’s really cool training, which helps me to structure in my brain what is the
                                        Scrum. After training I have more power for working and energy to improve work
                                        in my team</p>
                                    <div class="testi-meta">
                                        Alexander Zinoviev
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="http://noosphereventures.com/" target="_blank"><img
                                                src="images/testimonials/noosphere.png"
                                                alt="Noosphere Ventures"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Вдохновили на внедрение Скрама в работу команды+больше всего заинтересовал
                                        коучинг для улучшения эффективности работы команды</p>
                                    <div class="testi-meta">
                                        Albina Fotina
                                        <span>Noosphere Ventures</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <div class="testi-image"></div>
                                <div class="testi-content">
                                    <p>Умерело структурированное количество теории в удобном темпе изложения.
                                        Возможность задать вопросы из личной практики. Тренинг резко повышает мотивацию,
                                        а вместе с ней результат</p>
                                    <div class="testi-meta">
                                        Vladyslav Karpenko
                                        <span>Легкомобiль</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="http://www.adfsolutions.com/" target="_blank"><img
                                                src="images/testimonials/adf.png"
                                                alt="ADF Solutions, Inc"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Качественный и исчерпывающий тренинг, полностью отображает суть тематики</p>
                                    <div class="testi-meta">
                                        Anton Kukoba
                                        <span>ADF Solutions, Inc</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>


            <div class="section footer-stick notopmargin">

                <div class="container clearfix">

                    <div id="section-buy" class="heading-block title-center nobottomborder page-section">
                        <h2>Уже Достаточно?</h2>
                        <span>Начинай строить свой Scrum сразу после тренинга! Все что Вам надо - это зарегистрироваться и получить консультацию</span>
                    </div>

                    <div class="center">

                        <a href="#"
                           data-animate="tada"
                           class="button button-3d button-xlarge nobottommargin"
                           data-toggle="modal" data-target="#myModal">
                            <i class="icon-star3"></i>Регистриуюсь</a> - или -
                        <a href="#"
                           data-scrollto="#section-pricing"
                           id="widget-subscribe-form"
                           action="include/subscribe.php" role="form" method="post"
                           class="button button-3d button-dark button-xlarge nobottommargin">
                            <i class="icon-user2"></i>Какая цена тренинга?</a>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->