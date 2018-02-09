<?php include('_header.php'); ?>
<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_10 single-post">
        <div class="breadcrumbs">
            <a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a> &Gt; <a href="#">ভিডিও গ্যালারি</a>
        </div>
        <div class="single-title">
            <h2><?php echo $gallery[0]['cover_title'];?></h2>
            <div class="clear"></div>
            <div class="single-info">
                <span class="single-date"><strong> প্রকাশিত : </strong><span><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $gallery[0]['date']);?></span></span>
            </div>
            <div class="clear"></div>
        </div>
        <div class="single-content">
            <p><?php echo $gallery[0]['cover_desc'];?></p>
        </div>
        <div id="lightgallery">
        <?php foreach($service_data as $album_data) { ?>
            <a href="https://www.youtube.com/embed/<?php echo $album_data['video'];?>">
                <img src="http://img.youtube.com/vi/<?php echo $album_data['video'];?>/mqdefault.jpg" alt="">
            </a>
            <?php } ?>
           
        </div>
        
      
        <!-- <div class="single-nav">
        
            <div class="nav-left"><a href="<?php echo base_url();?>index.php/video/videoDetails/<?php echo $previous[0]['news_id'];?>" rel="prev">&lt;&lt; পূর্ববর্তী গ্যালারি</a> </div>
            
            <div class="nav-right"><a href="<?php echo base_url();?>index.php/video/videoDetails/<?php echo $next[0]['news_id'];?>" rel="next">পরবর্তী গ্যালারি &gt;&gt;</a></div>
        </div> -->
        <div class="pagination"><?php echo $res;?></div>
        <div class="widget-magazine-line"><div class="widget-magmag-title">এই ভিডিও গ্যালারি শেয়ার করুন</div> </div>
        <div class="post-share-box">
            <ul>
                <li class="facebook">
                    <a title="Facebook" class="tooltip" href="http://www.facebook.com/sharer.php?u=http://banglatimetv.com<?php echo $_SERVER['PHP_SELF']; ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"></a>
                </li>

                <li class="twitter">
                    <a title="Twitter" class="tooltip" href="https://twitter.com/intent/tweet?original_referer=http://banglatimetv.com/&ref_src=twsrc%5Etfw&text=Check this out: http://banglatimetv.com<?php echo $_SERVER['PHP_SELF']; ?>&tw_p=tweetbutton&url=http://banglatimetv.com<?php echo $_SERVER['PHP_SELF']; ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"></a>
                </li>

                <li class="google">
                    <a title="Google +1" class="tooltip" href="http://google.com/bookmarks/mark?op=edit&amp;bkmk=http://banglatimestv.com<?php echo $_SERVER['PHP_SELF']; ?>&amp;title=NEWS+TITLE" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"></a>
                </li>
            </ul>
        </div>
    </div>
    
    <?php include('_sidebar.php'); ?>
</div>


<!-- FOOTER WIDGET -->

<?php include('_footer.php'); ?>

