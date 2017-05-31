<?php $__env->startSection('title', 'Бесплатная Agile, Scrum-площадка для обучения'); ?>

<?php $__env->startSection('meta'); ?>
    <?php echo $__env->make('pages.blog.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pages.blog.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>