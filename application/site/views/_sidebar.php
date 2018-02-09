<div class="ambrogrid_41 sidebar clearfix">
    <!--<div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <a href="<?php echo base_url();?>index.php/Index/PujaSpecial"><img src="<?php echo base_url(); ?>assets/site/images/shyama_maa_2016.jpg" width="100%" alt=""></a>
        </div>
    </div>
    <div style="height: 15px"></div>-->
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <div class="widget-magazine-line">
                <div class="widget-magmag-title">সাম্প্রতিক খবর</div>
            </div>


            <!-- START FEATURED -->
            <div id="top-featured">
                <ul class="featured_posts" style="display: table">
                <?php foreach($current_news as $recent_news) { ?>
                    <li>
                        <div class="thumbnail">
                            <a class="link-format-icon" href="<?php echo base_url();?>index.php/news/post/<?php echo $recent_news['news_id'];?>"
                               title=''><img src="<?php echo base_url();?>news/<?php echo $recent_news['news_image'];?>" class="attachment-boxy wp-post-image" alt="4521149575_5f6c1d08a7_z"/></a>
                        </div>
                        <div class="ftitle">
                            <a href="<?php echo base_url();?>index.php/news/post/<?php echo $recent_news['news_id'];?>" title=''><?php echo $recent_news['name'];?></a>
                        </div>
                        <div class="meta">
                            <p class="date"><?php echo mb_substr($recent_news['desc'],0,100,'UTF-8').'..';?><br/><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $recent_news['date']);?></p>

                            <div class="plus"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $recent_news['news_id'];?>" title='' class="readmorebox">আরও পড়ুন</a>
                                </div>

                        </div>
                    </li>
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <div style="height: 15px"></div>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <div class="widget-magazine-line">
                <div class="widget-magmag-title"><a href="#">শেয়ার বাজার</a></div>
            </div>


            <!-- START FEATURED -->
            <iframe id="moneywiz_widget" name="moneywiz_widget" src="http://money.rediff.com/widget/moneywizwidget" scrolling="no" frameborder="0" marginHeight="0" marginWidth="0" style="width:212px; height:310px; margin: 0 auto; margin-left: -6px"></iframe>

        </div>
    </div>
   <!--  <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <div class="widget-magazine-line">
                <div class="widget-magmag-title"><a href="#">মুদ্রা পরির্বতন হার</a></div>
            </div>


            <!-- START FEATURED -->

            <!-- <iframe frameborder="0" scrolling="no" height="652" width="200" allowtransparency="true" marginwidth="0" marginheight="0" style="overflow-x: hidden" src="http://fxrates.in.forexprostools.com/index_single_crosses.php?currency=29&header-text-color=%23FFFFFF&curr-name-color=%230059b0&inner-text-color=%23000000&green-text-color=%232A8215&green-background=%23B7F4C2&red-text-color=%23DC0001&red-background=%23FFE2E2&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&bid=hide;&ask=hide;&last=hide&open=hide&high=show&low=show&change=hide&change_in_percents=hide&last_update=hide"></iframe>
        </div>
    </div> -->
    <div style="height: 15px"></div>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <div class="widget-magazine-line">
                <div class="widget-magmag-title"><a href="#">আজ</a></div>
            </div>


            <!-- START FEATURED -->
            <a href="#">
                <img src="<?php echo base_url();?>news/<?php echo $today[0]['news_image'];?>" alt="">
                <p><?php echo $today[0]['description'];?></p>
            </a>

        </div>
    </div>
    <div style="height: 15px"></div>
    <?php if($page_name == 'index') { ?>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <?php if($side1[0]['activate'] == 1){?><a href="<?php echo $side1[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $side1[0]['sp_image'];?>"></a><?php } ?>
        </div>
    </div>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <?php if($side2[0]['activate'] == 1){?><a href="<?php echo $side2[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $side2[0]['sp_image'];?>"></a><?php } ?>
        </div>
    </div>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <?php if($side3[0]['activate'] == 1){?><a href="<?php echo $side3[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $side3[0]['sp_image'];?>"></a></a><?php } ?>
        </div>
    </div>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
           <?php if($side4[0]['activate'] == 1){?> <a href="<?php echo $side4[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $side4[0]['sp_image'];?>"></a><?php } ?>
        </div>
    </div>
    <div class="widget widget-magazine clearfix">
        <div class="box clearfix">
            <?php if($side5[0]['activate'] == 1){?><a href="<?php echo $side5[0]['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $side5[0]['sp_image'];?>"></a><?php } ?>
        </div>
    </div>
<?php } ?>
</div>