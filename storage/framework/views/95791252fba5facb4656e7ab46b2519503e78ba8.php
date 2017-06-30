<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>

    <title> <?php echo $__env->yieldContent('title'); ?></title>
            <?php echo $__env->yieldContent('meta'); ?>

    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/bootstrap.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/style.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/swiper.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/dark.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/font-icons.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/animate.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/magnific-popup.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(URL::asset ('css/responsive.css')); ?>" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>



</head>

<body class="stretched">
<div id="wrapper" class="clearfix">

    <?php echo $__env->make("layouts.top-bar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make("layouts.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
    <?php echo $__env->yieldContent('content'); ?>
    


    <?php echo $__env->make("layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>


<div id="gotoTop" class="icon-angle-up"></div>



<script src="<?php echo e(URL::asset ('js/jquery.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset ('js/plugins.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(URL::asset ('js/functions.js')); ?>"></script>



</body>
</html>