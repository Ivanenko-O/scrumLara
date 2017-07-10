<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Личный кабинет</div>

                <div class="panel-body">
                    Вы авторизировались!

                    <p>Перейти к обучающему курсу:
                    <a href="<?php echo e(url('/list-courses')); ?>">Scrum0</a>
                </div>
            </div>
            {{}}
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>