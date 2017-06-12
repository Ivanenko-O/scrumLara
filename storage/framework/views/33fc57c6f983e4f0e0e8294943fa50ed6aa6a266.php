
<section id="page-title">

    <div class="container clearfix">
        <h1>Блог</h1>
        <span>Наши последние статьи и новости из жизни Scrummasters</span>
        <ol class="breadcrumb">
            <li><a href="index">Главная</a></li>
            <li class="active">Блог</li>
        </ol>
    </div>

</section>



<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Post Content -->
            <div class="postcontent nobottommargin clearfix">
                <div id="posts" class="post-timeline clearfix">
                    <div class="timeline-border"></div>


                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="entry clearfix">
                            <div class="entry-timeline">
                                <?php echo e($post -> created_at -> format('j')); ?>

                                <span><?php echo e($post -> created_at -> format('M y')); ?></span>
                                <div class="timeline-divider"></div>
                            </div>
                            <div class="entry-image">

                                <?php if(!empty($post->image)): ?>
                                    <a href="<?php echo e(url($post -> slug)); ?>"> <img src="<?php echo e(Voyager::image( $post->image )); ?>" alt="<?php echo e($post->title); ?>" width="800" height="600" /> </a>

                                <?php endif; ?>

                            </div>
                            <div class="entry-title">
                                <h2> <a href="<?php echo e(url($post -> slug)); ?>"> <?php echo e($post->title); ?> </a></h2>
                                
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-user"></i><?php echo e($post -> authorId -> name); ?></li>
                                <li><i class="icon-folder-open"></i><?php echo e($post -> category -> name); ?></li>
                            </ul>
                            <div class="entry-content">
                            <?php echo e($post -> excerpt); ?>

                            </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php echo e($posts->links()); ?>


                </div>
            </div>
        </div>
    </div>
</section>
