<?php include('_header.php'); ?>

<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <?php if($news_num > 0) { ?>
    <div class="ambrogrid_10">
        <div class="widget-lbg">
            <div class="widget-title"><?php echo $n_name;?></div>
        </div>
        <?php foreach($news_data as $n_data) {?>
        <a href="<?php echo base_url();?>index.php/news/post/<?php echo $n_data['news_id'];?>" class="post-tile">
            <img src="<?php echo base_url();?>news/<?php echo $n_data['news_image'];?>" alt="">
            <h5><?php echo $n_data['name'];?></h5>
            <p> <?php echo mb_substr($n_data['desc'],0,400,'UTF-8').'..';?></p>
            <div title="" class="readmorebox">আরো পড়ুন</div>
        </a>
        <?php } ?>
        <?php echo $res;?>
        
    </div>
<?php } else { ?>
    <div class="ambrogrid_10">
        <div class="widget-lbg">
            <div class="widget-title">You searched for "<?php echo $search_name;?>"</div>
        </div>
       
           
            <h5>We do not found any information related to your search</h5>
            <p>Please search another related news</p>
            
       
        
    </div>
    <?php } ?>
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
