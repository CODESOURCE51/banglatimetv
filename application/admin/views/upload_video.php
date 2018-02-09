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

<form name="video" id="video" action="<?php echo base_url();?>admin.php/dashboard/add_videos" method="post" enctype="multipart/form-data" onsubmit="return validate_video()">

  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Video</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Select Album</td>
        <td class="center">
    <div class="control-group">
                    

                    <div class="controls">
                     <select id="selectError" data-rel="chosen" name="txt_vCategory">
                     <?php foreach($albumvData as $cat){?>
                           
                            <option value="<?php echo $cat['v_album_id'];?>"><?php echo $cat['cover_title'];?></option>
                        <?php } ?>   
                        </select>
                       
                    </div>
                </div>
                </td>
        
        
       
        <td class="center">
            
           
        </td>
    </tr>
	<tr>
        <td>Video URL</td>
         <td class="center">
		<input type="text" name="txt_url" class="form-control video_name" id="inputSuccess1">
                  
                
		</td>
       
       
    </tr>
    <tr>
        <td>Show in Home Page</td>
         <td class="center">
		
         <label class="checkbox-inline">
         <input type="checkbox" name="txt_home_show" id="inlineCheckbox1" value="0" onclick="return hm_click(this.value)" style="float:left;">
</label>         
                
		</td>
       
       
    </tr>
	 
	 
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
            </button>
       
       
    </tr>
    <tr>
        <td></td>
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/view_video" class="btn btn-warning">View Videos</a></td>
       
       
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
<script>
function hm_click(hmshwval){
if(hmshwval == 0){
$('#inlineCheckbox1').val(1);
}
else {$('#inlineCheckbox1').val(0);}
}
</script>
