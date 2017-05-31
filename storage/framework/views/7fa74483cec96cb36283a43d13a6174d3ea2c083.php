<?php $__env->startSection('content'); ?>

    
    <section id="page-title">
        <div class="container clearfix">
            <h1> <?php echo e($post-> title); ?> </h1>
            <ol class="breadcrumb">
                <li><a href="">Главная</a></li>
                <li><a href="blog">Блог</a></li>
                <li class="active">Статья</li>
            </ol>
        </div>
    </section>
    
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content -->
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">

                        <!-- Single Post -->
                        <div class="entry clearfix">
                            <h2><?php echo $post->title; ?></h2>

                            <!-- Entry Meta -->
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i><?php echo $post -> created_at ->format(' j M y') ?></li>
                                <li><a href="andriipavlenko"><i class="icon-user"> <?php echo  $post -> authorId -> name ?></i></a>
                                <li><a href="andriipavlenko"><i class="icon-folder"> <?php echo  $post -> category -> name ?></i></a>
                                </li>
                            </ul>
                            <!-- .entry-meta end -->

                            <?php echo $post->body; ?>


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


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>