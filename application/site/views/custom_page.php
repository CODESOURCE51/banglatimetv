
<?php include('_header.php'); 
//print_r($about);
$page_title = $about[0]['category'];

switch ($page_title) {
    case "About":
        $title = "About Us";
        $content = $about[0]['about-us'];
        break;
    case "Privacy":
        $title = "Privacy Policy";
        $content = $about[0]['our-policy'];
        break;
    case "Career":
       $title = "Career";
        $content = $about[0]['our-career'];
        break;
        case "Advers":
       $title = "Advertisement";
        $content = $about[0]['our-advers'];
        break;
        case "Disclaimer":
       $title = "Disclaimer";
        $content = $about[0]['our-disclaim'];
        break;
        case "Terms":
       $title = "Service Terms";
        $content = $about[0]['our-info'];
        break;    
    default:
       $title = "BANGLATIMETV";
}
?>
<!-- CONTENT -->
<div class="content row">
    <!-- INDEX PAGE -->
    <div class="ambrogrid_10 single-post">
       <!--  <div class="breadcrumbs">
            <a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a> &Gt; <a href="<?php echo base_url().'index.php/news/watch/'.$p_c_name[0]['category_slug'];?>"><?php echo $p_c_name[0]['service'];?></a>
        </div> -->

        <div class="single-title">
            <div class="clear"></div>
            <!-- <div class="single-info">
                <span class="single-author"><?php echo $post_data[0]['reporter_name'];?></span>,
                <span class="single-date"><strong> প্রকাশিত : </strong><span><?php echo $convertedDATE = str_replace($engDATE, $bangDATE, $post_data[0]['date']);?></span></span>
            </div> -->
             <img src="<?php echo base_url(); ?>sponsor/<?php echo $budget[0]['sp_image'];?>" width="100%" alt="">
            <div class="clear"></div>
        </div>
        <?php if(!empty($budget)) { foreach($budget as $Bdata) { ?>
        <div class="single-content">
        <h2><?php echo $Bdata['ctitle'];?></h2>
           
            <p><?php echo $Bdata['contents'];?></p>
        </div>
       <?php } } else echo 'No Data Found';?>
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
