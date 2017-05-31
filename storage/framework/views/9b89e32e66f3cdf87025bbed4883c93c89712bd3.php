<?php $__env->startSection('title', 'О компании Scrummasters - Мастера Scrum оптимизации бизнеса'); ?>

<?php $__env->startSection('meta'); ?>
    <?php echo $__env->make('pages.about.aboutus.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pages.about.aboutus.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>