
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="modal-content" style="padding-bottom: 20px">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="fancy-title title-dotted-border topmargin-sm center">
                        <span>
                            <h3 style="padding: 0px 0px 0px 5px;">Отправить заявку или <a href="tel:+380504737176" class="si-call button button-3d button-mini"> Позвонить (050) 473 71 76</a></h3>
                        </span>
                    </div>
                </div>

                <div>


                    <div class="contact-widget bottommargin-sm">

                        <div class="contact-form-result"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?php echo e(route('mail.contact')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            

                            <div class="form-process"></div>


                            <div class="col-md-6">
                                <label for="template-contactform-email">Email
                                    <small>*</small>
                                </label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email"
                                       value="" class="required email sm-form-control"/>

                            </div>

                            <div class="col-md-6">
                                <label for="template-contactform-phone">Телефон</label>
                                <small>*</small>
                                <input type="phone" id="template-contactform-phone" name="template-contactform-phone"
                                       value=""  class="required sm-form-control"/>
                            </div>


                            <div class="col-md-12 bottommargin-sm">
                                <label for="template-contactform-message">Текст сообщения
                                    <small>*</small>
                                </label>
                                <textarea class="required sm-form-control" id="template-contactform-message"
                                          name="template-contactform-message" placeholder="Название тренинга или услуги" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck"
                                       name="template-contactform-botcheck" value=""  class="sm-form-control"/>
                            </div>
                            
                            
                            

                            <div class="col-md-12 topmargin-sm">
                                <button name="submit" type="submit" id="submit" tabindex="5" value="Submit"
                                        class="button button-3d nomargin">Отправить
                                </button>
                                <button type="button" class="button button-3d" data-dismiss="modal">Закрыть</button>
                            </div>
                            <div class="col-md-12 ">

<!--                           <a href="tel:+380504737176" class="si-call button button-3d button-small"> Позвонить 050 473 71 76</a> -->
                                </div>



                        </form>


                    </div>

                </div><!-- Contact Form End -->


                <div class="clear">

                </div>
            </div>
        </div>
        </div>
    </div>