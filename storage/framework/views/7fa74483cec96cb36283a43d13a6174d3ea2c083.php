<?php  include(app_path().'/date_of_traning/date_of_traning.php');?>


<?php $__env->startSection('content'); ?>

    
    <section id="page-title">
        <div class="container clearfix">
            <h1> <?php echo e($post-> title); ?> </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('')); ?>">Главная</a></li>
                <li><a href="../blog">Блог</a></li>
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
                                    <div class="widget clearfix">

                                        <h4>Тренинги</h4>
                                        <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="7000">

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../master-of-scrum">
                                                            <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <!--                            <h3><a href="../master-of-scrum">Master Scrum</a></h3>-->
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i><?php echo $date1_master." ".$month1_master?> </a></li>
                                                            <li><i class="icon-map-marker2"></i> <?php echo $city1_master ?></a></li>
                                                        </ul>
                                                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../scrum0">
                                                            <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i> <?php echo $date1_scrum0." ".$month1_scrum0 ?></li>
                                                            <li><i class="icon-map-marker2"></i> <?php echo $city1_scrum0 ?></li>
                                                        </ul>
                                                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../master-of-scrum">
                                                            <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i> <?php echo $date2_master." ".$month2_master?></a></li>
                                                            <li><i class="icon-map-marker2"></i>  <?php echo $city2_master ?></a></li>
                                                        </ul>
                                                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../scrum0">
                                                            <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><a href="#"><i class="icon-time"></i> <?php echo $date2_scrum0." ".$month2_scrum0 ?></a></li>
                                                            <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city2_scrum0 ?></a></li>
                                                        </ul>
                                                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../master-of-scrum">
                                                            <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><i class="icon-time"></i> <?php echo $date3_master." ".$month3_master?></a></li>
                                                            <li><i class="icon-map-marker2"></i>  <?php echo $city3_master ?></a></li>
                                                        </ul>
                                                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="oc-item">
                                                <div class="iportfolio">
                                                    <div class="portfolio-image">
                                                        <a href="../scrum0">
                                                            <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-desc center nobottompadding">
                                                        <ul class="entry-meta nomargin clearfix">
                                                            <li><a href="#"><i class="icon-time"></i> <?php echo $date3_scrum0." ".$month3_scrum0 ?></a></li>
                                                            <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city3_scrum0 ?></a></li>
                                                        </ul>
                                                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
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