    <div class="slider-parallax swiper_wrapper full-screen clearfix">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('images/main-bg.png');">
                    <div class="container clearfix vertical-middle">
                        <div class="slider-caption slider-caption-center topmargin-sm">
                            <h2 class="media-hidden" data-caption-animate="fadeInUp">Добро пожаловать в
                                Scrummasters</h2>
                            <div data-animate="fadeInUp" class="h1sm" data-delay="200"><h1>Тренинги / Консалтинг /
                                    Коучинг / Внедрение</h1></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <section id="content">


        <div class="content-wrap topmargin-sm ">
            <div id="oc-images"
                 class="owl-carousel owl-carousel-full news-carousel header-stick nobottommargin carousel-widget"
                 data-margin="3" data-loop="true" data-stage-padding="50" data-pagi="false" data-items-xs="1"
                 data-items-lg="2">

                <div class="oc-item">
                    <a href="blog/what-is-management30"><img src="images/what-is-management30-slider.jpg"
                                                             alt="what is Management30"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            <span class="label label-default">Статьи</span>
                            <div class="text-overlay-title">
                                <h2><span>Что такое Management30? История и описание</span></h2>
                            </div>
                            <a href="blog/what-is-management30"
                               class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Читать статью</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <a href="blog/top-10-fails-of-scrum-teams"><img src="images/10-fails-of-scrum-teams-slider.jpg"
                                                                    alt="10 fails of Scrum teams"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            <span class="label label-default">Статьи</span>
                            <div class="text-overlay-title">
                                <h2><span>ТОП-10 ошибок, которые делают 90% Scrum-команд</span></h2>
                            </div>
                            <a href="blog/top-10-fails-of-scrum-teams"
                               class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Читать статью</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <a href="scrum0"><img src="images/scrum0-slider-image.jpg" alt="Scrum0"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            
                            <div class="text-overlay-title">
                                <h2><span>Scrum с нуля</span></h2>
                            </div>
                            <div class="text-overlay-meta">
                                
                            </div>
                            <a href="scrum0"
                               class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Подробнее о тренинге</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <a href="master-of-scrum"><img src="images/master-scrum-slider-image.png" alt="Master Scrum"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            
                            <div class="text-overlay-title">
                                <h2><span>Master Scrum</span></h2>
                            </div>
                            <div class="text-overlay-meta">
                                
                            </div>
                            <a href="master-of-scrum"
                               class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Подробнее о тренинге</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <a href="blog/30-metrics-to-scrum-team-succes"><img src="images/30-metrics-slider.png"
                                                                        alt="Image 3"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            <span class="label label-default">Статьи</span>
                            <div class="text-overlay-title">
                                <h2><span>30 метрик успешности для Scrum-команд</span></h2>
                            </div>
                            <a href="blog/30-metrics-to-scrum-team-succes"
                               class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Читать статью</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <a href="blog/scrum-history"><img src="images/scrum-history-slider.png" alt="Image 4"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            <span class="label label-default">Статьи</span>
                            <div class="text-overlay-title">
                                <h2><span>Scrum History, или как все начиналось</span></h2>
                            </div>
                            <a href="blog/scrum-history"
                               class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Читать статью</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>

        <?php echo $__env->make("partials.part-event-main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </section>


    <a class="button button-full center tright" href="#" data-toggle="modal" data-target="#myModal">
        <div class="container clearfix">
            Заказать корпоративный тренинг для своей компании <strong>Можно здесь</strong> <i
                    class="icon-caret-right" style="top:4px;"></i>

        </div>
    </a>
    <?php echo $__env->make("partials.modal-contact", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="content-wrap nopadding">

        <div id="section-home" class="page-section" style="background-color: #F5F5F5;">

            <div class="container clearfix">

                <h2 class="divcenter bottommargin-sm topmargin font-body center"
                    style="max-width: 700px; font-size: 40px;">
                    НАШИ <span>УСЛУГИ</span></h2>


                <div class="col_one_third bottommargin center service-section">
                    <div class="middle">
                        <i class="i-plain color i-xlarge icon-comments inline-block"
                           style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Корпоративные тренинги</h4>
                            <p class="text-muted">Corporate trainings.</p>
                        </div>
                        <div><a href="services/corporate-study"
                                class="button button-dark button-rounded button-small t600">Узнать больше</a></div>
                    </div>
                </div>

                <div class="col_one_third bottommargin center service-section">
                    <div class="middle">
                        <i class="i-plain color i-xlarge icon-email2 inline-block"
                           style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Анализ и Внедрение</h4>
                            <p>Analysis &amp; Implementation.</p>
                        </div>
                        <div><a href="services/analysis-and-implementation"
                                class="button button-dark button-rounded button-small t600">Узнать больше</a></div>
                    </div>
                </div>

                <div class="col_one_third col_last bottommargin center service-section">
                    <div class="middle">
                        <i class="i-plain color i-xlarge icon-reorder inline-block"
                           style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Коучинг и сопровождение</h4>
                            <p>Coaching &amp; Support.</p>
                        </div>
                        <div><a href="services/coaching-and-support"
                                class="button button-dark button-rounded button-small t600">Узнать больше</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php echo $__env->make('partials.part-blog-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make("partials.part-articles-main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    

    <div class="section nomargin">

        <div class="container clearfix bottommargin notopmargin">
            <h3 class="divcenter font-body center h2 bottommargin-sm uppercase"
                style="max-width: 700px; font-size: 40px;">
                О нас <span>говорят</span></h3>

            <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true"
                 data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3"
                 data-items-lg="3">

                <div class="oc-item">
                    <div class="ipost clearfix">
                        <div class="entry-image">
                            <a href="images/testimonials/mainpage-digitaloutlooks.png" data-lightbox="image"><img
                                        class="image_fade" src="images/testimonials/mainpage-digitaloutlooks.png"
                                        alt="digitaloutlooks"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="http://digitaloutlooks.com/articles/scrum_master_short.html" target="_blank">It
                                    was greate to attend SCRUM maser short training from scrummasters.com.ua</a></h3>
                        </div>
                        <div class="entry-content">
                            <p>It's important to mention peculiarities of event format. In general, It is something
                                between hackaton and workshop rather than training. Special format of teamwork when each
                                participant during couple of minutes can adopt and become full member of the group to
                                solve certain task or problem. All this ensures that for solving task of any complexity
                                is enough to have right attitude to act and follow agreed process.
                                <br>Special thanx for Andrey Pavlenko and his colleagues for cource delivery.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="oc-item">
                    <div class="ipost clearfix">
                        <div class="entry-image">
                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="images/testimonials/zfort/1.png"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort/1.png"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                        <div class="slide"><a href="images/testimonials/zfort/2.png"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort/2.png"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                        <div class="slide"><a href="images/testimonials/zfort/3.png"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort/3.png"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                        <div class="slide"><a href="images/testimonials/zfort/4.png"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort/4.png"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                        <div class="slide"><a href="images/testimonials/zfort/5.png"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort/5.png"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-title">
                            <h3><a href="https://www.facebook.com/events/1701638756641710/permalink/1718060791666173/"
                                   target="_blank">Участники нашего тренинга в Харькове поделились впечатлениями</a>
                            </h3>
                        </div>
                        <div class="entry-content">
                            <p>Зашкаливающая Scrum-частота в нашей компании, 2 дня обучения в режиме non-stop, отлично
                                спланированная программа, практикующий и опытный тренер, 40% теории и 60% практики.<br>
                                Это был Advanced Scrum Core или ІТ- выходные для тех, кто управляет командой и хочет
                                создавать лучшие по качеству и срокам проекты.</p>
                        </div>
                    </div>
                </div>

                <div class="oc-item">
                    <div class="ipost clearfix">
                        <div class="entry-image">
                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="images/testimonials/zfort2/1.jpg"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort2/1.jpg"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                        <div class="slide"><a href="images/testimonials/zfort2/2.jpg"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort2/2.jpg"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                        <div class="slide"><a href="images/testimonials/zfort2/3.jpg"
                                                              data-lightbox="gallery-item"><img class="image_fade"
                                                                                                src="images/testimonials/zfort2/3.jpg"
                                                                                                alt="ZFort Event"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-title">
                            <h3><a href="https://www.zfort.com/blog/how-we-hosted-advanced-scrum-core-2017/"
                                   target="_blank">О том как всё прошло в ZFort</a></h3>
                        </div>
                        <div class="entry-content">
                            <p>At the beginning of the year, in January 2017, our big conference room hosted scrum
                                training. The coach was Andrey Pavlenko, agile coach with 6+ years of experience in the
                                implementation of the Agile practices.</p>
                            <p>Zfort Group collaborates with scrummaster.com.ua, and we plan to participate and host
                                scrum training in the future as well. The next one will start in April 2017. For now,
                                more than 20 of our employees participated in this event and became certified scrum
                                masters.<br>
                                Andrey Pavlenko is the first licensed trainer in Management 3.0 in Ukraine.
                                Certificates: Certified Scrum Professional (CSP), Professional Scrum Master (PSM I),
                                Certified Scrum Master (CSM), Certified Scrum Product Owner (CSPO), Professional Scrum
                                Product Owner (PSPOI), Licensed Management3.0 trainer.</p>
                            <p>During the training, we passed through such topics as scrum history, principles, values,
                                difficulties, and applied scrum into practice. We also acknowledged with agile practices
                                and much more.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        
        <h3 class="divcenter font-body center h2 uppercase" style="max-width: 700px; font-size: 40px;">
            Наши <span>клиенты</span></h3>

        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30"
             data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xxs="3" data-items-xs="3"
             data-items-sm="5" data-items-md="6" data-items-lg="7">

            <div class="oc-item"><a href="https://ukrsibbank.com/ru/" target="_blank"><img
                            src="images/clients/ukrsib.png" alt="Ukrsibbank"></a></div>
            <div class="oc-item"><a href="https://basisco.com.ua/" target="_blank"><img src="images/clients/basis.png"
                                                                                        alt="Basis"></a></div>
            <div class="oc-item"><a
                        href="http://www.amadeus.com/web/amadeus/en_1A-corporate/Amadeus-Home/1319560218660-Page-AMAD_HomePpal"
                        target="_blank"><img src="images/clients/amadeus.png" alt="Amadeus"></a></div>
            <div class="oc-item"><a href="http://www.zfort.com.ua/" target="_blank"><img src="images/clients/zfort.png"
                                                                                         alt="ZFort"></a></div>
            <div class="oc-item"><a href="https://www.infopulse.com/" target="_blank"><img
                            src="images/clients/infopulse.png" alt="InfoPulse"></a></div>
            <div class="oc-item"><a href="http://noosphereventures.com/" target="_blank"><img
                            src="images/clients/noosphere.png" alt="Noosphere"></a></div>
            <div class="oc-item"><a href="http://www.efgbank.com/" target="_blank"><img src="images/clients/efg.png"
                                                                                        alt="EFG Bank"></a></div>
            <div class="oc-item"><a href="http://www.wincor-nixdorf.com/internet/site_EN/EN/Home/homepage_node.html"
                                    target="_blank"><img src="images/clients/wincor.png" alt="Wincor-Nixdorf"></a></div>
            <div class="oc-item"><a href="http://www.fozzy.ua/en/" target="_blank"><img src="images/clients/fozzy.png"
                                                                                        alt="Fozzy group"></a></div>
            <div class="oc-item"><a
                        href="http://ooobadm.dp.ua/RUS%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8FENGHomeUKR%D0%93%D0%BE%D0%BB%D0%BE%D0%B2%D0%BD%D0%B0/tabid/36/language/uk-UA/Default.aspx"
                        target="_blank"><img src="images/clients/badm.png" alt="Badm"></a></div>
            <div class="oc-item"><a href="http://framco.com.ua/" target="_blank"><img src="images/clients/framco.png"
                                                                                      alt="Framco"></a></div>

        </div>

    </div>


    





