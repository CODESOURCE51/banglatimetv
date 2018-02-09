<?php require('header.php'); 

?>
<style>
#lazy_load {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index: 1001;
    -moz-opacity: 0.8;
    opacity: .80;
    filter: alpha(opacity=80);
}
.cvvhelp {
    border: medium none;
    display: none;
    height: auto;
    left: 50%;
    margin: 0 0 0 -155px;
    padding: 0;
    position: fixed;
    text-align: left;
    top: 50%;
    width: auto;
    z-index: 1002;
}
</style>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Sponsors</a>
        </li>
    </ul>
</div>

<form name="news" id="news" action="<?php echo base_url();?>admin.php/Edit/sponsor_update" method="post" enctype="multipart/form-data" onsubmit="return validate_sponsors()">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['sp_id'];?>" />
<input type="hidden" name="sp_pos" id="category" value="<?php echo $category[0]['sp_pos'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Sponsors</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Uploaded sponsor Iamge</td>
         <td class="center">
        
                   <img src="<?php echo base_url();?>sponsor/<?php echo $category[0]['sp_image'];?>" width="130" height="130">
                
        </td>
       
        <td class="center">
           
        </td>
    </tr>
	<tr>
        <td>Sponsor picture</td>
         <td class="center">
		
                   <input type="file" name="image_file1" id="exampleInputFile" class="image_name">
                
		</td>
       
        <td class="center">
           
        </td>
    </tr>
     <tr>
        <td>Sponsor URL</td>
        <td class="center">
       <input type="text" name="txt_url" id="exampleInputFile" class="txt_url" value="<?php echo $category[0]['url'];?>"></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
     <tr>
        <td>Activation</td>
        <td class="center">
      <label>
                        <input type="checkbox" value="<?php echo $category[0]['activate'];?>" <?php if($category[0]['activate'] == 1) {?>checked<?php }?> name="txt_activate" id="txt_activate" onclick="activate_add()">
                       
                    </label>
       
        <td class="center">
           
           
           
        </td>
    </tr>
    <tr>
        <td>Position</td>
        <td class="center">
       <?php echo $category[0]['sp_pos'];?>
                </td>
       
        <td class="center">
           
        </td>
    </tr>
	 
	 
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
            </button>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td></td>
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/vew_sponsors" class="btn btn-warning">View Sponsors</a></td>
       
       
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	  
</form>
<div id="lazy_load"><img src="<?php echo base_url();?>/assets/admin/img/ajax-loaders/ajax-loader-7.gif" title="img/ajax-loaders/ajax-loader-7.gif" class="cvvhelp" style="display:none;" /></div>

<?php require('footer.php'); ?>

