<?php $__env->startSection('title', 'Список всех тренингов - Agile Scrum Management30'); ?>

<?php $__env->startSection('meta'); ?>
    <?php echo $__env->make('pages.eventlist.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pages.eventlist.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>