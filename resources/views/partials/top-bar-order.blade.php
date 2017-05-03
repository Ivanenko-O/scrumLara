{{-- Top Bar
============================================= --}}
<div id="top-bar" class="full-header">

    <div class="container clearfix">

        <div class="col_half nobottommargin">
            {{-- Top Links
============================================= --}}
            <div class="top-links">
                <ul>
                    <li><a href="tel:+380504737176"><i class="icon-phone3"></i>+380-50-473-71-76</a></li>
                    <li><a href="mailto:info@scrummaster.com.ua" class="nott"><i class="icon-envelope2"></i>info@scrummaster.com.ua</a></li>
                </ul>
            </div>{{-- .top-links end --}}
        </div>

        <div class="col_half fright col_last nobottommargin">
            {{-- Top Social
============================================= --}}
            <div class="top-links">
                <ul>
{{--                    <li><a href="#">EN</a>--}}
{{--                        {{--<ul>--}}
{{--                        {{--<li><a href="#"><img src="../images/icons/flags/french.png" alt="French"> FR</a></li>--}}
{{--                        {{--<li<a href="#"><img src="../images/icons/flags/italian.png" alt="Italian"> IT</a></li>--}}
{{--                        {{--<li><a href="#"><img src="../images/icons/flags/german.png" alt="German"> DE</a></li>--}}
{{--                        {{--</ul>--}}
{{--                    </li>--}}
                    <li><a href="#" data-offset="100"
                           data-easing="easeInOutExpo" data-toggle="modal" data-target="#myModal" data-speed="1200"
                           class="bgcolor" style="color:#fff;">Заказать
                            для компании</a></li>
                </ul>
            </div>{{-- .top-links end --}}


           @include("partials.modal-contact")


        </div>

    </div>

</div>{{-- #top-bar end --}}