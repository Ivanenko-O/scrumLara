<?php $__env->startSection('content'); ?>

    
    <section id="page-title">
        <div class="container clearfix">
            <h1> <?php echo e($post-> title); ?> </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('')); ?>">Главная</a></li>
                <li><a href="blog">Блог</a></li>
                <li class="active">Статья</li>
            </ol>
        </div>
    </section>
    
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">

                        
                        <div class="entry clearfix">
                            <h2><?php echo $post->title; ?></h2>

                            
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i><?php echo $post -> created_at ->format(' j M y') ?></li>
                                <li><a href="../about/andriipavlenko"><i class="icon-user"> <?php echo  $post -> authorId -> name ?></i></a>
                                <li><a href="../about/andriipavlenko"><i class="icon-folder"> <?php echo  $post -> category -> name ?></i></a>
                                </li>
                            </ul>
                            

                            <?php echo $post->body; ?>
                            <?php echo $__env->make('partials.share-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>

                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Автор <span> <?php echo e($post -> authorId -> name); ?></span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <img src="<?php echo e(Voyager::image($post-> authorId -> avatar)); ?>" alt="" class="img-circle">
                            </div>
                            <?php echo e($post-> authorId -> auth_descrip); ?>

                        </div>
                    </div>
                    

                    <div class="line"></div>

                    
                    <div class="post-navigation clearfix">
                        <div class="col_half nobottommargin">
                            <a href="<?php echo e(URL::to( '/blog/'.$prev )); ?>"> &lArr; Предыдущая статья</a>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <a href="<?php echo e(URL::to( '/blog/'.$next )); ?>">Следующая статья &rArr; </a>
                        </div>
                    </div>
                    



                </div>

                
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">

                            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">Статьи</a></li>
                                    <li><a href="#tabs-2">Наша жизнь</a></li>
                                </ul>

                                <div class="tab-container">
                                    <?php echo $__env->make("partials.right-widget-blog", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php echo $__env->make("partials.right-widget-subscribing", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom-scripts'); ?>
    <script type="text/javascript" src="<?php echo e(URL::asset ('js/custom-scripts.js')); ?>"></script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>