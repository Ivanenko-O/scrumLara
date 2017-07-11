<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Личный кабинет</div>

                <div class="panel-body">
                   <h4> Вы авторизировались!</h4>

                    <p>В ближайщее время в личном кабинете вы сможете осуществить подписку на обучающий <b> онлайн</b></и> курс <b> Scrum с Нуля</b>  </p>

                    <p>Мы почти доделали наглядный курс по Scrum</p>
                    <div class="progress progress-striped active topmargin divcenter"
                         style="height: 10px; max-width:600px;">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="sr-only">90% Complete</span>
                        </div>
                    </div>

                    Предлагаем сейчас ознакомится с подробными публикациями по тематике:
                    <ul>
                        <li>Scrum;</li>
                        <li>Agile;</li>
                        <li>Lean;</li>
                    </ul>

                     в нашем блоге: <a href="<?php echo e(url('/blog')); ?>">Блог</a>


                    
                    
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>