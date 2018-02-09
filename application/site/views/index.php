
<?php include('_header.php');?>
<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_8 magazine">
        <!-- Small Slider -->
        <div class="refineSlide">
            <ul class="rs-slider">
            <?php foreach($breking_news as $slider_news) {?>
                <li>
                    <a href="<?php echo base_url();?>index.php/news/post/<?php echo $slider_news['news_id'];?>" title=''>
                        <img width="628" height="356"
                             src="<?php echo base_url();?>slider/<?php echo $slider_news['slider_image'];?>"
                             class="attachment-small-slider wp-post-image" alt="fashions"/> </a>

                    <div class="rs-caption">
                        <a href="<?php echo base_url();?>index.php/news/post/<?php echo $slider_news['news_id'];?>" title=''><?php echo $slider_news['name'];?></a>

                        
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <script type='text/javascript'>
            jQuery(document).ready(function ($) {
                $('.rs-slider').refineSlide({
                    transition: 'random',
                    fallback3d: '',
                    captionWidth: 100,
                    transitionDuration: 1000,
                    autoPlay: true,
                    delay: 2500,
                    useArrows: true,
                    arrowTemplate: '<div class="rs-arrows"><a href="#" class="rs-prev"></a><a href="#" class="rs-next"></a></div>',


                });
            });
        </script>
        <div class="widget widget-magazine">

            <h2 class="widget-magazine-line">
                <div class="widget-magmag-title"><a href="#">ভিডিও</a></div>
            </h2>
            <div class="vid-container">
                <div id="player"></div>
                <div class="vid-list-cont">
                    <a href="#" class="prev1"></a>
                    <div class="vid-list">
                        <ul>
                        <?php foreach($video as $video_links) {?>
                            <li><img src="http://img.youtube.com/vi/<?php echo $video_links['video'];?>/default.jpg" alt="" onclick="player.loadVideoById('<?php echo $video_links['video'];?>', 0, 'large');" style="cursor:pointer;"></li>
                            
                        <?php } ?>
                        </ul>
                    </div>
                    <a href="#" class="next1"></a>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $(".vid-list").jCarouselLite({
                        visible: 5,
                        btnNext: ".next1",
                        btnPrev: ".prev1",
                        auto: false,
                        speed: 600    });
                });
            </script>
        </div>

        <div class="widget widget-magazine">

           <h2 class="widget-magazine-line"><div class="widget-magmag-title"><a href="<?php echo base_url();?>index.php/news/watch/kolkata-news">কলকাতা</a></div></h2>
            <div id="kolkata-main" class="block-big half-left"> <!-- Target -->
                <div class="magmg-image">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $kolkata1[0]['news_id'];?>" title=""><img width="300" class="news_image" height="300" src="<?php echo base_url();?>news/<?php echo $kolkata1[0]['news_image'];?>" class="overlay wp-post-image" alt=""></a>
                    <div class="mag-super-title" style="left: 0px; top: 70%;">
                        <h3><a href="<?php echo base_url();?>index.php/news/post/<?php echo $kolkata1[0]['news_id'];?>" title="Simple post" class="news_title"><?php echo $kolkata1[0]['name'];?></a></h3>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="mag-super-desc">
                    <p class="news_desc"><?php echo $kolkata1[0]['sdesc'];?></p>
                    <a href="<?php echo base_url();?>index.php/news/post/<?php echo $kolkata1[0]['news_id'];?>" title="Simple post" class="readmore">আরও পড়ুন</a>
                </div>
            </div>
            <?php $i=1; foreach($kolkata as $klk) { ?>
            <div class="mag-box-small half-right ">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="#" data-x-swap-content-target="kolkata-main" data-post-id="1000"><img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $klk['news_image'];?>" class="source-image" alt=""></a>

                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $klk['news_id'];?>" id="kol_news1"><?php echo $klk['name'];?></a></h3>
                    <div class="magz-meta"><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $klk['date']);?></div>
                    <?php echo mb_substr($klk['sdesc'],0,50,'UTF-8').'..';?></div>
            </div>
            <?php } ?>
            
           
            
            
        </div>
        <div class="pub468x60"><?php if($middle1[0]['activate'] == 1){?><a href="<?php echo $middle1[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $middle1[0]['sp_image'];?>"></a><?php } ?></div>
        <div class="widget widget-magazine">

            <h2 class="widget-magazine-line"><div class="widget-magmag-title"><a href="<?php echo base_url();?>index.php/news/watch/state-news">রাজ্য</a></div></h2>
            <div id="rajjo-main" class="block-big half-left"> <!-- Target -->
                <div class="magmg-image">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $state1[0]['news_id'];?>" title=""><img width="300" height="300" src="<?php echo base_url();?>news/<?php echo $state1[0]['news_image'];?>" class="overlay wp-post-image" alt=""></a>
                    <div class="mag-super-title" style="left: 0px; top: 70%;">
                        <h3><a href="<?php echo base_url();?>index.php/news/post/<?php echo $state1[0]['news_id'];?>" title="Simple post"><?php echo $state1[0]['name'];?></a></h3>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="mag-super-desc">
                    <p><?php echo $state1[0]['sdesc'];?></p>
                    <a href="<?php echo base_url();?>index.php/news/post/<?php echo $state1[0]['news_id'];?>" title="Simple post" class="readmore">আরও পড়ুন</a>
                </div>
            </div>
            <?php $i=1; foreach($state as $state_news) { ?>
            <div class="mag-box-small half-right <?php //if ($i == 1) echo 'current'; else echo '';?>">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $state_news['news_id'];?>" data-x-swap-content-target="rajjo-main" data-post-id="<?php echo $state_news['news_id'];?>"><img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $state_news['news_image'];?>" class="source-image" alt=""></a>

                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $state_news['news_id'];?>"  data-x-swap-content-target="rajjo-main" data-post-id="<?php echo $state_news['news_id'];?>"><?php echo $state_news['name'];?></a></h3>
                    <div class="magz-meta"><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $state_news['date']);?></div>
                    <?php echo mb_substr($state_news['sdesc'],0,50,'UTF-8').'..';?></div>
            </div>
            <?php $i++; } ?>
        </div>
        <div class="pub468x60"><?php if($middle2[0]['activate'] == 1){?><a href="<?php echo $middle2[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $middle2[0]['sp_image'];?>"></a><?php } ?></div>
        <div class="widget widget-magazine">

            <h2 class="widget-magazine-line"><div class="widget-magmag-title"><a href="<?php echo base_url();?>index.php/news/watch/country-news">দেশ</a></div></h2>
            <div id="desh-main" class="block-big half-left"> <!-- Target -->
                <div class="magmg-image">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $national1[0]['news_id'];?>" title=""><img width="300" height="300" src="<?php echo base_url();?>news/<?php echo $national1[0]['news_image'];?>" class="overlay wp-post-image" alt=""></a>
                    <div class="mag-super-title" style="left: 0px; top: 70%;">
                        <h3><a href="<?php echo base_url();?>index.php/news/post/<?php echo $national1[0]['news_id'];?>" title="Simple post"><?php echo $national1[0]['name'];?></a></h3>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="mag-super-desc">
                    <p><?php echo $national1[0]['sdesc'];?></p>
                    <a href="<?php echo base_url();?>index.php/news/post/<?php echo $national1[0]['news_id'];?>" title="Simple post" class="readmore">আরও পড়ুন</a>
                </div>
            </div>
            <?php $k=1; foreach($national as $nation_news) { ?>
            <div class="mag-box-small half-right <?php //if ($k == 1) echo 'current'; else echo '';?>">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $nation_news['news_id'];?>" data-x-swap-content-target="desh-main" data-post-id="<?php echo $nation_news['news_id'];?>"><img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $nation_news['news_image'];?>" class="source-image" alt=""></a>

                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $nation_news['news_id'];?>"  data-x-swap-content-target="desh-main" data-post-id="<?php echo $nation_news['news_id'];?>"><?php echo $nation_news['name'];?></a></h3>
                    <div class="magz-meta"><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $nation_news['date']);?></div>
                    <?php echo mb_substr($nation_news['sdesc'],0,50,'UTF-8').'..';?></div>
            </div>
            <?php $k++; } ?>
            
            
        </div>
        <div class="pub468x60"><?php if($middle3[0]['activate'] == 1){?><a href="<?php echo $middle3[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $middle3[0]['sp_image'];?>"></a><?php }?></div>
        <div class="widget widget-magazine">

            <h2 class="widget-magazine-line"><div class="widget-magmag-title"><a href="<?php echo base_url();?>index.php/news/watch/world-news">বিশ্ব</a></div></h2>
            <div id="bisso-main" class="block-big half-left"> <!-- Target -->
                <div class="magmg-image">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $international1[0]['news_id'];?>" title=""><img width="300" height="300" src="<?php echo base_url();?>news/<?php echo $international1[0]['news_image'];?>" class="overlay wp-post-image" alt=""></a>
                    <div class="mag-super-title" style="left: 0px; top: 70%;">
                        <h3><a href="<?php echo base_url();?>index.php/news/post/<?php echo $international1[0]['news_id'];?>" title="Simple post"><?php echo $international1[0]['name'];?></a></h3>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="mag-super-desc">
                    <p><?php echo $international1[0]['sdesc'];?></p>
                    <a href="<?php echo base_url();?>index.php/news/post/<?php echo $international1[0]['news_id'];?>" title="Simple post" class="readmore">আরও পড়ুন</a>
                </div>
            </div>
             <?php $l=1; foreach($international as $international_news) { ?>
            <div class="mag-box-small half-right <?php //if ($l == 1) echo 'current'; else echo '';?>">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $international_news['news_id'];?>" data-x-swap-content-target="bisso-main" data-post-id="<?php echo $international_news['news_id'];?>"><img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $international_news['news_image'];?>" class="source-image" alt=""></a>

                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $international_news['news_id'];?>"  data-x-swap-content-target="bisso-main" data-post-id="<?php echo $international_news['news_id'];?>"><?php echo $international_news['name'];?></a></h3>
                    <div class="magz-meta"><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $international_news['date']);?></div>
                   <?php echo mb_substr($international_news['sdesc'],0,50,'UTF-8').'..';?></div>
            </div>
            <?php $l++; } ?>
            
        </div>


        <div class="widget-magazine-line"><div class="widget-magmag-title">গ্যালারি<div class="prne">
                    <a href="#" class="prev"><img src="http://bekero.com/ambro3/wp-content/themes/ambro/images/prev.png" ></a>
                    <a href="#" class="next"><img src="http://bekero.com/ambro3/wp-content/themes/ambro/images/next.png" ></a>
                </div></div>
        </div>

        <div class="carousel">
            <ul>
            <?php foreach($album as $album_data) {?>
                <li>
                    <div class="magmg-image">
                        <a class="link-format-icon" href="<?php echo base_url();?>index.php/gallery/galleryImages/<?php echo $album_data['aid'];?>"><img width="202" height="160" src="<?php echo base_url();?>album/<?php echo $album_data['cover_image'];?>" class="overlay wp-post-image" /></a>
                        <div class="mag-super-title">
                            <h3><a href="<?php echo base_url();?>index.php/gallery/galleryImages/<?php echo $album_data['aid'];?>"><?php echo mb_substr($album_data['cover_title'],0,30,'UTF-8').'..';?></a></h3>
                            <div class="clear"></div>
                        </div>
                    </div>
                </li>
                <?php } ?>
                
            </ul>
        </div><br>
        <div class="clear"></div>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".carousel").jCarouselLite({
                    btnNext: ".next",
                    btnPrev: ".prev",
                    auto: 800,
                    speed: 600
                });
            });
        </script>
    </div>
    <!-- RIGHT SIDEBAR -->
    <div class="ambrogrid_4 sidebar">
        <div class="widget">
            <div class="widget-lbg">
                <div class="widget-title">লাইভ টিভি</div>
            </div>
            <div style="margin-top: -15px; margin-bottom: 15px">Please <a target="_blank" href="http://www.thewindowsclub.com/enable-adobe-flash-player">Enable Flash Player</a> to view the <strong>LIVE TV</strong>.</div>
            <!--<video controls style="width: 100%">
                <source src="<?php echo base_url();?>assets/site/dummy/IndustrySmokeFire.mp4"/>
            </video>-->
			<div id="myElement"></div>
        </div>
        <div id="socialbox-4" class="widget socialbox">
            <!-- SocialBox Widget -->
            <div class="socialbox-widget socialbox-style-colorful">
                <div class="fb-page" data-href="https://www.facebook.com/banglatimechannel" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/banglatimetv"><a href="https://www.facebook.com/banglatimetv">BanglatimeTV</a></blockquote></div></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
            </div>
            <div class="socialbox-widget socialbox-style-colorful" style="margin-top: 20px">
                <a class="twitter-timeline" href="https://twitter.com/BanglaTimeTV" data-widget-id="672738475980947459">Tweets by @BanglaTimeTV</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>

            <!-- End SocialBox Widget -->
        </div>
        <div class="widget">
            <div class="widget-lbg">
                <div class="widget-title">
                    আবহাওয়া
                </div>
            </div>
            <div class="mag-box-small no-margin">
                <a href="http://www.accuweather.com/en/in/kolkata/206690/weather-forecast/206690" class="aw-widget-legal">
                    <!--
                    By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
                    -->
                </a>
                <div id="awcc1444310143953" class="aw-widget-current"  data-locationkey="206690" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1444310143953"></div>
                <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
            </div>
        </div>
        <div class="widget">    <!-- BEGIN WIDGET -->
            <div class="widget-lbg">
                <div class="widget-title"><a href="<?php echo base_url();?>index.php/news/watch/sports-news">খেলা</a></div>
            </div>

            
            <?php foreach($sports as $sports_news) {?>
            <div class="mag-box-small no-margin">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $sports_news['news_id'];?>" title=''>
                        <img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $sports_news['news_image'];?>" class="overlay wp-post-image"
                             alt="5519004023_e9579402c1_z"/>
                    </a>
                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $sports_news['news_id'];?>" title=''><?php echo $sports_news['name'];?></a></h3>
                    <?php echo mb_substr($sports_news['desc'],0,60,'UTF-8').'..';?>
                </div>
            </div>
            <?php } ?>
            

        </div>
        <div class="widget">    <!-- BEGIN WIDGET -->
            <div class="widget-lbg">
                <div class="widget-title"><a href="<?php echo base_url();?>index.php/news/watch/entertainment-news">বিনোদন</a></div>
            </div>
            <?php foreach($entertainment as $entertainment_news) {?>
            <div class="mag-box-small no-margin">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $entertainment_news['news_id'];?>" title=''>
                        <img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $entertainment_news['news_image'];?>" class="overlay wp-post-image"
                             alt="5519004023_e9579402c1_z"/>
                    </a>
                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $entertainment_news['news_id'];?>" title=''><?php echo $entertainment_news['name'];?></a></h3>
                    <?php echo mb_substr($entertainment_news['desc'],0,60,'UTF-8').'..';?>
                </div>
            </div>
            <?php } ?>
            

        </div>
        <div class="widget">    <!-- BEGIN WIDGET -->
            <div class="widget-lbg">
                <div class="widget-title"><a href="<?php echo base_url();?>index.php/news/watch/life-style-news">লাইফ স্টাইল</a></div>
            </div>
            <?php foreach($lifeStyle as $lifeStyle_news) {?>
            <div class="mag-box-small no-margin">
                <div class="magmg-image small">
                    <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $lifeStyle_news['news_id'];?>" title=''>
                        <img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $lifeStyle_news['news_image'];?>" class="overlay wp-post-image"
                             alt="5519004023_e9579402c1_z"/>
                    </a>
                </div>
                <div class="small-desc">
                    <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $lifeStyle_news['news_id'];?>" title=''><?php echo $lifeStyle_news['name'];?></a></h3>
                    <?php echo mb_substr($lifeStyle_news['desc'],0,60,'UTF-8').'..';?>
                </div>
            </div>
            <?php } ?>
            
        </div>

        <div class="widget">    <!-- BEGIN WIDGET -->
            <div class="widget-lbg">
                <div class="widget-title"><a href="<?php echo base_url();?>index.php/news/watch/business-news">ব্যবসা</a></div>
            </div>
            <?php foreach($business as $business_news) {?>
                <div class="mag-box-small no-margin">
                    <div class="magmg-image small">
                        <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $business_news['news_id'];?>" title=''>
                            <img width="80" height="80" src="<?php echo base_url();?>news/<?php echo $business_news['news_image'];?>" class="overlay wp-post-image"
                                 alt="5519004023_e9579402c1_z"/>
                        </a>
                    </div>
                    <div class="small-desc">
                        <h3 class="desc-title"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $business_news['news_id'];?>" title=''><?php echo $business_news['name'];?></a></h3>
                        <?php echo mb_substr($business_news['desc'],0,60,'UTF-8').'..';?>
                    </div>
                </div>
            <?php } ?>


        </div>

        <div class="widget">
            <div class="widget-lbg">
                <div class="widget-title">
                    ক্রিকেট স্কোর
                </div>
            </div>
            <div class="mag-box-small no-margin">
                <script> app="www.cricwaves.com"; mo="Z_W"; nt="n"; Width='300px'; Height='170px'; co ="ind"; ad="1"; </script><script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>
            </div>
        </div>
        <div class="widget widget-magazine clearfix">
            <div class="box clearfix">
                <div class="widget-magazine-line">
                    <div class="widget-magmag-title"><a href="<?php echo base_url();?>index.php/news/watch/editorial-news">সম্পাদকীয়</a></div>
                </div>
                <div>
                <?php if(!empty($editor[0]['news_image'])) {?>
                    <img src="<?php echo base_url();?>news/<?php echo $editor[0]['news_image'];?>" width="300" height="300" style="display: block; margin: 0 auto 15px auto" alt="">
                    <?php } ?>
                    <ul class="sampadakio">
                        <?php foreach($editor as $edit_news) { ?>
                            <li><a href="<?php echo base_url();?>index.php/news/post/<?php echo $edit_news['news_id'];?>"><?php echo mb_substr($edit_news['name'],0,50,'UTF-8').'..';?></a></li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include('_sidebar.php'); ?>
</div>


<!-- FOOTER WIDGET -->

<?php include('_footer.php'); ?>

