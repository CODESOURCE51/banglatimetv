
<?php include('_header.php'); ?>
<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_10 single-post">
        <div class="breadcrumbs">
            <a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a> &Gt; <a href="<?php echo base_url().'index.php/news/watch/'.$p_c_name[0]['category_slug'];?>"><?php echo $p_c_name[0]['service'];?></a>
        </div>

        <div class="single-title">
            <h2><?php echo $post_data[0]['name'];?></h2>
            <div class="clear"></div>
            <div class="single-info">
                <span class="single-author"><?php echo $post_data[0]['reporter_name'];?></span>,
                <span class="single-date"><strong> প্রকাশিত : </strong><span><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $post_data[0]['date']);?></span></span>
            </div>
            <div class="clear"></div>
        </div>
        <div class="single-content">
            <img src="<?php echo base_url();?>news/<?php echo $post_data[0]['news_image'];?>" alt="">
            <p><?php echo $post_data[0]['desc'];?></p>
        </div>
        <div class="single-nav">
            <?php if($previous[0]['news_id'] != ''){?><div class="nav-left"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $previous[0]['news_id'];?>" rel="prev">&lt;&lt; পূর্ববর্তী সংবাদ</a> </div><?php }?>
            <?php if($next[0]['news_id'] != ''){?><div class="nav-right"><a href="<?php echo base_url();?>index.php/news/post/<?php echo $next[0]['news_id'];?>" rel="next">পরবর্তী সংবাদ &gt;&gt;</a></div><?php }?>
        </div>
        <div class="widget-magazine-line"><div class="widget-magmag-title">এই খবর শেয়ার করুন</div> </div>
        <div class="post-share-box">
            <ul>
                <li class="facebook">
                    <a title="Facebook" class="tooltip" href="http://www.facebook.com/sharer.php?u=<?php echo base_url();?>news/<?php echo $post_data[0]['news_image'];?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"></a>
                </li>

                <li class="twitter">
                    <a title="Twitter" class="tooltip" href="https://twitter.com/intent/tweet?original_referer=<?php echo base_url();?>news/<?php echo $post_data[0]['news_image'];?>&ref_src=<?php echo $post_data[0]['name'];?>&text=Check this out: <?php echo $post_data[0]['name'];?>&tw_p=tweetbutton&url=<?php echo base_url();?>index.php/news/post/<?php echo $post_data[0]['news_id'];?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"></a>
                </li>

                <li class="google">
                    <a title="Google +1" class="tooltip" href="http://google.com/bookmarks/mark?op=edit&amp;bkmk=<?php echo base_url();?>index.php/news/post/<?php echo $post_data[0]['news_id'];?>&amp;title=<?php echo $post_data[0]['name'];?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"></a>
                </li>
            </ul>
        </div>
    </div>
    <?php include('_sidebar.php'); ?>
</div>



<script>
    $(".vid-thumbs > a").click(function () {
        console.log($(this).attr('href'));
        flowplayer().play($(this).attr('href'));
        return false;
    });
</script>
<!-- FOOTER WIDGET -->

<?php include('_footer.php'); ?>
