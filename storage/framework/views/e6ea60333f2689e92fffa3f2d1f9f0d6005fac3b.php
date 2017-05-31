
<div id="top-bar" class="full-header">
    <div class="auth">
        <?php if(Route::has('login')): ?>

            <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>">Login</a>
                <a href="<?php echo e(url('/register')); ?>">Register</a>
            <?php endif; ?>

        <?php endif; ?>
    </div>
    <div class="col_half fright col_last nobottommargin">


        
        <div id="top-social">

            <ul>
                <li><a href="https://www.facebook.com/AgileUA" class="si-facebook" target="_blank" rel="nofollow"><span
                                class="ts-icon"><i class="icon-facebook"></i></span><span
                                class="ts-text">Facebook</span></a></li>
                <li><a href="https://twitter.com/scrum_up" class="si-twitter" target="_blank" rel="nofollow"><span
                                class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a>
                </li>
                <li><a href="https://vk.com/scrumup" class="si-vk" target="_blank" rel="nofollow"><span class="ts-icon"><i
                                    class="icon-vk"></i></span><span class="ts-text">VKontakte</span></a></li>
                <li><a href="https://plus.google.com/+ScrumupUa" class="si-google" target="_blank" rel="nofollow"><span
                                class="ts-icon"><i class="icon-google"></i></span><span
                                class="ts-text">GooglePlus</span></a></li>
                <li><a href="https://www.youtube.com/channel/UCVevO1TGto6jr8MygeFLfOg" class="si-youtube"
                       target="_blank" rel="nofollow"><span class="ts-icon"><i class="icon-youtube"></i></span><span
                                class="ts-text">YouTube</span></a></li>
                <li class="opened-tel"><p class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span
                                class="ts-text">+380504737176</span></p></li>
                <li><a href="mailto:info@scrummaster.com.ua" class="si-email3" target="_blank" rel="nofollow"><span
                                class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@scrummaster
                            .com.ua</span></a></li>
            </ul>
        </div>

    </div>

</div>