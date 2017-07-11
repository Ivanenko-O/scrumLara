<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="col_half">

                    <div class="widget clearfix">

                        <img src="{{URL::asset('images/logo3w.png')}}" alt="" class="footer-logo">

                        <p>Мы верим в то, что <strong>Адаптивность</strong>, <strong>Знания</strong> &amp; <strong>Отличная команда</strong> определяют успех компании.</p>
                            <abbr title="Phone Number"><strong>Тел:</strong></abbr> (380)50-473-71-76<br>(380)99-410-22-87<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@scrummaster.com.ua
                    </div>

                </div>

                <div class="col_half col_last">

                    <div class="widget clearfix">
                        <h4>Последние статьи</h4>

                        <div id="post-list-footer">

                            <div class="spost clearfix">

                                @foreach($g_posts_cat_2 as $g_post_cat_2)
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4>
                                                <a href="{{ url('/blog/'.$g_post_cat_2 -> slug) }}">{{ $g_post_cat_2 -> title }}</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>{{  $g_post_cat_2-> created_at->format('j M Y') }}</li>
                                        </ul>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="widget subscribe-widget clearfix">
                    <h5><strong>Подпишитесь</strong> на нашу рассылку, чтобы получать статьи на тематику Agile, Scrum и наш еженедельный дайджест.</h5>
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form" action="../js/subscribe.php" role="form" method="post" class="nobottommargin">
                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Введите Ваш Email">
                            <span class="input-group-btn">
										<button class="btn btn-green" type="submit">Подписаться</button>
									</span>
                        </div>
                    </form>
                </div>

                <div class="widget clearfix" style="margin-bottom: -20px;">

                    <div class="row">

                        <div class="col-md-2 clearfix bottommargin-sm">
                            <a href="https://www.facebook.com/AgileUA" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                        </div>
                        <div class="col-md-2 clearfix bottommargin-sm">
                            <a href="https://vk.com/scrumup" target="_blank" class="social-icon si-dark si-colored si-vk nobottommargin" style="margin-right: 10px;">
                                <i class="icon-vk"></i>
                                <i class="icon-vk"></i>
                            </a>
                        </div>
                        <div class="col-md-2 clearfix bottommargin-sm">
                            <a href="https://www.youtube.com/channel/UCVevO1TGto6jr8MygeFLfOg" target="_blank" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </div>
                        <div class="col-md-2 clearfix bottommargin-sm">
                            <a href="https://plus.google.com/+ScrumupUa" target="_blank" class="social-icon si-dark si-colored si-gplus nobottommargin" style="margin-right: 10px;">
                                <i class="icon-google-plus"></i>
                                <i class="icon-google-plus"></i>
                            </a>
                        </div>
                        <div class="col-md-2 clearfix bottommargin-sm">
                            <a href="https://twitter.com/scrum_up" target="_blank" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                        </div>
                        <div class="col-md-2 clearfix bottommargin-sm">
                            <a href="https://www.linkedin.com/groups/4391763" target="_blank" class="social-icon si-dark si-colored si-linkedin nobottommargin" style="margin-right: 10px;">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; 2017 All Rights Reserved by Scrummasters<br>
                <div class="copyright-links">Terms of Use / Privacy Policy</div>
            </div>


            <i class="icon-envelope2"></i>info@scrummaster.com.ua<span class="middot">&middot;</span> <i class="icon-headphones"></i>(380)50-473-71-76
            <br> <i class="icon-phone"></i> (380)99-410-22-87<span class="middot">&middot;</span>
        </div>



    </div><!-- #copyrights end -->

</footer><!-- #footer end -->