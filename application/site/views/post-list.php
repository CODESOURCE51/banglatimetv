<?php include('_header.php'); ?>

<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_10">
        <div class="widget-lbg">
            <div class="widget-title"><?php echo $n_name;?></div>
        </div>
        <?php foreach($news_data as $n_data) {?>
        <a href="<?php echo base_url();?>index.php/news/post/<?php echo $n_data['news_id'];?>" class="post-tile">
            <img src="<?php echo base_url();?>news/<?php echo $n_data['news_image'];?>" alt="">
            <h5><?php echo $n_data['name'];?></h5>
            <?php if(empty($n_data['in_short'])){?>
            <p> <?php echo mb_substr($n_data['desc'],0,400,'UTF-8').'..';?></p>
            <?php } else {?>
             <p> <?php echo $n_data['in_short'];?></p>
             <?php } ?>
            <div title="" class="readmorebox">আরও পড়ুন</div>
        </a>
        <?php } ?>
        <?php echo $res;?>
        
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
