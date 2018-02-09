<?php require('header.php'); ?>

    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Videos</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
       

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Video Category</th>
        <th>Video</th>
        <th>Video Thumbnails</th>
       <th>showed in Home Page</th>
        
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
     
    <?php foreach ($video as $value) { ?>
    <tr>
        <td class="center"><?php echo $value['cover_title'];?></td>
        <td><iframe width="300" height="160" src="https://www.youtube.com/embed/<?php echo $value['video'];?>" frameborder="0" allowfullscreen></iframe></td>
        <td class="center"><img src="http://i1.ytimg.com/vi/<?php echo $value['video'];?>/1.jpg" width="100" height="46" /></td>
       <td class="center"><?php if($value['hmpage']==1){?>YES<br/><a href="<?php echo base_url();?>admin.php/Dashboard/hide_home/<?php echo $value['vid'] ;?>/0">HIDE</a><?php } else{?>NO<br/><a href="<?php echo base_url();?>admin.php/Dashboard/show_home/<?php echo $value['vid'] ;?>/1">Show</a><?php } ?></td>
        
        <td class="center">
          
            <a class="btn btn-info" href="<?php echo base_url();?>admin.php/Edit/album_videos/<?php echo $value['vid'] ;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo base_url();?>admin.php/Delete/album_videos/<?php echo $value['vid'] ;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php } ?>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>