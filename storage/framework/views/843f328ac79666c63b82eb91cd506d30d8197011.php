<?php $__env->startSection('title', 'Scrum с нуля - однодневный тренинг - Scrummasters'); ?>

<?php $__env->startSection('meta'); ?>
    <?php echo $__env->make('pages.scrum0.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pages.scrum0.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>