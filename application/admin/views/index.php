<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>

<div class=" row">
<div class="col-md-3 col-sm-3 col-xs-6">
<a data-toggle="tooltip" title="" class="well top-block" href="<?php echo base_url();?>admin.php/Dashboard/multi_news" data-original-title="6 new members.">
<i class="glyphicon glyphicon-star blue"></i>
<div>Total News</div>
<div><?php echo $News;?></div>
<span class="label label-danger">MANAGE</span>
</a>
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
<a data-toggle="tooltip" title="" class="well top-block" href="<?php echo base_url();?>admin.php/Dashboard/video_list" data-original-title="Home 4">
<i class="glyphicon glyphicon-star green"></i>
<div>Total videos</div>
<div><?php echo $Video;?></div>
<span class="label label-danger">MANAGE</span>
<span class="notification green"><?php echo $VideoHome;?> in Home Page</span>
</a>
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
<a data-toggle="tooltip" title="" class="well top-block" href="<?php echo base_url();?>admin.php/Dashboard/album_list" data-original-title="$34 new sales.">
<i class="glyphicon glyphicon-star yellow"></i>
<div>Total Albums</div>
<div><?php echo $album;?></div>
<span class="label label-danger">MANAGE</span>
<span class="notification yellow"><?php echo $albumimg;?> Images</span>
</a>
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
<a data-toggle="tooltip" title="" class="well top-block" href="#" data-original-title="12 new messages.">
<i class="glyphicon glyphicon-star red"></i>
<div>Sliders</div>
<div><?php echo $NewsSlider;?></div>

</a>
</div>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                  
<center><img src="http://banglatimetv.com/assets/site/images/logo.png" width="250" height="200" /></center>
                    
                </div>
                <!-- Ads, you can remove these -->
                <div class="col-lg-5 col-md-12 hidden-xs center-text">
                    
                </div>

                <div class="col-lg-5 col-md-12 visible-xs center-text">
                    
                </div>
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>

