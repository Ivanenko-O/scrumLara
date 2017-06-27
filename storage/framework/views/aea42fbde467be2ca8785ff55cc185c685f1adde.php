
    <section id="page-title">
        <div class="container clearfix">
            <h1>Контакты</h1>
            <span>Связь с нами</span>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('')); ?>">Главная</a></li>
                <li class="active">Контакты</li>
            </ol>
        </div>
    </section>



<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Postcontent
            ============================================= -->
            <div class="postcontent nobottommargin">

                <div class="col_full clearfix">
                    <h3>Следите за нами</h3>

                    <div class="col-lg-4">
                        <a href="https://www.facebook.com/AgileUA" target="_blank" class="social-icon si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/scrum_up" target="_blank" class="social-icon si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://vk.com/scrumup" target="_blank" class="social-icon si-vk">
                            <i class="icon-vk"></i>
                            <i class="icon-vk"></i>
                        </a>
                        <a href="https://plus.google.com/+ScrumupUa" target="_blank" class="social-icon si-google">
                            <i class="icon-google"></i>
                            <i class="icon-google"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCVevO1TGto6jr8MygeFLfOg" target="_blank"
                           class="social-icon si-youtube">
                            <i class="icon-youtube"></i>
                            <i class="icon-youtube"></i>
                        </a>
                    </div>

                    <div class="col-lg-8">
                        <div class="col-lg-6">
                            <div class="i-plain icon-call nomargin center" style="padding-right: 1rem"></div>
                            <div>
                                +380-50-4737176<br>
                                <span style="color: #1ABC9C">+380-99-4102287</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="i-plain icon-line2-envelope nomargin center" style="padding-right: 1rem"></div>
                            <div>
                                Email:<br>
                                <span style="color: #1ABC9C"> info@scrummaster.com.ua</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>

                <h2>Задать вопрос на E-mail</h2>

                <div class="contact-widget" data-alert-type="inline">

                    <div class="contact-form-result"></div>

                    <form class="nobottommargin" action="<?php echo e(route('mail.contact')); ?>" method="POST">


                        <?php echo e(csrf_field()); ?>



                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Имя
                                <small>*</small>
                            </label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name"
                                   value="" class="sm-form-control required"/>
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Email
                                <small>*</small>
                            </label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email"
                                   value="" class="required email sm-form-control"/>
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Телефон</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                   value="" class="sm-form-control"/>
                        </div>

                        <div class="clear"></div>

                        <div class="col_two_third">
                            <label for="template-contactform-subject">Тема</label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject"
                                   value="" class="required sm-form-control"/>
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Услуги</label>
                            <select id="template-contactform-service" name="template-contactform-service"
                                    class="sm-form-control">
                                <option value="">-- Тематика вопроса --</option>
                                <option value="publicevents">Открытые тренинги</option>
                                <option value="corporatestudy">Корпоративное обучение</option>
                                <option value="execution">Внедрение процессов в компании</option>
                                <option value="mysterytrainer">Хотим чтобы тренер пришел к нам на мероприятие
                                </option>
                            </select>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-message">Сообщение
                                <small>*</small>
                            </label>
                            <textarea class="required sm-form-control" id="template-contactform-message"
                                      name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck"
                                   name="template-contactform-botcheck" value="" class="sm-form-control"/>
                        </div>

                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit"  value="submit">Отправить сообщение
                            </button>
                        </div>

                    </form>



                </div>

            </div>
            

                
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">

                            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">Статьи</a></li>
                                    <li><a href="#tabs-2">Наша жизнь</a></li>
                                </ul>

                                <div class="tab-container">
                                    <?php echo $__env->make("partials.right-widget-blog", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            


        </div>
        
    </section>


