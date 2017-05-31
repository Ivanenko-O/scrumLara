<?php $__env->startSection('title', 'Scrummasters - тренинги по Agile Scrum Lean Management30'); ?>

<?php $__env->startSection('meta'); ?>
    <?php echo $__env->make('pages.home.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pages.home.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>