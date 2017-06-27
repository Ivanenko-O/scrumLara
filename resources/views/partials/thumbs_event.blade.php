@include('date_of_traning/date_of_traning.php');

<div class="col_half">
    <div class="fancy-title title-center title-dotted-border topmargin">
        <h3>Ближайшие мероприятия</h3>
    </div>
    <div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-sm="1" data-items-md="1" data-items-lg="1">

        <div class="oc-item">
            <div class="ievent clearfix">
                <div class="entry-image">
                    <a href="../master-of-scrum">
                        <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                        <div class="entry-date"><span><?php echo $date1_master."<br>".$month1_master ?></span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="../master-of-scrum">Master Scrum</a></h2>
                    </div>
                    {{--<ul class="entry-meta clearfix">--}}
                        {{--<li><i class="icon-time"></i><?php echo $date1_master ." ". $month1_master ?> </a></li>--}}
                        {{--<li><i class="icon-map-marker2"></i> <?php echo $city1_master ?></a></li>--}}
                    </ul>
                    <div class="entry-content">
                        <a href="master-of-scrum" class="btn btn-green">Узнать детали</a>
                    </div>
                </div>
            </div>

            <div class="ievent clearfix">
                <div class="entry-image">
                    <a href="scrum0">
                        <img src="images/scrum0-banner.jpg" alt="Scrum0">
                        <div class="entry-date"><span><?php echo $date1_scrum0."<br>".$month1_scrum0 ?></span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="scrum0">Scrum с нуля</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><a href="#"><i class="icon-time"></i> <?php echo $date1_scrum0. $month1_scrum0 ?></a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city1_scrum0 ?></a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="scrum0" class="btn btn-green">Узнать детали</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="oc-item">
            <div class="ievent clearfix">
                <div class="entry-image">
                    <a href="master-of-scrum">
                        <img src="images/master-scrum-banner.jpg" alt="Мастер Scrum">
                        <div class="entry-date"><span><?php echo $date2_master."<br>".$month2_master ?></span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="../master-of-scrum">Master Scrum</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-time"></i> <?php echo $date2_master . $month2_master?></a></li>
                        <li><i class="icon-map-marker2"></i>  <?php echo $city2_master ?></a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>
                    </div>
                </div>
            </div>

            <div class="ievent clearfix">
                <div class="entry-image">
                    <a href="../scrum0">
                        <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                        <div class="entry-date"><span><?php echo $date2_scrum0."<br>".$month2_scrum0 ?></span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="../scrum0">Scrum с нуля</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><a href="#"><i class="icon-time"></i> <?php echo $date2_scrum0.$month2_scrum0 ?></a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city2_scrum0 ?></a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="oc-item">
            <div class="ievent clearfix">
                <div class="entry-image">
                    <a href="../master-of-scrum">
                        <img src="../images/master-scrum-banner.jpg" alt="Мастер Scrum">
                        <div class="entry-date"><span><?php echo $date3_master."<br>".$month3_master ?></></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="../master-of-scrum">Master Scrum</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-time"></i> <?php echo $date3_master .$month3_master?></a></li>
                        <li><i class="icon-map-marker2"></i>  <?php echo $city3_master ?></a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="../master-of-scrum" class="btn btn-green">Узнать детали</a>
                    </div>
                </div>
            </div>

            <div class="ievent clearfix">
                <div class="entry-image">
                    <a href="../scrum0">
                        <img src="../images/scrum0-banner.jpg" alt="Scrum0">
                        <div class="entry-date"><span><?php echo $date3_scrum0."<br>".$month3_scrum0 ?></span></div>
                    </a>
                </div>
                <div class="entry-c">
                    <div class="entry-title">
                        <h2><a href="../scrum0">Scrum с нуля</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><a href="#"><i class="icon-time"></i> <?php echo $date3_scrum0.$month3_scrum0 ?></a></li>
                        <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $city3_scrum0 ?></a></li>
                    </ul>
                    <div class="entry-content">
                        <a href="../scrum0" class="btn btn-green">Узнать детали</a>
                    </div>

                </div>

            </div>


        </div>

    </div>
</div>


