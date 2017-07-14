<!-- Sidebar -->

<div class="tab-content clearfix" id="tabs-1">
    <div id="popular-post-list-sidebar">

        <?php $__currentLoopData = $g_posts_cat_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_post_cat_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="spost clearfix">
                <div class="entry-image">
                    <a href="<?php echo e(url('/blog/'.$g_post_cat_2 -> slug)); ?>"> <img src="<?php echo e(Voyager::image($g_post_cat_2->image)); ?>" alt="<?php echo e($g_post_cat_2->title); ?>"></a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h4><a href="<?php echo e(url('/blog/'.$g_post_cat_2->slug)); ?>"><?php echo e($g_post_cat_2->title); ?></a></h4>
                    </div>
                </div>
                <ul class="entry-meta ">
                    <li><i class="icon-calendar"> <?php echo e($g_post_cat_2->created_at->format('j M y')); ?></i></li>
                </ul>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<div class="tab-content clearfix" id="tabs-2">
    <div id="recent-post-list-sidebar">

        <?php $__currentLoopData = $g_posts_cat_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_post_cat_1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="spost clearfix">
                <div class="entry-image">
                    <a href="<?php echo e(url('/blog/'.$g_post_cat_1 -> slug)); ?>"> <img src="<?php echo e(Voyager::image($g_post_cat_1->image)); ?>" alt="<?php echo e($g_post_cat_1->title); ?>"></a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h4><a href="<?php echo e('/blog/'.url($g_post_cat_1->slug)); ?>"><?php echo e($g_post_cat_1->title); ?></a></h4>
                    </div>
                </div>
                <ul class="entry-meta ">
                    <li><i class="icon-calendar"> <?php echo e($g_post_cat_1->created_at->format('j M y')); ?></i></li>
                </ul>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div>

<!-- .sidebar end -->
