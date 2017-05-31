<?php $__env->startSection('title', 'Мастер Scrum - двухдневный тренинг - Scrummasters'); ?>

<?php $__env->startSection('meta'); ?>
    <?php echo $__env->make('pages.master-of-scrum.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('pages.master-of-scrum.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>