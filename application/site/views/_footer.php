<div class="footer-widget-block row">
    <div id="wrapper-footer-on" style="margin-top: 0px;">

        <!-- WIDGET 1 -->
        <div class="ambrogrid_3">
            <div id="tag_cloud-2" class="footer-widget widget_tag_cloud"><h3 class="widget-footer-line"><span
                        class="footer-widget-title">ট্যাগ ক্লাউড</span></h3>

                <div class="tagcloud">
                    <ul class='wp-tag-cloud'>
                    <?php foreach($search_tags as $stags) {?>
                        <li><a href='<?php echo base_url();?>index.php/News/search_tag/<?php echo $stags["search_tags"];?>' class='tag-link-10' title='5 topics'
                               style='font-size: 12.9px;'><?php echo $stags["search_tags"];?></a></li>
                        <?php } ?>       
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- WIDGET 3 -->
        <div class="ambrogrid_3">
            <div id="text-2" class="footer-widget widget_text"><h3 class="widget-footer-line"><span
                        class="footer-widget-title">আমাদের সম্পর্কে</span></h3>

                <div class="textwidget"><?php echo mb_substr($footer_about[0]['about-us'],0,200,'UTF-8').'..';?>
               <a href="http://banglatimetv.com/index.php/Page/view/About" title="Simple post">আরও পড়ুন</a> </div>
            </div>
        </div>
        <!-- WIDGET 4 -->
        <div class="ambrogrid_3">
            <div id="whos-online-2" class="footer-widget whos_online"><h3 class="widget-footer-line"><span
                        class="footer-widget-title">বাংলা টাইম</span></h3>

                <div class="grid-sidebar">
                    <div class="online-users">
                        <a href="<?php echo base_url();?>index.php/Page/view/About">About Us</a><br>
                        <a href="<?php echo base_url();?>index.php/Page/view/Advers">Advertisement</a><br>
                        <a href="<?php echo base_url();?>index.php/Page/view/Career">Career</a><br>
                        <a href="<?php echo base_url();?>index.php/Page/Contact">Feedback</a><br>
                        <a href="<?php echo base_url();?>index.php/Page/Contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- WIDGET 4 -->
        <div class="ambrogrid_3">
            <div id="whos-online-3" class="footer-widget whos_online"><h3 class="widget-footer-line"><span
                        class="footer-widget-title">অন্যান্য লিংক</span></h3>

                <div class="grid-sidebar">
                    <div class="online-users">
                       <!--  <a href="<?php echo base_url();?>index.php/Page/view/Disclaimer">Disclaimer</a><br> -->
                        <a href="<?php echo base_url();?>index.php/Page/view/Terms">Service Terms</a><br>
                        <a href="<?php echo base_url();?>index.php/Page/view/Privacy">Privacy Statement</a><br>
                       <!--  <a href="#"><img height="40" style="margin-top: 5px" src="<?php echo base_url();?>assets/site/images/playstore.png"
                                         alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer footrow">
        <!-- CREDITS TEXT -->
        <div class="credits">
            &COPY; Bangla Time TV &mdash; a unit of Zuari Entertainment PVT. LTD. All rights reserved. Designed By <a href="http://projukti.info" target="_blank">Projukti</a>.
        </div>
        <!-- SOCIAL ICONS -->
        <div class="social-footer-wrap">
            <div class="social-footer">
                <ul>
                    <!--<li class="social facebook"><a target="new" href="#"></a></li>-->
                    <li class="social twitter"><a target="new" href="https://twitter.com/BanglaTimeTV"></a></li>
                    <li class="social youtube"><a target="new" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/jquery.refineslide.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/scrolltopcontrol.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/jcarousellite.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="<?php echo base_url();?>assets/site/plugins/lightGallery/js/lightgallery-all.min.js"></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/hoverIntent.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/superfish.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/supersubs.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/underscore.js'></script>


<script>
//    $(".vid-thumbs > a").click(function () {
//        console.log($(this).attr('href'));
//        flowplayer().play($(this).attr('href'));
//        return false;
//    });

    $("*[data-swap-content-target]").click(function(e){
        e.preventDefault();
        $this = $(this);
        $target = $("#" + $this.attr('data-swap-content-target'));
        $postID = $this.attr('data-post-id');
        $link = $this.attr('href');
        $img=$this.closest('.mag-box-small').find('img').attr('src');

        $this.closest('.mag-box-small').siblings('.mag-box-small').removeClass('current');
        $this.closest('.mag-box-small').addClass('current');
        $.ajax({
    type:'POST',
    url:'search_news.php',
    data:'news_id='+$postID,
    success: function(data){
      var res = data.split("="); 
       
      $target.find('a').attr('href',$link);
        $target.find('img').attr('src',$img);
        $target.find('h3 a').html(res[0]);
        $target.find('p').html(res[1]);
     

    }

});
        
    });

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: '<?php echo $videoss[0][video];?>',
    });
}
function get_kolkata(n_id) {
    //alert('Hi');
    
    $.ajax({
    type:'POST',
    url:'search_news.php',
    data:'news_id='+n_id,
    success: function(data){
      var res = data.split("="); 
       
      var img = '<?php echo base_url();?>news/'+res[2];
      //alert(img);
      $('.news_desc').html(res[1]);
      $('.news_title').html(res[0]);
      $('.news_image').attr('src',img);

    }

});
}

jwplayer("\x6D\x79\x45\x6C\x65\x6D\x65\x6E\x74")["\x73\x65\x74\x75\x70"]({width:"100%",aspectratio: "32:19",accelerated:"\x74\x72\x75\x65",border:"\x30",autostart:"\x74\x72\x75\x65",autoBuffering:"\x74\x72\x75\x65",startparam:"\x65\x63\x5F\x73\x65\x65\x6B",androidhls:"\x74\x72\x75\x65",skin:"\x62\x65\x6B\x6C\x65",stretching:"\x65\x78\x61\x63\x74\x66\x69\x74",ga:{idstring:"\x74\x69\x74\x6C\x65",trackingobject:"\x70\x61\x67\x65\x54\x72\x61\x63\x6B\x65\x72",label:"\x6D\x65\x64\x69\x61\x69\x64"},playlist:[{sources:[{file:"\x72\x74\x6D\x70\x3A\x2F\x2F\x65\x64\x67\x65\x2D\x69\x6E\x64\x2E\x69\x6E\x61\x70\x63\x64\x6E\x2E\x69\x6E\x3A\x31\x39\x33\x35\x2F\x62\x65\x72\x72\x79\x31\x2F\x73\x6D\x61\x72\x74\x73\x32\x2E\x73\x74\x72\x65\x61\x6D\x5F\x61\x61\x63"},{file:"\x68\x74\x74\x70\x3A\x2F\x2F\x65\x64\x67\x65\x2D\x69\x6E\x64\x2E\x69\x6E\x61\x70\x63\x64\x6E\x2E\x69\x6E\x3A\x31\x39\x33\x35\x2F\x62\x65\x72\x72\x79\x31\x2F\x73\x6D\x61\x72\x74\x73\x32\x2E\x73\x74\x72\x65\x61\x6D\x5F\x61\x61\x63\x2F\x70\x6C\x61\x79\x6C\x69\x73\x74\x2E\x6D\x33\x75\x38"}]}],primary:"\x66\x6C\x61\x73\x68"});
</script>
</body>
</html>