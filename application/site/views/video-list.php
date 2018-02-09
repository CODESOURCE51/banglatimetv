<?php include('_header.php'); ?>
<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_10">
        <div class="widget-lbg">
            <div class="widget-title">ভিডিও সূচী</div>
        </div>
        <?php if (!empty($service_data)) { foreach($service_data as $s_data) { ?>
        <a href="<?php echo base_url();?>index.php/video/videoDetails/<?php echo $s_data['v_album_id'];?>" class="gallery-tile">
            <img src="<?php echo base_url();?>video_album/<?php echo $s_data['cover_image'];?>" alt="">
            <div class="gallery-tile-overlay">
                <h2><?php echo $s_data['cover_title'];?></h2>
                <p> <?php echo mb_substr($s_data['cover_desc'],0,60,'UTF-8').'..';?></p>
            </div>
        </a>
        <?php }//if($count > 7) { ?>
        <div class="pagination"><?php echo $res;}?></div>
        
    </div>
    <?php include('_sidebar.php'); ?>
</div>


<!-- FOOTER WIDGET -->
<script>
    $(".vid-thumbs > a").click(function () {
        console.log($(this).attr('href'));
        flowplayer().play($(this).attr('href'));
        return false;
    });
</script>
<?php include('_footer.php'); ?>


